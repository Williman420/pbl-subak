<?php

namespace App\Filament\Resources\Aktivitas\Pages;

use App\Filament\Resources\Aktivitas\AktivitasResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAktivitas extends EditRecord
{
    protected static string $resource = AktivitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
