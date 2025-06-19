<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormResource\Pages;
use App\Filament\Resources\FormResource\RelationManagers;
use App\Models\Form as FormModel;
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

class FormResource extends Resource
{
    protected static ?string $model = FormModel::class;
    protected static ?string $navigationLabel = 'Формы обучения';
    protected static ?string $navigationGroup = 'Кафедры';
    protected static ?string $navigationIcon = 'heroicon-o-variable';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Форма обучения')->schema([           
                    TextInput::make('name')
                    ->label('Название Формы обучения')
                    ->placeholder('Очная')
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
                ->label(label: 'Форма обучения')
                ->limit(90),
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
            'index' => Pages\ListForms::route('/'),
            'create' => Pages\CreateForm::route('/create'),
            'edit' => Pages\EditForm::route('/{record}/edit'),
        ];
    }
}
