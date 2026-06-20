<?php

namespace App\Filament\Resources\Projects\Pages;

use App\Filament\Resources\Projects\ProjectResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Handle regular translatable attributes (title, description, etc.)
        foreach ($this->record->getTranslatableAttributes() as $attribute) {
            $translations = $this->record->getTranslations($attribute);
            $data[$attribute] = $translations['en'] ?? '';
            $data["{$attribute}_ar"] = $translations['ar'] ?? '';
        }

        // Handle images (nested translations)
        $imagesData = $this->record->images ?? [];
        $images = [];
        $imagesAr = [];

        foreach ($imagesData as $item) {
            $images[] = [
                'image' => $item['image'] ?? '',
                'description' => $item['description']['en'] ?? '',
            ];
            $imagesAr[] = [
                'description_ar' => $item['description']['ar'] ?? '',
            ];
        }

        $data['images'] = $images;
        $data['images_ar'] = $imagesAr;

        return $data;
    }
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        // Handle regular translatable attributes
        foreach ($record->getTranslatableAttributes() as $attribute) {
            $record->setTranslations($attribute, [
                'en' => $data[$attribute] ?? '',
                'ar' => $data["{$attribute}_ar"] ?? '',
            ]);
            unset($data[$attribute], $data["{$attribute}_ar"]);
        }

        // Handle images: merge English and Arabic repeaters
        $englishItems = $data['images'] ?? [];
        $arabicItems = $data['images_ar'] ?? [];

        $merged = [];
        foreach ($englishItems as $index => $enItem) {
            $merged[] = [
                'image' => $enItem['image'] ?? '',
                'description' => [
                    'en' => $enItem['description'] ?? '',
                    'ar' => $arabicItems[$index]['description_ar'] ?? '',
                ],
            ];
        }

        $record->images = $merged;
        unset($data['images'], $data['images_ar']);

        $record->fill($data);
        $record->save();

        return $record;
    }

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
