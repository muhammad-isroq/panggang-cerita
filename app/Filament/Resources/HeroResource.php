<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroResource\Pages;
use App\Filament\Resources\HeroResource\RelationManagers;
use App\Models\Hero;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextInputColumn;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static ?string $navigationIcon = 'heroicon-o-window';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->required()
                            ->label('Gambar Halaman Beranda'),
                        Forms\Components\RichEditor::make('title1')
                            ->required(),
                        Forms\Components\RichEditor::make('title2')
                            ->required(),
                        Forms\Components\FileUpload::make('hero_cerita')
                            ->required()
                            ->label('Gambar Halaman Cerita'),
                        Forms\Components\FileUpload::make('hero_menu')
                            ->required()
                            ->label('Gambar Halaman Menu'),
                        Forms\Components\FileUpload::make('hero_lokasi')
                            ->required()
                            ->label('Gambar Halaman Lokasi'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->circular()->size(100)->label('Gambar Halaman Beranda'),
                Tables\Columns\TextColumn::make('title1')->html(),
                Tables\Columns\TextColumn::make('title2')->html(),
                Tables\Columns\ImageColumn::make('hero_cerita')->circular()->size(100)->label('Gambar Halaman Cerita'),
                Tables\Columns\ImageColumn::make('hero_menu')->circular()->size(100)->label('Gambar Halaman Menu'),
                Tables\Columns\ImageColumn::make('hero_lokasi')->circular()->size(100)->label('Gambar Halaman Lokasi'),
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
            'index' => Pages\ListHeroes::route('/'),
            'create' => Pages\CreateHero::route('/create'),
            'edit' => Pages\EditHero::route('/{record}/edit'),
        ];
    }
}
