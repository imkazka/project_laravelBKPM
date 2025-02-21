<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class SeederUser extends Seeder
{
    public function run()
    {
        User::create ( [
            'nama' => 'azka',
            'email' => 'azka@gmail.com',
            'password' => Hash::make ('123456'),
        ]
        );

        User::create ( [
            'nama' => 'imanika',
            'email' => 'imanika@gmail.com',
            'password' => Hash::make ('hssjsjs'),
        ]
        );
        }
}
