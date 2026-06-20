<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Project Details')
                    ->tabs([
                        Tab::make('En')
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('description')->required(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('projects/thumbnails'),
                TagsInput::make('technologies'),
                Select::make('type')
                    ->options(['url' => 'External URL', 'gallery' => 'Image Gallery'])
                    ->required()
                    ->live()
                    ->default('url'),

                TextInput::make('url')
                    ->url()->maxLength(255)
                    ->visible(fn (Get $get) => $get('type') === 'url')
                    ->required(fn (Get $get) => $get('type') === 'url'),

                // Repeater for gallery
                Repeater::make('images')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->directory('projects/galleries')
                            ->disk('public')
                            ->required()
                            ->columnSpanFull(),
                        Textarea::make('description')
                            ->rows(2)
                            ->placeholder('Optional description for this image')
                            ->maxLength(500),
                    ])
                    ->visible(fn (Get $get) => $get('type') === 'gallery')
                    ->required(fn (Get $get) => $get('type') === 'gallery')
                    ->minItems(1)
                    ->addActionLabel('Add another image')
                    ->itemLabel(fn (array $state): ?string => $state['description'] ?? 'Untitled image')
                    ->collapsible(),
            ]),
                        Tab::make('Ar')
                            ->schema([
                                TextInput::make('title_ar')
                                    ->required()
                                    ->maxLength(255),
                                RichEditor::make('description_ar')->required(),
                                Repeater::make('images_ar')
                                    ->schema([
                                        Textarea::make('description_ar')
                                            ->rows(2)
                                            ->placeholder('Optional description for this image')
                                            ->maxLength(500),
                                    ])
                                    ->visible(fn (Get $get) => $get('type') === 'gallery')
                                    ->required(fn (Get $get) => $get('type') === 'gallery')
                                    ->minItems(1)
                                    ->addActionLabel('Add another image')
                                    ->itemLabel(fn (array $state): ?string => $state['description'] ?? 'Untitled image')
                                    ->collapsible(),
                            ]),

                    ])->columnSpanFull(),
            ]);
    }
}
