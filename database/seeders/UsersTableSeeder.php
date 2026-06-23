<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Moda',
                'email' => 'mestheroka@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.R5hxZpnFyba.81K366bPe69VVi7EqoDH9uoG6xf6jwLoaIW61LDq',
                'remember_token' => NULL,
                'created_at' => '2022-06-11 15:12:41',
                'updated_at' => '2022-06-11 15:12:41',
            ),
            1 =>
            array (
                'id' => 4,
                'name' => 'Tremplin Nounou',
                'email' => 'info@boldmanager.net',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.R5hxZpnFyba.81K366bPe69VVi7EqoDH9uoG6xf6jwLoaIW61LDq',
                'remember_token' => NULL,
                'created_at' => '2022-08-11 16:04:42',
                'updated_at' => '2022-08-11 16:04:42',
            ),
        ));


    }
}
