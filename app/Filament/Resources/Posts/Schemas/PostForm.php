<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\Category;
use App\Models\Post;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Post Information')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Set $set) {
                                if ($operation !== 'create' && $operation !== 'edit') {
                                    return;
                                }
                                $set('slug', Str::slug($state));
                            }),
                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(Post::class, 'slug', ignoreRecord: true),
                        Select::make('category_id')
                            ->label('Category')
                            ->required()
                            ->options(Category::all()->pluck('name', 'id'))
                            ->searchable(),
                        Select::make('tags')
                            ->multiple()
                            ->relationship('tags', 'name')
                            ->preload()
                            ->searchable(),
                    ])
                    ->columns(2),

                Section::make('Content')
                    ->schema([
                        Textarea::make('excerpt')
                            ->rows(3)
                            ->maxLength(500)
                            ->helperText('Brief summary of the post'),
                        RichEditor::make('content')
                            ->required()
                            ->fileAttachmentsDirectory('posts')
                            ->columnSpanFull(),
                    ]),

                Section::make('Featured Image')
                    ->schema([
                        FileUpload::make('featured_image')
                            ->image()
                            ->directory('posts')
                            ->imageEditor()
                            ->maxSize(2048)
                            ->helperText('Recommended size: 1200x630 pixels'),
                    ]),

                Section::make('Publishing')
                    ->schema([
                        DateTimePicker::make('published_at')
                            ->label('Publish Date')
                            ->default(now()),
                        Select::make('status')
                            ->options([
                                'draft' => 'Draft',
                                'published' => 'Published',
                                'archived' => 'Archived',
                            ])
                            ->default('draft')
                            ->required(),
                    ])
                    ->columns(2),

            ]);
    }
}
