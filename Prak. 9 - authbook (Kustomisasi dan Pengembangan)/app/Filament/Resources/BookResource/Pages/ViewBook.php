<?php

namespace App\Filament\Resources\BookResource\Pages;

use App\Filament\Resources\BookResource;
use Filament\Actions;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewBook extends ViewRecord
{
    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make('Book Details')
                    ->schema([
                        Infolists\Components\ImageEntry::make('cover')
                            ->height(200)
                            ->defaultImageUrl(url('/images/default-book-cover.png')),
                        
                        Infolists\Components\TextEntry::make('isbn')
                            ->label('ISBN')
                            ->copyable(),
                        
                        Infolists\Components\TextEntry::make('title')
                            ->size(Infolists\Components\TextEntry\TextEntrySize::Large)
                            ->weight('bold'),
                        
                        Infolists\Components\TextEntry::make('author.name')
                            ->label('Author'),
                        
                        // === FIELD BARU: KATEGORI ===
                        Infolists\Components\TextEntry::make('categories.name')
                            ->label('Categories')
                            ->badge()
                            ->columnSpanFull(), // Pastikan kolom ini mengambil ruang penuh
                        // ============================
                        
                        Infolists\Components\TextEntry::make('publisher'),
                        
                        Infolists\Components\TextEntry::make('year'),
                        
                        Infolists\Components\TextEntry::make('status')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'available' => 'success',
                                'borrowed' => 'warning',
                            }),

                        // === Description ===
                        Infolists\Components\TextEntry::make('description')
                            ->label('Description')
                            ->columnSpanFull()
                            ->markdown(),

                        Infolists\Components\TextEntry::make('created_at')
                            ->dateTime(),
                        
                        Infolists\Components\TextEntry::make('updated_at')
                            ->dateTime(),
                    ])
                    ->columns(2),
            ]);
    }

}