<?php

namespace Database\Seeders;

use App\Models\User;
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
           'name' => 'Isaac Nogueira',
           'email' => 'isaac@gmail.com',
           'password' => bcrypt('12345678'),
        ]);
    }
}
