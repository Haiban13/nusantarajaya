<?php

namespace App\Filament\Resources\LaporkanResource\Pages;

use App\Filament\Resources\LaporkanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporkan extends EditRecord
{
    protected static string $resource = LaporkanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
