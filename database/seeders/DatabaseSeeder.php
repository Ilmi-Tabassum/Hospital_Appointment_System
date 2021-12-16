<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Routing\Route;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      Role::create(['name'=>'doctor']);
      Role::create(['name'=>'admin']);
      Role::create(['name'=>'patient']);
    }
}
