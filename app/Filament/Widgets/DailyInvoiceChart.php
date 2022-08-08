<?php

namespace App\Filament\Widgets;

use App\Models\Bill;
use App\Models\Candidate;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class DailyInvoiceChart extends LineChartWidget
{
    protected static ?string $heading = 'Daily Invoices';
    protected static ?int $sort = 5;
    protected function getData(): array
    {
        $data = Trend::model(Bill::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Daily Invoices',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }
}
