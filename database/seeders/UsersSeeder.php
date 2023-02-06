<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Admin',
            'email'    => 'adm@email.com',
            'password' => '123',
            'admin'    => 1
        ]);

        User::create([
            'name'     => 'Teste',
            'email'    => 'teste@email.com',
            'password' => '123',
            'admin'    => 0
        ]);
    }
}
