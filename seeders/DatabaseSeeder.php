<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \DB::unprepared(
            file_get_contents(__DIR__.'/county-city_backup.sql')
        );
    }
}
