<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TitleResource\Pages;
use App\Filament\Resources\TitleResource\RelationManagers;
use App\Models\Title;
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

class TitleResource extends Resource
{
    protected static ?string $model = Title::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Логотип,Название';
    protected static ?string $navigationGroup = 'О нас';

    public static function canCreate(): bool{
        return Title::count() === 0;
    }
    public static function mutateFormDataBeforeCreate(array $data): array{
        if (Title::exists()) {
            throw ValidationException::withMessages([
                'global' => 'Настройки сайта уже существуют. Вы можете редактировать существующую запись.',
            ]);
        }
        return $data;
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Настройки 1')->schema([           
                    TextInput::make('name')
                    ->label('Название Учреждения')
                    ->placeholder('ВТК')
                    ->required(),
                    FileUpload::make('img')
                    ->label('Логотип')
                    ->image()
                    ->directory('/Title/images')
                    ->required(),
                ])->columnSpanFull(),
                Section::make('Настройки 2')->schema([
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
                ->label('Название Учреждения')
                ->limit(60),
                ImageColumn::make('img')
                ->label('Лого'),
                TextColumn::make('created_time')
                ->label('Дата-создания'),
                BooleanColumn::make('is_active')
                ->label('Активный'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([])->paginated(false);
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
            'index' => Pages\ListTitles::route('/'),
            'create' => Pages\CreateTitle::route('/create'),
            'edit' => Pages\EditTitle::route('/{record}/edit'),
        ];
    }
}
