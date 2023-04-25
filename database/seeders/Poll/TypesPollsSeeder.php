<?php

namespace Database\Seeders\Poll;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Poll\TypesPoll;

class TypesPollsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypesPoll::create(
            [
                'description' => "DIAGNÓSTICO CAPILAR",
                'code' => "diagnostico_capilar",
            ],
        );
    }
}
