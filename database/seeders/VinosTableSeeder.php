<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vino;
use App\Models\Bodega;



class VinosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Obtener todos los ids de las bodegas
        $bodegaIds = Bodega::pluck('id')->toArray();

        // Crear algunos vinos de ejemplo con bodega_id aleatorio
        $vinos = [
            [
                'nombre' => 'Vino Tinto',
                'descripcion' => 'Descripción del vino tinto',
                'anyo' => 2020,
                'alcohol' => 13.5,
                'tipo' => 'Tinto',
                'bodega_id' => $this->getRandomBodegaId($bodegaIds),
            ],
            [
                'nombre' => 'Vino Blanco',
                'descripcion' => 'Descripción del vino blanco',
                'anyo' => 2019,
                'alcohol' => 12.0,
                'tipo' => 'Blanco',
                'bodega_id' => $this->getRandomBodegaId($bodegaIds),
            ],
            // Agrega más vinos según sea necesario
        ];

        // Insertar los vinos en la tabla
        Vino::insert($vinos);
    }

    private function getRandomBodegaId(array $bodegaIds)
    {
        // Obtener un id de bodega aleatorio
        return $bodegaIds[array_rand($bodegaIds)];
    }
}
