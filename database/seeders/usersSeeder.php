<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [

            [
                'nama'=>'admin',
                'password'=>Hash::make('admin123'),
                'role'=>'admin'
            ],
            [
                'nama'=>'petugas',
                'password'=>Hash::make('petugas123'),
                'role'=>'petugas'
            ]
        ];

        foreach($userData as $key=> $val){
            User::create($val);
        }
    }
}
