<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::insert([
            'nombre'     =>  'Wilmar David Macias Guerrero',
            'cedula'     =>  '1023568569',
            'email'      =>  'davidguerrero0709@gmail.com',
            'password'   =>  bcrypt('123456789'),
            'roles_id'   =>  '1',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);
    }
}
