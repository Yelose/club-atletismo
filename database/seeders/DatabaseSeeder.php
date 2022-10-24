<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\Trainer;
use App\Models\ExternalLink;
use App\Models\Cronologia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Noticia;
use App\Models\Quien;
use App\Models\Sponsor;
use App\Models\Testimony;

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
        Trainer::create(
            [
                "name" => "Jose Alberto García",
                "image" => "entrenador.jpg",
                "roll" => "Entrenador",
            ]
        );
        Team::create(
            [
                "name" => " Nuria Cuenca ",
                "licence" => "L564573",
                "image" => "chica.jpg",
                "category" => "sub18",
            ],
        );
        Team::create(
            [
                "name" => " Maria Pilar Vives ",
                "licence" => "L564485",
                "image" => "chica.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Tomasa Palomares ",
                "licence" => "L857294",
                "image" => "chica.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Guadalupe Iniesta ",
                "licence" => "L295736",
                "image" => "chica.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Maria Concepcion Saiz ",
                "licence" => "L840285",
                "image" => "chica.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Agueda García ",
                "licence" => "L928473",
                "image" => "chica.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Daniela Baños ",
                "licence" => "L948264",
                "image" => "chica.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Martina Espino ",
                "licence" => "L928463",
                "image" => "chica.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Alexandra de Diego ",
                "licence" => "L938274",
                "image" => "chica.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Natalia Rios ",
                "licence" => "L928573",
                "image" => "chica.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Araceli Berenguer ",
                "licence" => "L738574",
                "image" => "chica.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => "Elena Cuevas",
                "licence" => "L856259",
                "image" => "chica.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Angustias Exposito ",
                "licence" => "L654832",
                "image" => "chica.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Jennifer Piñero ",
                "licence" => "L284638",
                "image" => "chica.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Aurora Corral ",
                "licence" => "L375638",
                "image" => "chica.jpg",
                "category" => "sub18",
            ]
        );
        ExternalLink::factory(3)->create();
        Quien::factory()->create(
            [
                "titulo" => "Historia del Club",
                "image" => "https://img.asmedia.epimg.net/resizer/xyGk4fiXyjQmFGpG1g1Ys_AfIl0=/1952x1098/cloudfront-eu-central-1.images.arcpublishing.com/diarioas/YNFN6DEDIRMK7GPXBCKTNT6UYA.jpg
                ",
                "resumen" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                quaerat?                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,  quaerat?                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,  quaerat?                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,  quaerat?                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,  quaerat?"
            ]
        );
        Cronologia::factory()->count(6)->create();
        Team::factory()->count(10)->create();
        sponsor::factory()->count(6)->create();
        testimony::factory()->count(8)->create();
    }
}
