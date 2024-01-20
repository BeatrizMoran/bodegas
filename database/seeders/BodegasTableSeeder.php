<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BodegasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i=0; $i <10 ; $i++) { 
            DB::table("bodegas")->insert([
                "id" => $faker->number(10),
                "ubicacion" => $faker->text(255),
                "telefono" => $faker->text(9),
                "fecha_alta" => $faker->date,
                "estado" => $faker->numberBetween(0,1),
                "created_at" => now(),
                "updated_at" => now(),
            ]);
        }

    }
}
