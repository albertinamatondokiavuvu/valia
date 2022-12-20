<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {User::create([
        'name' => 'Teste de Entrada',
        'email' => 'teste@gmail.com',
        'password' => Hash::make('12345678'),
    ]);
    }
}
