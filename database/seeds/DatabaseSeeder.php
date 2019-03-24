<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(\Modules\AdminModule\Database\Seeders\AdminTableSeeder::class);
         $this->call(\Modules\ConfigModule\Database\Seeders\ConfigModuleDatabaseSeeder::class);
         $this->call(\Modules\CommonModule\Database\Seeders\CommonModuleDatabaseSeeder::class);
    }
}
