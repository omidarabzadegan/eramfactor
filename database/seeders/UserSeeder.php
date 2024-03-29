<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::class()->insert([
            'name' => 'امید عرب زادگان',
            'email' => 'omidarabzadegan@gmail.com',
            'password' => Hash::make('o-09389467917'),
            'phone' => '09128848707',
            'license' => Str::random(20)
        ]);
    }
}
