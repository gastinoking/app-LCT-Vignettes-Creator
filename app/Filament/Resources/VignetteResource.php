<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VignetteResource\Pages;
use App\Filament\Resources\VignetteResource\RelationManagers;
use App\Models\Vignette;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VignetteResource extends Resource
{
    protected static ?string $model = Vignette::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\Grid::make(2)->schema([
                        Forms\Components\TextInput::make('entreprise') ->required(),
                        Forms\Components\TextInput::make('immatriculation') ->required()

                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVignettes::route('/'),
            'create' => Pages\CreateVignette::route('/create'),
            'view' => Pages\ViewVignette::route('/{record}'),
            'edit' => Pages\EditVignette::route('/{record}/edit'),
        ];
    }
}
