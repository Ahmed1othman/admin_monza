<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{


    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        $this->call([
//             Settings::class,
//             SetupPermissions::class,
//             currencies::class,
//             ModelsContent::class,
//             Cities::class,
//             CompanyDescriptions::class,
//             CompaniesCities::class,
//        ]);
        // \App\Models\User::factory(10)->create();

//        DB::statement('SET FOREIGN_KEY_CHECKS=0');
//        DB::table('users')->truncate();
//        DB::statement('SET FOREIGN_KEY_CHECKS=1');
         \App\Models\User::create([
             'name' => 'admin',
             'username' => 'admin_monzar',
             'email' => 'admin@monzarrentalcar.com',
             'password' => 'Monzer@2025',
             'type' => 'admin',
         ]);
    }
}
