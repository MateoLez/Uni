<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
                'name' => 'Administrador',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin'),
                'created_at' => now(),
                'updated_at' => now()
            ]);
    }


}
