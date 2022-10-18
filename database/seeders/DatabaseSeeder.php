<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Team;
use App\Models\Trainer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use App\Models\noticia;

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
        Noticia::factory()->count(10)->create();
        Trainer::create(
            [
                "name" => "Jose Alberto García",
                "photo" => "https://files.proyectoclubes.com/deportivo/202210/1024x800_b2d84c968111154049oscar_cano.jpg",
                "roll" => "Entrenador",
            ]
        );
        Team::create(
            [
                "name" => " Nuria Cuenca ",
                "licence" => "564573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ],
        );
        Team::create(
            [
                "name" => " Maria Pilar Vives ",
                "licence" => "564573",
                "image" => "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/allyson-felix-competes-in-the-first-round-of-the-womens-200-news-photo-1624615950.jpg?crop=1.00xw:1.00xh;0,0&resize=640:*",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Tomasa Palomares ",
                "licence" => "564573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Guadalupe Iniesta ",
                "licence" => "564573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Maria Concepcion Saiz ",
                "licence" => "564573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Agueda García ",
                "licence" => "564573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Daniela Baños ",
                "licence" => "564573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Martina Espino ",
                "licence" => "564573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Alexandra de Diego ",
                "licence" => "564573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Natalia Rios ",
                "licence" => "564573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Araceli Berenguer ",
                "licence" => "564573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => "Elena Cuevas",
                "licence" => "564573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Angustias Exposito ",
                "licence" => "564573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Jennifer Piñero ",
                "licence" => "564573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Aurora Corral ",
                "licence" => "564573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
