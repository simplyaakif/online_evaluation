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
    protected static ?int $sort = 8;
    protected function getData(): array
    {
        $data = Trend::model(Bill::class)
            ->between(
                start: now()->subMonths(36)->startOfMonth(),
                end: now()->endOfMonth(),
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
