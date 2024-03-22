<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
                'password'=>bcrypt('admin123'),
                'role'=>'admin'
            ],
            [
                'nama'=>'petugas',
                'password'=>bcrypt('petugas123'),
                'role'=>'petugas'
            ]
        ];

        foreach($userData as $key=> $val){
            User::create($val);
        }
    }
}
