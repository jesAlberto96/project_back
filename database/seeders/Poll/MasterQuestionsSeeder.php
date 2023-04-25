<?php

namespace Database\Seeders\Poll;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Poll\MasterQuestion;

class MasterQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // MasterQuestion::create(
        //     [
        //         'type_poll_id' => 1,
        //         'label' => "Experto capilar",
        //         'type' => "hair_expert",
        //         'name' => "hair_expert",
        //         'class' => "col-xl-6 col-lg-6 col-md-12 col-sm-12",
        //     ]       
        // );

        MasterQuestion::create(
            [
                'type_poll_id' => 1,
                'label' => "Diámetro del cabello",
                'type' => "select",
                'name' => "diametro_cabello",
                'class' => "col-xl-6 col-lg-6 col-md-12 col-sm-12",
                'values' => json_encode(array(
                    ["value" => 1, "text" => "Fino"],
                    ["value" => 2, "text" => "Medio"],
                    ["value" => 3, "text" => "Grueso"],
                )),
            ]       
        );

        MasterQuestion::create([
            'type_poll_id' => 1,
            'label' => "Textura del cabello",
            'type' => "select",
            'name' => "textura_cabello",
            'class' => "col-xl-6 col-lg-6 col-md-12 col-sm-12",
            'values' => json_encode(array(
                ["value" => 1, "text" => "Liso"],
                ["value" => 2, "text" => "Ondulado"],
                ["value" => 3, "text" => "Rizado"],
            )),
        ]);

        MasterQuestion::create([
            'type_poll_id' => 1,
            'label' => "Base natural del cabello",
            'type' => "select",
            'name' => "base_natural_cabello",
            'class' => "col-xl-6 col-lg-6 col-md-12 col-sm-12",
            'values' => json_encode(array(
                ["value" => 1, "text" => 1],
                ["value" => 2, "text" => 2],
                ["value" => 3, "text" => 3],
                ["value" => 4, "text" => 4],
                ["value" => 5, "text" => 5],
                ["value" => 6, "text" => 6],
                ["value" => 7, "text" => 7],
                ["value" => 8, "text" => 8],
                ["value" => 9, "text" => 9],
                ["value" => 10, "text" => 10],
            )),
        ]);

        MasterQuestion::create([
            'type_poll_id' => 1,
            'label' => "Base cosmética del cabello",
            'type' => "select",
            'name' => "base_cosmetica_cabello",
            'class' => "col-xl-6 col-lg-6 col-md-12 col-sm-12",
            'values' => json_encode(array(
                ["value" => 1, "text" => 1],
                ["value" => 2, "text" => 2],
                ["value" => 3, "text" => 3],
                ["value" => 4, "text" => 4],
                ["value" => 5, "text" => 5],
                ["value" => 6, "text" => 6],
                ["value" => 7, "text" => 7],
                ["value" => 8, "text" => 8],
                ["value" => 9, "text" => 9],
                ["value" => 10, "text" => 10],
            )),
        ]);

        MasterQuestion::create([
            'type_poll_id' => 1,
            'label' => "% de canas",
            'type' => "select",
            'name' => "porcentaje_canas",
            'class' => "col-xl-6 col-lg-6 col-md-12 col-sm-12",
            'values' => json_encode(array(
                ["value" => 0, "text" => "0%"],
                ["value" => 25, "text" => "25%"],
                ["value" => 50, "text" => "50%"],
                ["value" => 75, "text" => "75%"],
                ["value" => 100, "text" => "100%"],
            )),
        ]);

        MasterQuestion::create([
            'type_poll_id' => 1,
            'label' => "¿Son resistentes las canas?",
            'type' => "select",
            'name' => "resistentes_canas",
            'class' => "col-xl-6 col-lg-6 col-md-12 col-sm-12",
            'values' => json_encode(array(
                ["value" => 1, "text" => "SI"],
                ["value" => 2, "text" => "NO"],
            )),
        ]);

        MasterQuestion::create([
            'type_poll_id' => 1,
            'label' => "Antecedentes",
            'type' => "textarea",
            'name' => "antecedentes",
            'class' => "col-xl-12 col-lg-12 col-md-12 col-sm-12",
        ]);

        MasterQuestion::create([
            'type_poll_id' => 1,
            'label' => "Grado de porosidad",
            'type' => "select",
            'name' => "grado_porosidad",
            'class' => "col-xl-6 col-lg-6 col-md-12 col-sm-12",
            'values' => json_encode(array(
                ["value" => 1, "text" => "Poroso"],
                ["value" => 2, "text" => "Normal"],
                ["value" => 3, "text" => "Resistente"],
            )),
        ]);

        MasterQuestion::create([
            'type_poll_id' => 1,
            'label' => "Test de elasticidad",
            'type' => "select",
            'name' => "test_elasticidad",
            'class' => "col-xl-6 col-lg-6 col-md-12 col-sm-12",
            'values' => json_encode(array(
                ["value" => 1, "text" => "Buenas"],
                ["value" => 2, "text" => "Mala"],
            )),
        ]);

        MasterQuestion::create([
            'type_poll_id' => 1,
            'label' => "Grado de decoloración (Tonos)",
            'type' => "select",
            'name' => "grado_decoloracion",
            'class' => "col-xl-6 col-lg-6 col-md-12 col-sm-12",
            'values' => json_encode(array(
                ["value" => 0, "text" => "0"],
                ["value" => 2, "text" => "2"],
                ["value" => 4, "text" => "4"],
                ["value" => 6, "text" => "6"],
                ["value" => 8, "text" => "8"],
            )),
        ]);

        MasterQuestion::create([
            'type_poll_id' => 1,
            'label' => "Procesos técnicos acumulados",
            'type' => "select",
            'name' => "procesos_acumulados",
            'class' => "col-xl-6 col-lg-6 col-md-12 col-sm-12",
            'values' => json_encode(array(
                ["value" => 1, "text" => "Tinte"],
                ["value" => 2, "text" => "Alisado"],
                ["value" => 3, "text" => "Permanente"],
            )),
        ]);

        MasterQuestion::create([
            'type_poll_id' => 1,
            'label' => "Otros tipos de alteraciones o daños en piel cabelluda",
            'type' => "text",
            'name' => "alteraciones_piel_cabelluda",
            'class' => "col-xl-6 col-lg-6 col-md-12 col-sm-12",
        ]);

        MasterQuestion::create([
            'type_poll_id' => 1,
            'label' => "Otros tipos de alteraciones o daños en cabello",
            'type' => "text",
            'name' => "alteraciones_cabello",
            'class' => "col-xl-6 col-lg-6 col-md-12 col-sm-12",
        ]);

        MasterQuestion::create([
            'type_poll_id' => 1,
            'label' => "Observaciones",
            'type' => "textarea",
            'name' => "observaciones",
            'class' => "col-xl-12 col-lg-12 col-md-12 col-sm-12",
        ]);
    }
}
