<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Achievement;
use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Noticia;
use App\Models\Season;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        DB::statement("SET foreign_key_checks=0");
        $admin = User::where('email', 'admin@admin.com')->first();
        DB::statement("SET foreign_key_checks=1");
        if ($admin) {
            $admin->delete();
        }
        $admin = User::create(
            [
                "name" => "admin",
                "email" => "admin@admin.com",
                "password" => Hash::make("admin")
            ]
        );

        Noticia::factory()->count(24)->create();
        Team::factory()->count(10)->create();

        Season::factory()->create([
            "name" => "2018-2019"
        ]);
        Season::factory()->create([
            "name" => "2019-2020"
        ]);
        Season::factory()->create([
            "name" => "2020-2021"
        ]);

        Achievement::factory()->count(10)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
