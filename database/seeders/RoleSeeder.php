<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            'name' => "admnistrador",
            'guard_name' => "web",
        ]);

        Role::insert([
            'name' => "cliente",
            'guard_name' => "web",
        ]);
    }
}
