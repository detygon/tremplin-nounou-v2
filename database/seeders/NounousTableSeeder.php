<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NounousTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('nounous')->delete();
        
        \DB::table('nounous')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'Oka',
                'prenom' => 'Moda',
                'lieu_residence' => 'Cocody',
                'telephone' => '0741481138',
                'piece_identite' => 'swdfvh',
                'created_at' => '2022-06-11 16:00:19',
                'updated_at' => '2022-06-11 16:00:19',
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'Oka',
                'prenom' => 'Eudoxie',
                'lieu_residence' => 'Cocody',
                'telephone' => '0741481130',
                'piece_identite' => '274702712_1623432371334998_4167046643213718164_n.jpg',
                'created_at' => '2022-06-11 16:42:43',
                'updated_at' => '2022-06-11 16:42:43',
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'Oka',
                'prenom' => 'Mesther',
                'lieu_residence' => 'Cocody',
                'telephone' => '0741481138',
                'piece_identite' => '274833360_1623285701349665_6143989903224888078_n.jpg',
                'created_at' => '2022-06-11 17:00:41',
                'updated_at' => '2022-06-11 17:00:41',
            ),
            3 => 
            array (
                'id' => 4,
                'nom' => 'Oka',
                'prenom' => 'Esther Eudoxie',
                'lieu_residence' => 'Cocody',
                'telephone' => '0749492802',
                'piece_identite' => 'WhatsApp_Image_2022-06-15_at_17.20.06-removebg.png',
                'created_at' => '2022-06-16 11:54:11',
                'updated_at' => '2022-06-16 11:54:11',
            ),
            4 => 
            array (
                'id' => 5,
                'nom' => 'Oka',
                'prenom' => 'Esther Eudoxie Moda',
                'lieu_residence' => 'Cocody',
                'telephone' => '0749492806',
                'piece_identite' => 'WhatsApp_Image_2022-06-15_at_17.20.06-removebg.png',
                'created_at' => '2022-06-16 11:58:54',
                'updated_at' => '2022-06-16 11:58:54',
            ),
        ));
        
        
    }
}