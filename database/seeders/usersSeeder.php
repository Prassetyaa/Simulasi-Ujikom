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
                'password'=>'admin123',
                'role'=>'admin'
            ],
            [
                'nama'=>'petugas',
                'password'=>'petugas123',
                'role'=>'petugas'
            ],
            [
                'nama'=>'pelanggan',
                'password'=>'pelanggan123',
                'role'=>'pelanggan'
            ]
        ];

        foreach($userData as $key=> $val){
            User::create($val);
        }
    }
}
