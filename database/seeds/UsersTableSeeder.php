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
        $user->name='John Alvaro';
        $user->lastname='Angulo Rojano';
        $user->email = 'jhon54plex@gmail.com';
        $user->password = bcrypt('qwe123');
        $user->save();

    }
}
