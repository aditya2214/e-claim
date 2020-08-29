<?php

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
                'name' => 'Aditya Oktaviana',
                'email' => 'aditokta7333@gmail.com',
                'password' => '$2y$10$9cWgqbQSPgkA3qHFIi2/1elQ91oDFEbhlveT7Tleo7RSqqWDfNKNq',
                'remember_token' => 'lL6rqRGPBPFxnmddM45Xq46sZcPkUOo26uU0GkViq6wJlP7zRzzlUYUInxKC',
                'created_at' => '2020-08-29 10:33:00',
                'updated_at' => '2020-08-29 10:33:00',
            ),
        ));
        
        
    }
}