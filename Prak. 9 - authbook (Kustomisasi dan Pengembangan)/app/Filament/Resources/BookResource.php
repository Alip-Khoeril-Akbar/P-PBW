<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Models\Book;
use App\Models\BookCategory; 
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    // Tambahkan Policy untuk RBAC
    protected static ?string $policy = \App\Policies\BookPolicy::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Library Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Book Information')
                    ->schema([
                        Forms\Components\TextInput::make('isbn')
                            ->label('ISBN')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                        
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        
                        Forms\Components\Select::make('author_id')
                            ->relationship('author', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                            ]),
                        
                        // FIELD BARU: KATEGORI (Multiple Select)
                        Forms\Components\Select::make('categories') // Nama relasi tetap 'categories'
                            ->relationship('categories', 'name')
                            ->multiple() // Memungkinkan memilih banyak kategori
                            ->preload()  
                            ->searchable()
                            ->required()
                            ->createOptionForm([ // Tambah opsi membuat kategori baru
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    // PENTING: Unique harus menggunakan Model yang baru
                                    ->unique(BookCategory::class, 'name') 
                                    ->maxLength(255),
                            ]),

                        Forms\Components\TextInput::make('publisher')
                            ->maxLength(255),
                        
                        Forms\Components\TextInput::make('year')
                            ->numeric()
                            ->minValue(1000)
                            ->maxValue(date('Y'))
                            ->step(1),
                        
                        Forms\Components\Select::make('status')
                            ->options([
                                'available' => 'Available',
                                'borrowed' => 'Borrowed',
                            ])
                            ->required()
                            ->default('available'),

                        Forms\Components\Textarea::make('description')
                            ->rows(4)
                            ->maxLength(5000)
                            ->columnSpan(2)
                            ->placeholder('Enter book description...'),

                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('Cover Image')
                    ->schema([
                        Forms\Components\FileUpload::make('cover')
                            ->image()
                            ->directory('book-covers')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->helperText('Maximum file size: 2MB. Accepted formats: JPEG, PNG, WebP'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('cover')
                    ->circular()
                    ->defaultImageUrl(url('/images/default-book-cover.png')),
                
                Tables\Columns\TextColumn::make('isbn')
                    ->label('ISBN')
                    ->searchable()
                    ->sortable()
                    ->copyable(),
                
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(50),
                
                Tables\Columns\TextColumn::make('author.name')
                    ->searchable()
                    ->sortable(),

                // KOLOM BARU: KATEGORI
                TextColumn::make('categories.name')
                    ->badge() 
                    ->label('Kategori')
                    ->searchable(), 
                
                Tables\Columns\TextColumn::make('publisher')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                Tables\Columns\TextColumn::make('year')
                    ->sortable()
                    ->alignCenter(),
                
                Tables\Columns\TextColumn::make('description')
                    ->label('Description')
                    ->limit(50)
                    ->wrap()
                    ->toggleable(),
                    
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'success' => 'available',
                        'warning' => 'borrowed',
                    ])
                    ->icons([
                        'heroicon-o-check-circle' => 'available',
                        'heroicon-o-clock' => 'borrowed',
                    ]),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'available' => 'Available',
                        'borrowed' => 'Borrowed',
                    ]),
                
                // FILTER BARU: KATEGORI
                Tables\Filters\SelectFilter::make('categories')
                    ->relationship('categories', 'name')
                    ->label('Kategori')
                    ->searchable()
                    ->preload(),

                Tables\Filters\SelectFilter::make('year')
                    ->options(function () {
                        $currentYear = date('Y');
                        $years = [];
                        for ($year = $currentYear; $year >= 1950; $year--) {
                            $years[$year] = $year;
                        }
                        return $years;
                    })
                    ->searchable(),
                
                Tables\Filters\SelectFilter::make('author')
                    ->relationship('author', 'name')
                    ->searchable()
                    ->preload(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'view' => Pages\ViewBook::route('/{record}'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}