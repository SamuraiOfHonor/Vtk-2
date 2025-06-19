<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedResource\Pages;
use App\Filament\Resources\FeedResource\RelationManagers;
use App\Models\Feed;
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

class FeedResource extends Resource
{
    protected static ?string $model = Feed::class;
    protected static ?string $navigationLabel = 'Репорты';
    protected static ?string $navigationGroup = 'Обратная связь';
    protected static ?string $navigationIcon = 'heroicon-o-exclamation-triangle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Репорт')->schema([           
                    TextInput::make('name')
                        ->label('Имя')
                        ->placeholder('Ваня')
                        ->required(),
                    TextInput::make('number')
                        ->label('Номер телефона')
                        ->placeholder('+7 987 654 32 10')
                        ->required(),
                    TextInput::make('email')
                        ->label('e-mail')
                        ->placeholder('dummy@mail.ru')
                        ->required(),
                    TextInput::make('message')
                        ->label('Сообщение')
                        ->placeholder('На сайте обнаруженая проблема...')
                        ->required(),
                    Toggle::make('is_popular')
                        ->label('Приоритет')
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
                TextColumn::make('message')
                ->label(label: 'Сообщение')
                ->limit(90),
                BooleanColumn::make('is_popular')
                ->label('Приоритет'),
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
            'index' => Pages\ListFeeds::route('/'),
            'create' => Pages\CreateFeed::route('/create'),
            'edit' => Pages\EditFeed::route('/{record}/edit'),
        ];
    }
}
