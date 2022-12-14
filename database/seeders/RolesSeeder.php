<?php

namespace Database\Seeders;

use App\Models\Roles;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Administrados', 'Usuario normal'];

        foreach ($roles as $role) {
            Roles::insert([
                'nombre'               =>  $role,
                'nombre_en_pantalla'   =>  $role == 'Administrados' ? 'Administrador' : ($role == 'Usuario normal' ? 'Usuario' : ''),
                'created_at'           =>  Carbon::now(),
                'updated_at'           =>  Carbon::now(),
            ]);
        }
    }

    
}
