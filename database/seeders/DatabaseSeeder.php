<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            "email" => "admin@admin.be",
            "password" => bcrypt("admin"),
        ]);

        Profile::factory()->create([
            "firstname" => "Admin",
            "lastname" => "Admin",
            "user_id" => 1
        ]);
    }
}
