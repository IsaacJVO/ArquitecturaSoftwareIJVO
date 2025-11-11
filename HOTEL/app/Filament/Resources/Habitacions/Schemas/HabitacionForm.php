<?php

namespace App\Filament\Resources\Habitacions\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class HabitacionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('numero_habitacion')
                    ->label('Número de Habitación')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                
                Select::make('tipo_habitacion_id')
                    ->label('Tipo de Habitación')
                    ->relationship('tipoHabitacion', 'nombre')
                    ->required()
                    ->preload()
                    ->searchable(),
                
                TextInput::make('precio_por_noche')
                    ->label('Precio por Noche')
                    ->required()
                    ->numeric()
                    ->prefix('S/')
                    ->minValue(0)
                    ->step(0.01),
                
                Select::make('estado')
                    ->label('Estado')
                    ->options([
                        'disponible' => 'Disponible',
                        'ocupada' => 'Ocupada',
                        'mantenimiento' => 'Mantenimiento',
                        'limpieza' => 'Limpieza',
                    ])
                    ->required()
                    ->default('disponible'),
                
                Textarea::make('descripcion')
                    ->label('Descripción')
                    ->columnSpanFull()
                    ->rows(3),
            ]);
    }
}
