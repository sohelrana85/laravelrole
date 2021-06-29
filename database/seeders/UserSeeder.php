<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::where('email','sohel@gmail.com')->first();
        if(is_null($user)){
            User::create([
                'name' => 'Sohel Rana',
                'email' => 'sohel@gmail.com',
                'password' => Hash::make('123456'),
            ]);
        }
        $user1 = User::where('email','abdullah@gmail.com')->first();
        if(is_null($user1)){
            User::create([
                'name' => 'Abdullah',
                'email' => 'abdullah@gmail.com',
                'password' => Hash::make('123456'),
            ]);
        }
    }
}
