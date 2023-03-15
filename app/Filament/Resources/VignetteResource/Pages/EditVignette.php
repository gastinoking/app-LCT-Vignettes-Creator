<?php

namespace App\Filament\Resources\VignetteResource\Pages;

use App\Filament\Resources\VignetteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVignette extends EditRecord
{
    protected static string $resource = VignetteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
