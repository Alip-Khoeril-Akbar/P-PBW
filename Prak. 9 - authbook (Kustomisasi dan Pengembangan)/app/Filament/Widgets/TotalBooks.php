<?php

namespace App\Filament\Widgets; 

use App\Models\Book;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class TotalBooks extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Books', Book::count())
                ->icon('heroicon-o-book-open')
                ->color('primary'),
        ];
    }
}
