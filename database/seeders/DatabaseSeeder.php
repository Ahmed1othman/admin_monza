<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{


    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // Settings::class,
            // SetupPermissions::class,
            // currencies::class,
            // ModelsContent::class,
            // Cities::class,
            // CompanyDescriptions::class,
            // CompaniesCities::class,
        ]);
        // \App\Models\User::factory(10)->create();

         \App\Models\User::create([
             'name' => 'ahmed',
             'email' => 'ahmed@example.com',
             'password' => '12345678',
             'type' => 'admin',
         ]);
    }
}
