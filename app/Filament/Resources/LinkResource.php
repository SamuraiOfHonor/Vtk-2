<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LinkResource\Pages;
use App\Filament\Resources\LinkResource\RelationManagers;
use App\Models\Link;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
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

class LinkResource extends Resource
{
    protected static ?string $model = Link::class;
    protected static ?string $navigationLabel = 'Связаться с нами';
    protected static ?string $navigationGroup = 'Обратная связь';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Ссылки, номер для связи')->schema([           

                    TextInput::make('number')
                        ->label('Номер телефона')
                        ->placeholder('+7 987 654 32 10')
                        ->required(),
                    TextInput::make('email')
                        ->label('e-mail')
                        ->placeholder('dummy@mail.ru')
                        ->required(),
                    Section::make('Ссылки на соц сети')->schema([
                        Repeater::make('linking')->label('ссылки')->schema([
                        TextInput::make('url')
                            ->label('ссылка')
                            ->url()
                            ->required()
                            ->placeholder('http//vk.com'),
                        FileUpload::make(name: 'png')
                            ->image()
                            ->directory('/Links/svg')
                            ->required(),
                        ])->columns(2)
                        ])->columnSpanFull(),     
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
                TextColumn::make('number')
                ->label(label: 'Номер телефона')
                ->limit(90),
                TextColumn::make('email')
                ->label(label: 'e-mail')
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
            'index' => Pages\ListLinks::route('/'),
            'create' => Pages\CreateLink::route('/create'),
            'edit' => Pages\EditLink::route('/{record}/edit'),
        ];
    }
}
