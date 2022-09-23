<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Пользователь 1',
            'email' => 'test1@mail.ru',
        ]);
        User::create([
            'name' => 'Пользователь 2',
            'email' => 'test2@mail.ru',
        ]);
    }
}
