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

        DB::table('users')->trancate();
         \App\Models\User::create([
             'name' => 'admin',
             'email' => 'admin@monzarrentalcar.com',
             'password' => 'Monzer@2025',
             'type' => 'admin',
         ]);
    }
}
