<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
        //
        User::truncate();
        User::create([
            'name' => 'Ahmad Nursyifa',
            'email' => 'syifa@admin.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Siti Emilia',
            'email' => 'emil@admin.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60),
        ]);
        
    }
}
