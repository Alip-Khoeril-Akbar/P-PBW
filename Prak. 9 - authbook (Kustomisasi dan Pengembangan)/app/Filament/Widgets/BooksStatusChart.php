<?php

namespace App\Filament\Widgets; 

use App\Models\Book;
use Filament\Widgets\BarChartWidget;

class BooksStatusChart extends BarChartWidget
{
    protected static ?string $heading = 'Books Status Overview';

    protected function getData(): array
    {
        $available = Book::where('status', 'available')->count();
        $borrowed  = Book::where('status', 'borrowed')->count();

        return [
            'datasets' => [
                [
                    'label' => 'Books',
                    'data' => [$available, $borrowed],
                ],
            ],
            'labels' => ['Available', 'Borrowed'],
        ];
    }
}
