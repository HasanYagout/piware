<?php

namespace App\Filament\Resources\BlogPosts\Pages;

use App\Filament\Resources\BlogPosts\BlogPostResource;
use App\Models\BlogPost;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditBlogPost extends EditRecord
{
    protected static string $resource = BlogPostResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        foreach ($this->record->getTranslatableAttributes() as $attribute) {
            $translations = $this->record->getTranslations($attribute);

            $data[$attribute] = $translations['en'] ?? '';
            $data["{$attribute}_ar"] = $translations['ar'] ?? '';

        }

        return $data;
    }




    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        foreach ($record->getTranslatableAttributes() as $attribute) {
            $record->setTranslations($attribute, [
                'en' => $data[$attribute] ?? '',
                'ar' => $data["{$attribute}_ar"] ?? '',
            ]);
            unset($data[$attribute], $data["{$attribute}_ar"]);

        }
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
