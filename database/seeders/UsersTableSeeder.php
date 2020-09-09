<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::updateOrcreate(
            [
                'email' => 'admin@ethree.com',
            ],
            [
                'name' => 'Super Admin',
                'contactno' => '7402058490',
                'email' => 'admin@ethree.com',
                'password' => bcrypt('password'),
               
            ]
        );
    }
}
//'password' => bcrypt('123456'),