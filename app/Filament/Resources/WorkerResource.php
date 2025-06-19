<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkerResource\Pages;
use App\Filament\Resources\WorkerResource\RelationManagers;
use App\Models\Worker;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
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
use phpDocumentor\Reflection\Types\Boolean;

class WorkerResource extends Resource
{
    protected static ?string $model = Worker::class;
    protected static ?string $navigationGroup = 'Сотрудники';

    protected static ?string $navigationLabel = 'Работники';

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Сотрудник')->schema([           
                    TextInput::make('name')
                    ->label('Имя сотрудника')
                    ->placeholder('Ваня Арубич Данилов')
                    ->required(),
                    Select::make('position_id')
                    ->label('Должность')
                    ->required()
                    ->placeholder('Выберите должность')
                    ->relationship('position','name'),
                    FileUpload::make('img')
                    ->label('Фотография')
                    ->image()
                    ->directory('/Worker/images')
                    ->required(),
                    TextInput::make('exp')
                    ->label('общий стаж работы')
                    ->placeholder('2 года 5 месяцев')
                    ->required(),
                    TextInput::make('exp_teacher')
                    ->label('Стаж(пед.)')
                    ->placeholder('1 год 2 месяца')
                    ->required(),
                ])->columnSpanFull(),
                Section::make('Учёба ')->schema([
                     Repeater::make('study')->label('Обучение')->schema([
                        TextInput::make('place')
                        ->label('Место учёбы')
                        ->placeholder('Вол. Тех. Кол.')
                        ->required(),
                        TextInput::make('specialization')
                        ->label('Специальность')
                        ->placeholder('Программист')
                        ->required(),
                        TextInput::make('time-start')
                        ->label('Год начала учёбы')
                        ->placeholder('2010')
                        ->numeric()
                        ->required(),
                        TextInput::make('time-end')
                        ->label('Год Конечной учёбы')
                        ->placeholder('2014')
                        ->numeric()
                        ->required(),
                    ])->columns(2)
                ])->columnSpanFull(),
                Section::make('Настройки ')->schema([
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
                ->label('ФИО')
                ->limit(60),
                ImageColumn::make('img')
                ->label('Фотография'),
                TextColumn::make('position.name')
                ->label('Должность')
                ->limit(60),
                TextColumn::make('created_time')
                ->label('Дата-создания'),
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
            'index' => Pages\ListWorkers::route('/'),
            'create' => Pages\CreateWorker::route('/create'),
            'edit' => Pages\EditWorker::route('/{record}/edit'),
        ];
    }
}
