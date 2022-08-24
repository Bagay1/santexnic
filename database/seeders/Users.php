<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
             'name' => 'Anton',
             'nick' => 'Anton',
             'email' => 'rus@rus.rus',
             'password' => '$2y$10$4BwQrfDhVy5ju7HvseUWaOJ11uyuzwzFthtN6F1wWJApmKna3hUeS',
             'role_id' => 1,
         ]);
    }
}
