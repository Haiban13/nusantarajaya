<?php
namespace App\Filament\Widgets;

use App\Models\Artikel;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class StatistikLineChart extends ChartWidget
{
    protected static ?string $heading = 'Statistik Artikel per Bulan';

    protected function getData(): array
    {
        $data = Artikel::selectRaw("MONTH(created_at) as bulan, COUNT(*) as jumlah")
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('jumlah', 'bulan');

        $labels = [];
        $values = [];

        for ($i = 1; $i <= 12; $i++) {
            $labels[] = date("F", mktime(0, 0, 0, $i, 1));
            $values[] = $data[$i] ?? 0;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Artikel',
                    'data' => $values,
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                    'fill' => true,
                    'tension' => 0.4, // agar garisnya melengkung
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected static ?string $maxHeight = '300px';
}