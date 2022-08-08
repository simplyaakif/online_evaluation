<?php

namespace App\Filament\Widgets;

use App\Models\Bill;
use App\Models\Candidate;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class MonthlyInvoiceChart extends LineChartWidget
{
    protected static ?string $heading = 'Monthly Invoices';
    protected static ?int $sort = 6;
    protected function getData(): array
    {
        $data = Trend::model(Bill::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Monthly Invoices',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }
}
