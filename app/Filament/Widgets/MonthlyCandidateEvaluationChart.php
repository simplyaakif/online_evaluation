<?php

namespace App\Filament\Widgets;

use App\Models\CandidateEvaluation;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class MonthlyCandidateEvaluationChart extends LineChartWidget
{
    protected static ?string $heading = 'Monthly Evaluations';
    protected static ?int $sort = 6;

    protected function getData(): array
    {
        $data = Trend::model(CandidateEvaluation::class)
            ->between(
                start: now()->subMonths(36)->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Monthly Evaluations',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }
}
