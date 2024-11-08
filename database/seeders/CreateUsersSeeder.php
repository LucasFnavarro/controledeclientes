<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Lucas',
                'email' => 'lucas@gmail.com',
                'password' => bcrypt('abc123'),
                'telefone' => '3199887766',
                'endereco' => 'Rua Brasil 123',
                'last_login' => date('Y-m-d H:i:s')
            ],

            [
                'name' => 'João',
                'email' => 'jao@gmail.com',
                'password' => bcrypt('abc123'),
                'telefone' => '4399778552',
                'endereco' => 'Rua Maranhão 987',
                'last_login' => date('Y-m-d H:i:s')
            ],

            [
                'name' => 'Fernanda',
                'email' => 'fernanda@gmail.com',
                'password' => bcrypt('abc123'),
                'telefone' => '2199885544',
                'endereco' => 'Rua Sao Paulo 6542',
                'last_login' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
