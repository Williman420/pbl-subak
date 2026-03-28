<?php

namespace App\Filament\Resources\Artikels\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;
use Filament\Facades\Filament;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class ArtikelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255),
                DatePicker::make('tanggal_pembuatan')
                    ->required(),
                Textarea::make('isi_artikel')
                    ->required()
                    ->maxLength(5000),
                FileUpload::make('gambar_aktivitas')
                    ->disk('public')
                    ->directory('aktivitas-images')
                    ->visibility(true)
                    ->image()
                    ->required(),
                Hidden::make('id_pengelola')
                    ->default(fn() => Filament::auth()->user()?->id_pengelola)
                    ->required()
            ]);
    }
}
