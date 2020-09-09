<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrcreate(
            [
                'email' => 'admin@ethree.com',
            ],
            [
                'name' => 'Super Admin',
                'contactno' => '7402058490',
                'email' => 'admin@ethree.com',
                'isadmin' => '1',
                'password' => bcrypt('password'),
               
            ]
        );
    }
}
//'password' => bcrypt('123456'),