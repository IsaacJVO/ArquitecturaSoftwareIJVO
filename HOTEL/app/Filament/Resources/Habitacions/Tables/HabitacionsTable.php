<?php

namespace App\Filament\Resources\Habitacions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class HabitacionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('numero_habitacion')
                    ->label('Número')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('tipoHabitacion.nombre')
                    ->label('Tipo')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('precio_por_noche')
                    ->label('Precio/Noche')
                    ->money('PEN')
                    ->sortable(),
                
                TextColumn::make('estado')
                    ->label('Estado')
                    ->badge()
                    ->colors([
                        'success' => 'disponible',
                        'danger' => 'ocupada',
                        'warning' => 'mantenimiento',
                        'info' => 'limpieza',
                    ])
                    ->searchable(),
                
                TextColumn::make('descripcion')
                    ->label('Descripción')
                    ->limit(50)
                    ->searchable(),
                
                TextColumn::make('created_at')
                    ->label('Fecha Creación')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('tipo_habitacion_id')
                    ->label('Tipo de Habitación')
                    ->relationship('tipoHabitacion', 'nombre')
                    ->multiple()
                    ->preload(),
                
                SelectFilter::make('estado')
                    ->label('Estado')
                    ->options([
                        'disponible' => 'Disponible',
                        'ocupada' => 'Ocupada',
                        'mantenimiento' => 'Mantenimiento',
                        'limpieza' => 'Limpieza',
                    ])
                    ->multiple(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('numero_habitacion');
    }
}
