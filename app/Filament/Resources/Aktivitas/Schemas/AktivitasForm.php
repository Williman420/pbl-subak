<?php

namespace App\Filament\Resources\Aktivitas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;

use filament\Forms\Components\Hidden;
use App\Models\Pengelola;

use Filament\Facades\Filament;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class AktivitasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_aktivitas')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slot')
                    ->required(),
                Textarea::make('deskripsi')
                    ->required()
                    ->maxLength(1000),
                TextInput::make('harga')
                    ->required()
                    ->numeric(),
                FileUpload::make('gambar_aktivitas')
                    ->disk('public')
                    ->directory('aktivitas-images')
                    ->visibility(true)
                    ->image()
                    ->required(),
                DatePicker::make('start_date')
                    ->required(),
                DatePicker::make('end_date')
                    ->required(),
                Select::make('status_ketersediaan')
                    ->options([
                        'Available' => 'available',
                        'Not Available' => 'not available',
                    ])
                    ->required(),
                
            ]);
    }
}
