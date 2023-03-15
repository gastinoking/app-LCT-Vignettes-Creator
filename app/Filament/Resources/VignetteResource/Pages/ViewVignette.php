<?php

namespace App\Filament\Resources\VignetteResource\Pages;

use App\Filament\Resources\VignetteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewVignette extends ViewRecord
{
    protected static string $resource = VignetteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
