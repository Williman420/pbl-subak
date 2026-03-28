<?php

namespace App\Filament\Widgets;


use Filament\Widgets\ChartWidget;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;


class BookingChart extends ChartWidget
{
    protected ?string $heading = 'Booking Chart';

    protected function getData(): array
    {

        $data = Booking::query()
            ->select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('COUNT(*) as total')
            )
            ->groupBy('date')
            ->orderBy('date')
            ->get();


        return [
            'datasets' => [
                [
                    'label' => 'Bookings',
                    'data' => $data->pluck('total'),
                    'fill' => false,
                ],
            ],
            'labels' => $data->pluck('date'),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
