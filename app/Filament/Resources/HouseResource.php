<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HouseResource\Pages;
use App\Filament\Resources\HouseResource\RelationManagers;
use App\Models\House;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HouseResource extends Resource
{
    protected static ?string $model = House::class;
    protected static ?string $navigationLabel = 'Обн. Корпус';
    protected static ?string $navigationGroup = 'Корпус';
    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Изображение Нового корпуса')->schema([           
                    TextInput::make('name')
                    ->label('Название изображения')
                    ->placeholder('Изображение-1')
                    ->required(),
                    FileUpload::make('img')
                    ->label('Изображение')
                    ->image()
                    ->directory('/House/images')
                    ->required(),
                    Toggle::make('is_popular')
                    ->label('Популярный')
                    ->required(),
                    Toggle::make('is_active')
                    ->label('Активный')
                    ->required(),
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Название Изображения Нового корпуса')
                ->limit(60),
                ImageColumn::make('img')
                ->label('Изображение'),
                BooleanColumn::make('is_popular')
                ->label('Популярность'),
                BooleanColumn::make('is_active')
                ->label('Активный'),
                TextColumn::make('created_time')
                ->label('Дата-создания')
                ->limit(60),
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
            'index' => Pages\ListHouses::route('/'),
            'create' => Pages\CreateHouse::route('/create'),
            'edit' => Pages\EditHouse::route('/{record}/edit'),
        ];
    }
}
