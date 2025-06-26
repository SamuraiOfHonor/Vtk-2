<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DirectionResource\Pages;
use App\Filament\Resources\DirectionResource\RelationManagers;
use App\Models\Direction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class DirectionResource extends Resource
{
    protected static ?string $model = Direction::class;
    protected static ?string $navigationLabel = 'Направления';
    protected static ?string $navigationGroup = 'Кафедры';
    
    protected static ?string $navigationIcon = 'heroicon-o-beaker';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Основная информация')->schema([
                    TextInput::make('code')
                        ->label('Код кафедры')
                        ->required()
                        ->placeholder('22.22.22'),
                    TextInput::make('name')
                        ->label('Название кафедры')
                        ->live()
                        ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                        ->required()
                        ->placeholder('Эксплуатация и обслуживание много-квартирного дома')
                    ,TextInput::make('slug')
                        ->label('slug')
                        ->disabled()
                        ->maxLength(255)
                        ->dehydrated()
                        ->unique(Direction::class, 'slug', ignoreRecord: true)
                        ->required(),
                    FileUpload::make('img')
                        ->image()
                        ->directory('/direction/images')
                        ->required(),
                ])->columnSpanFull(),
                Section::make('Информация о кафедре')->schema([
                    TextArea::make('description')
                        ->label('Описание направления')
                        ->required()
                        ->placeholder('Мы учим создавать цифровой мир. Здесь вы освоите...'),
                    TextInput::make('type')
                        ->label('Вид образовательной программы')
                        ->required()
                        ->placeholder('Программы подготовки специалистов среднего звена'),
                    TextInput::make('level')
                        ->label('Реализуемый уровень образования')
                        ->required()
                        ->placeholder('Среднее профессиональное образование'),
                    TextInput::make('Qualification')
                        ->label('Квалификация')
                        ->required()
                        ->placeholder('Техник'),
                    Select::make('language_id')
                        ->label('Информация о языках, на которых осуществляется образование')
                        ->required()
                        ->placeholder('Выберите язык')
                        ->relationship('language', 'name'),
                    TextInput::make('accreditation')
                        ->label('Срок действия гос. аккредитации')
                        ->required()
                        ->placeholder('Бессрочно, на основании части 12 с..."'),
                    TextInput::make('Department')
                        ->label('Кафедра')
                        ->required()
                        ->placeholder('Гостеприимство и реклама'),
           
           
                ])->columnSpanFull(),
                Section::make('Информация о кафедре-2')->schema([
                    Repeater::make('form_id')->label('Обучение')->schema([
                        TextInput::make('basic-1')
                            ->label('Базовое образование')
                            ->required()
                            ->placeholder('На базе основного общего образования (9 классов)'),
                        Select::make('form_id')
                            ->label('форма обучения')
                            ->required()
                            ->placeholder('Выберите форму обучения')
                            ->relationship('form', 'name'),
                        TextInput::make('time-1')
                            ->label('срок обучения')
                            ->required()
                            ->placeholder('2 года 10 месяцев'),
                        ])->columns(2)
                ])->columnSpanFull(),
                Section::make('Настройка')->schema([
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
                TextColumn::make('code')
                ->label('Код Кафедры')
                ->limit(60),
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
            'index' => Pages\ListDirections::route('/'),
            'create' => Pages\CreateDirection::route('/create'),
            'edit' => Pages\EditDirection::route('/{record}/edit'),
        ];
    }
}
