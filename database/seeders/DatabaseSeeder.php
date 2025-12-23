<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Guesser\Name;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        \App\Models\User::create([
             'name' => 'Test User',
             'email' => fake()->unique()->safeEmail(),
              'password' => Hash::make(value: '12345678')
         ]);

           User::Create([
            'name' =>'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make(value: '12345678')

         ]); 

          User::Create([
            'name' =>'Secretaria',
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make(value: '12345678')

         ]);
          User::Create([
            'name' =>'Doctor1',
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make(value: '12345678')

         ]);
          User::Create([
            'name' =>'Paciente1',
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make(value: '12345678')

         ]);

         //$this->call(PacienteSeeder::class);
    }
}
