<?php

namespace App\Filament\Widgets; 

use App\Models\Author;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class TotalAuthors extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Authors', Author::count())
                ->icon('heroicon-o-user-group')
                ->color('success'),
        ];
    }
}
