<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BodegasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 3; $i++) {
            DB::table("bodegas")->insert([
                "nombre" => $faker->company,
                "ubicacion" => $faker->text(255),
                'telefono' => $faker->numerify('#########'), // Genera 9 dígitos
                "email" => $faker->email,
                "personaContacto" => $faker->name,
                "anyoFundacion" => $faker->year,
                "descripcion" => $faker->paragraph,
                "restaurante" => $faker->boolean,
                "hotel" => $faker->boolean,
                "created_at" => now(),
                "updated_at" => now(),
            ]);
        }
    }
}
