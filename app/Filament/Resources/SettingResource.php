<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('alamat')
                            ->label('alamat')
                            ->required(),
                        Forms\Components\TextInput::make('lokasi')
                            ->label('lokasi')
                            ->required(),
                        Forms\Components\TextInput::make('no_hp')
                            ->label('No HP')
                            ->required(),
                        Forms\Components\TextInput::make('whatsapp')
                            ->label('whatsapp')
                            ->required(),
                        Forms\Components\TextInput::make('email')
                            ->label('email')
                            ->required(),
                        Forms\Components\TextInput::make('opening_hours_weekday')
                            ->label('opening hours weekday')
                            ->required(),
                        Forms\Components\TextInput::make('opening_hours_weekend')
                            ->label('opening hours weekend')
                            ->required(),
                        Forms\Components\TextInput::make('instagram')
                            ->label('instagram')
                            ->required(),
                        Forms\Components\TextInput::make('facebook')
                            ->label('facebook')
                            ->required(),
                        Forms\Components\TextInput::make('tiktok')
                            ->label('tiktok')
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([                
                Tables\Columns\TextColumn::make('no_hp'),
                Tables\Columns\TextColumn::make('whatsapp'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('opening_hours_weekday'),
                Tables\Columns\TextColumn::make('opening_hours_weekend'),
                Tables\Columns\TextColumn::make('instagram'),
                Tables\Columns\TextColumn::make('facebook'),
                Tables\Columns\TextColumn::make('tiktok'),
                Tables\Columns\TextColumn::make('alamat'),
                Tables\Columns\TextColumn::make('lokasi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
