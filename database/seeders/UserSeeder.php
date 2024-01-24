<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(9)->create();

        $user = \App\Models\User::factory()->create(
            [
                'name' => 'zenin',
                'email' => 'zenin@gamilcom',
                'password' => Hash::make('123456'),
                'phone' => '08948884',
                'roles' => 'ADMIN',
            ]
        );
    }
}