<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Filament\Widgets\TableWidget;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;

class ThisWeekBookings extends TableWidget
{
    protected static ?string $heading = 'Bookings This Week';


    protected function getTableQuery(): Builder
    {
        return Booking::with('aktivitas')
            ->whereBetween(
                'tanggal_booking',
                [now()->startOfWeek(), now()->endOfWeek()]
            )
            ->orderBy('tanggal_booking');
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id_booking')
                ->label('Booking ID'),

            Tables\Columns\TextColumn::make('aktivitas.nama_aktivitas')
                ->label('Activity'),

            Tables\Columns\TextColumn::make('tanggal_booking')
                ->date()
                ->label('Date'),

            Tables\Columns\TextColumn::make('status_booking')
                ->badge(),
        ];
    }
}
