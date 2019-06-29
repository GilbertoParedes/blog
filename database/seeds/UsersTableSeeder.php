<?php

use Illuminate\Database\Seeder;
// llama al modelo de usuarios
use App\Cms\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Crea un arreglo con los usuarios antes de ser insertados a la tabla users */
        $users = [
            [
                'name' => 'Gilberto',
                'email' => 'gilbertowallsz06@gmail.com',
                'password' => bcrypt('secret'),
                'avatar'    => '',
                'status'    => 'Activo'
            ],
        ];
        /** Método Insert de Eloquent para insertar el arreglo con los usuarios a la tabla users */
        User::insert($users);
    }
}
