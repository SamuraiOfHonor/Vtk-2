<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChangeResource\Pages;
use App\Filament\Resources\ChangeResource\RelationManagers;
use App\Models\Change;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ChangeResource extends Resource
{
    protected static ?string $model = Change::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Изменения корпуса';
    protected static ?string $navigationGroup = 'Корпус';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Основная информация')->schema([

                    TextInput::make('name')
                        ->label('Что изменилось')
                        ->required()
                        ->placeholder('Перекрашены стены'),
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
                ->label('Название Кафедры')
                ->limit(60),
                BooleanColumn::make('is_popular')
                ->label('Популярность'),
                BooleanColumn::make('is_active')
                ->label('Активный'),
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
            'index' => Pages\ListChanges::route('/'),
            'create' => Pages\CreateChange::route('/create'),
            'edit' => Pages\EditChange::route('/{record}/edit'),
        ];
    }
}
