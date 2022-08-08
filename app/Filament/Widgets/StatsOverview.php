<?php

    namespace App\Filament\Widgets;

    use App\Models\Bill;
    use App\Models\Candidate;
    use Filament\Widgets\StatsOverviewWidget as BaseWidget;
    use Filament\Widgets\StatsOverviewWidget\Card;

    class StatsOverview extends BaseWidget {

        protected function getCards(): array
        {
            return [
                Card::make('Daily Candidates', Candidate::whereDate('created_at', now()->toDateString())->count()),
                Card::make('Monthly Candidates', Candidate::whereBetween('created_at', [
                    now()->startOfMonth()->toDateString(),
                    now()->endOfMonth()->toDateString(),
                ])->count()),
                Card::make('Previous Month Candidates', Candidate::whereBetween('created_at', [
                    now()->subMonth()->startOfMonth()->toDateString(),
                    now()->subMonth()->endOfMonth()->toDateString(),
                ])->count()),

                Card::make('Daily Invoices', Bill::whereDate('created_at', now()->toDateString())->count()),
                Card::make('Monthly Invoices', Bill::whereBetween('created_at', [
                    now()->startOfMonth()->toDateString(),
                    now()->endOfMonth()->toDateString(),
                ])->count()),
                Card::make('Previous Month Invoices', Bill::whereBetween('created_at', [
                    now()->subMonth()->startOfMonth()->toDateString(),
                    now()->subMonth()->endOfMonth()->toDateString(),
                ])->count()),

            ];
        }
    }
