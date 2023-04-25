<?php

namespace Database\Seeders\HairExpert;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HairExpert\HairExpert;

class HairExpertsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HairExpert::create(
            [
                'name' => "Experto",
                'second_name' => "",
                'surname' => "Prueba",
                'second_surname' => "",
            ]       
        );
    }
}
