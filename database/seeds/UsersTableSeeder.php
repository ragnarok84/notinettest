<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Pepito Perez';
        $user->email = 'pepito@perez.com';
        $user->password = bcrypt('123456');
        $user->is_admin = true;
        $user->save();

        $user = new User();
        $user->name = 'Natalia Jerex';
        $user->email = 'nati@jerez.com';
        $user->password = bcrypt('123456');
        $user->is_admin = false;
        $user->save();

    }
}
