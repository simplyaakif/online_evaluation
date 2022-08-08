<?php

namespace App\Filament\Widgets;

use App\Models\Candidate;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class CandidatesChart extends LineChartWidget
{
    protected static ?string $heading = 'Candidate Chart';
    protected static ?int $sort = 3;
    protected function getData(): array
    {
        $data = Trend::model(Candidate::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
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
