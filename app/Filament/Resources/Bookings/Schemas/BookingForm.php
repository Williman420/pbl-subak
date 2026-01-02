<?php

namespace App\Filament\Resources\Bookings\Schemas;

use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

use Filament\Schemas\Schema;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('id_booking'),
                TextInput::make('id_aktivitas'),
                TextInput::make('id_pengunjung'),
                TextInput::make('tanggal_booking'),
                TextInput::make('jumlah_peserta'),
                TextInput::make('total_harga'),
                TextInput::make('jumlah_peserta'),
                Select::make('status_booking')
                    ->options([
                        'pending' => 'pending',
                        'confirmed' => 'confirmed',
                        'cancelled' => 'cancelled',
                    ]),
                TextInput::make('total_harga'),
                DatePicker::make('tanggal_kegiatan')
                    ->label('Tanggal Kegiatan')
                    ->nullable(),

                TimePicker::make('jam_mulai')
                    ->label('Jam Mulai')
                    ->seconds(false)
                    ->nullable(),

                TimePicker::make('jam_selesai')
                    ->label('Jam Selesai')
                    ->seconds(false)
                    ->nullable(),

                Select::make('status_booking')
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->required(),
            ]);
    }
}
