<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BodyResource\Pages;
use App\Filament\Resources\BodyResource\RelationManagers;
use App\Models\Body;
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

class BodyResource extends Resource
{
    protected static ?string $model = Body::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Старый Корпус';
    protected static ?string $navigationGroup = 'Корпус';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Изображение Старого корпуса')->schema([           
                    TextInput::make('name')
                    ->label('Название изображения')
                    ->placeholder('Изображение-1')
                    ->required(),
                    FileUpload::make('img')
                    ->label('Изображение')
                    ->image()
                    ->directory('/Body/images')
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
                ->label('Название Изображения Старого корпсуса')
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
            'index' => Pages\ListBodies::route('/'),
            'create' => Pages\CreateBody::route('/create'),
            'edit' => Pages\EditBody::route('/{record}/edit'),
        ];
    }
}
