<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
{
    User::updateOrCreate(
        ['username' => 'admin'],
        [
            'name' => 'Administrador',
            'email' => 'admin@site.com',
            'password' => bcrypt('whisky_e_tequila'),
            'is_admin' => true,
        ]
    );
}
}
