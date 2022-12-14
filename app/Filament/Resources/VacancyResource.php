<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VacancyResource\Pages;
use App\Filament\Resources\VacancyResource\RelationManagers;
use App\Models\Vacancy;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VacancyResource extends Resource
{
    protected static ?string $model = Vacancy::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company.user.name')->label('Representative'),
                Tables\Columns\TextColumn::make('company.company_name')->label('Company'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('job_type')->label('Job Type'),
                Tables\Columns\BooleanColumn::make('is_vacant')->label('Is Available'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListVacancies::route('/'),
            // 'create' => Pages\CreateVacancy::route('/create'),
            // 'view' => Pages\ViewVacancy::route('/{record}'),
            // 'edit' => Pages\EditVacancy::route('/{record}/edit'),
        ];
    }    
}
