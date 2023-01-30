<?php

namespace Modules\Market\Filament\Resources;

use Modules\Market\Filament\Resources\CustomerResource\Pages;
use Modules\Market\Filament\Resources\CustomerResource\RelationManagers;
use Modules\Market\Models\Customer;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static function getNavigationGroup(): ?string
    {
        return config('market.navigation.name');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make("name")
                        ->required(),
                    Forms\Components\TextInput::make("phone_number")
                        ->required()
                        ->unique("customers","phone_number",ignorable: fn($record)=>$record)
                        ->rule("digits_between:9,10")
                        ->mask(fn(Forms\Components\TextInput\Mask $mask)=>$mask->pattern('{0}00 000-0000')),
                    Forms\Components\TextInput::make("password")
                        ->password()
                        ->required()
                        ->visibleOn("create")
                        ->same("password_confirmation"),
                    Forms\Components\TextInput::make("password_confirmation")
                        ->password()
                        ->visibleOn("create")
                        ->required(),
                    Forms\Components\SpatieMediaLibraryFileUpload::make("avatar")
                        ->collection('avatar')->image(),
                ])->columnSpan(2)->columns(2),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
