<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\Toggle;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-cake';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Select::make('product_category_id')
                            ->relationship('productCategory', 'title')
                            ->required(),
                        Forms\Components\TextInput::make('name')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->required(),
                        Forms\Components\TextInput::make('slug')
                            ->label('Slug Product')
                            ->placeholder('Slug Product')
                            ->readOnly(),
                        Forms\Components\RichEditor::make('description')
                            ->label('Description')
                            ->placeholder('Description')
                            ->required(),
                        Forms\Components\FileUpload::make('thumbnail')
                            ->label('Image')
                            ->required(),
                        Forms\Components\TextInput::make('price')
                            ->label('price')
                            ->numeric()
                            ->prefix('Rp')
                            ->inputMode('decimal'),
                        Forms\Components\Toggle::make('is_featured')
                            ->label('Produk Unggulan')
                            ->helperText('Jika aktif, produk akan tampil di halaman utama.'),
                        Forms\Components\Toggle::make('is_visible')
                            ->label('Tampilkan Produk')
                            ->helperText('Jika nonaktif, produk akan disembunyikan dari toko.')
                            ->default(true), // Nilai default saat membuat produk baru
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')->circular()->size(100),
                Tables\Columns\TextColumn::make('productCategory.title'),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('price')
                    ->formatStateUsing(fn(string $state): string => 'Rp ' . number_format($state, 0, ',', '.'))
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('is_featured'),
                Tables\Columns\ToggleColumn::make('is_visible'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
