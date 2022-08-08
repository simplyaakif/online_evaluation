<?php

namespace App\Filament\Widgets;

use App\Models\Candidate;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class MonthlyCandidatesChart extends LineChartWidget
{
    protected static ?string $heading = 'Monthly Candidate Chart';
    protected static ?int $sort = 4;

    protected function getData(): array
    {
        $data = Trend::model(Candidate::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Daily Candidates',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }
}
