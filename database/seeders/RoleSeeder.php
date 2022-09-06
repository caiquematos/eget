<?php

namespace Database\Seeders;

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
        DB::table('roles')->insert([
            'name' => "admnistrador",
            'guard_name' => "web",
        ]);

        DB::table('roles')->insert([
            'name' => "cliente",
            'guard_name' => "web",
        ]);
    }
}
