<?php

namespace App\Filament\Resources\BlogPosts\Pages;

use App\Filament\Resources\BlogPosts\BlogPostResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateBlogPost extends CreateRecord
{
    protected static string $resource = BlogPostResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $post = new (static::getModel());
        foreach ($post->getTranslatableAttributes() as $attribute) {
            $post->setTranslations($attribute, [
                'en' => $data[$attribute] ?? '',
                'ar' => $data["{$attribute}_ar"] ?? '',
            ]);
            unset($data[$attribute], $data["{$attribute}_ar"]);
        }
        $post->fill($data);
        $post->save();

        return $post;
    }
}
