<?php

namespace App\Filament\Widgets;

use App\Models\CandidateEvaluation;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class DailyCandidateEvaluationChart extends LineChartWidget
{
    protected static ?string $heading = 'Daily Evaluations';
    protected static ?int $sort = 5;
    protected function getData(): array
    {
        $data = Trend::model(CandidateEvaluation::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Daily Evaluations',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }
}
