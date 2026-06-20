<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class BlogPostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, $set) {
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                TextInput::make('category')
                    ->maxLength(255),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull()
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ]),
                Textarea::make('excerpt')
                    ->maxLength(500)
                    ->columnSpanFull(),
                FileUpload::make('featured_image')
                    ->image()
                    ->disk('public')
                    ->directory('blog-images')
                    ->imageEditor()
                    ->maxSize(5120),
                DateTimePicker::make('published_at'),
                Toggle::make('is_published')
                    ->required(),
                TextInput::make('tech_stack')
                    ->label('Technology Stack (comma separated)')
                    ->placeholder('Laravel, PHP, MySQL, Tailwind CSS')
                    ->helperText('Separate tags with commas'),

                // 2. Hashtags (tags)
                TextInput::make('tags')
                    ->label('Hashtags (comma separated)')
                    ->placeholder('#FingerprintSystem, #EdTech, #Laravel'),

                // 3. Dynamic Sections
                Repeater::make('sections')
                    ->label('Content Sections')
                    ->default([])
                    ->schema([
                        Select::make('type')
                            ->label('Section Type')
                            ->required()
                            ->default('paragraph')
                            ->options([
                                'heading' => 'Heading',
                                'paragraph' => 'Paragraph',
                                'list' => 'Bullet List',
                                'numbered_list' => 'Numbered List',
                                'quote' => 'Quote',
                                'image' => 'Image',
                                'stats' => 'Statistics Cards',
                                'feature_cards' => 'Feature Cards',
                                'step_list' => 'Step List (numbered with icons)',
                                'tech_chips' => 'Technology Chips (inline)',
                                'two_column_cards' => 'Two-column Cards',
                                'grid_3_cards' => '3-column Cards',
                            ])
                            ->required()
                            ->reactive(),

                        // Common fields
                        TextInput::make('title')
                            ->label('Title/Heading')
                            ->visible(fn ($get) => in_array($get('type'), ['heading', 'stats', 'feature_cards', 'step_list', 'grid_3_cards', 'two_column_cards'])),

                        RichEditor::make('content')
                            ->label('Content')
                            ->visible(fn ($get) => in_array($get('type'), ['paragraph', 'quote', 'list', 'numbered_list'])),
//
//                        // For list items (if using simple textarea per item)
                        Textarea::make('items')
                            ->label('List Items (one per line)')
                            ->visible(fn ($get) => in_array($get('type'), ['list', 'numbered_list', 'step_list']))
                            ->placeholder("Item 1\nItem 2\nItem 3"),
//
//                        // For stats cards
                        Repeater::make('stats')
                            ->label('Statistics Cards')
                            ->schema([
                                TextInput::make('value')->label('Stat Value (e.g. 98%)'),
                                TextInput::make('label')->label('Stat Label'),
                            ])
                            ->columns(2)
                            ->visible(fn ($get) => $get('type') === 'stats'),

//                        // For feature cards (or grid cards)
                        Repeater::make('cards')
                            ->label('Cards')
                            ->schema([
                                TextInput::make('icon')->label('Icon (emoji)')->placeholder('🔐'),
                                TextInput::make('title')->label('Title'),
                                TextInput::make('description')->label('Description'),
                            ])
                            ->columns(3)
                            ->visible(fn ($get) => in_array($get('type'), ['feature_cards', 'grid_3_cards', 'two_column_cards'])),

                        // For step list (numbered steps)
                        Repeater::make('steps')
                            ->label('Steps')
                            ->schema([
                                TextInput::make('title')->label('Step Title'),
                                Textarea::make('description')->label('Step Description'),
                            ])
                            ->columns(2)
                            ->visible(fn ($get) => $get('type') === 'step_list'),

                        // For quote
                        TextInput::make('author')
                            ->label('Quote Author')
                            ->visible(fn ($get) => $get('type') === 'quote'),

                        // For image
                        FileUpload::make('image')
                            ->image()
                            ->disk('public')
                            ->directory('blog-images')
                            ->visible(fn ($get) => $get('type') === 'image'),

                        // For tech chips (inline tags)
                        TextInput::make('tech_items')
                            ->label('Technologies (comma separated)')
                            ->placeholder('Laravel, PHP, MySQL')
                            ->visible(fn ($get) => $get('type') === 'tech_chips'),
                    ])
                    ->defaultItems(0) // start empty
                    ->collapsible()
                    ->columnSpanFull(),
            ]);
    }
}
