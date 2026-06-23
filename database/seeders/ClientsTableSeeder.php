<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('clients')->delete();

        \DB::table('clients')->insert(array (
            0 =>
            array (
                'id' => 1,
                'nom' => 'OKA',
                'prenom' => 'Esther',
                'lieu_residence' => 'hgfghf',
                'telephone' => '0749492802',
                'type_nounous' => 'fgdggf',
                'piece_identite' => 'ygf',
                'created_at' => '2022-06-11 15:53:54',
                'updated_at' => '2022-06-11 15:53:54',
            ),
            1 =>
            array (
                'id' => 2,
                'nom' => 'Oka',
                'prenom' => 'Mesther',
                'lieu_residence' => 'Cocody',
                'telephone' => '0707070707',
                'type_nounous' => 'menage',
                'piece_identite' => '274855600_1623285671349668_3560067936999346987_n.jpg',
                'created_at' => '2022-06-11 17:03:49',
                'updated_at' => '2022-06-11 17:03:49',
            ),
            2 =>
            array (
                'id' => 3,
                'nom' => 'Oka Oka',
                'prenom' => 'Esther',
                'lieu_residence' => 'Cocody',
                'telephone' => '0749492802',
                'type_nounous' => 'menage',
                'piece_identite' => 'WhatsApp_Image_2022-06-15_at_17.20.06-removebg-preview.png',
                'created_at' => '2022-06-16 12:01:45',
                'updated_at' => '2022-06-16 12:01:45',
            ),
        ));


    }
}
