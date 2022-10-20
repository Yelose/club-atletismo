<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

<<<<<<< HEAD
use App\Models\Team;
use App\Models\Trainer;
=======
use App\Models\ExternalLink;
>>>>>>> footer
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
                "licence" => "L564573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ],
        );
        Team::create(
            [
                "name" => " Maria Pilar Vives ",
                "licence" => "L564485",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Tomasa Palomares ",
                "licence" => "L857294",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Guadalupe Iniesta ",
                "licence" => "L295736",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Maria Concepcion Saiz ",
                "licence" => "L840285",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Agueda García ",
                "licence" => "L928473",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Daniela Baños ",
                "licence" => "L948264",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Martina Espino ",
                "licence" => "L928463",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Alexandra de Diego ",
                "licence" => "L938274",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Natalia Rios ",
                "licence" => "L928573",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Araceli Berenguer ",
                "licence" => "L738574",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => "Elena Cuevas",
                "licence" => "L856259",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Angustias Exposito ",
                "licence" => "L654832",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Jennifer Piñero ",
                "licence" => "L284638",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );
        Team::create(
            [
                "name" => " Aurora Corral ",
                "licence" => "L375638",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/1/19/Christine_Merrill_UCSD_1.jpg",
                "category" => "sub18",
            ]
        );

        // ExternalLink::create(
        //     [
        //         'image' => 'https://scontent.fbio3-1.fna.fbcdn.net/v/t39.30808-6/295051103_541072890893480_8364037363715391393_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=WxyVIGXBBXUAX9HEKuf&_nc_ht=scontent.fbio3-1.fna&oh=00_AT_5K9VZTdVVpM0e93wTd0RRH8LHAsiD2S0gR_7MZH0W4A&oe=632F03DF',
        //         'link' => 'http://fasatle.org',
        //         'name' => 'Federación Asturiana de Atletismo'
        //     ],
        //     [
        //         'image' => 'https://habber.com/wp-content/uploads/2022/08/Imagen-WEB-clientes-500x500-1.jpg',
        //         'link' => "https://www.rfea.es/",
        //         'name' => 'Federación Española de Atletismo'
        //     ]
        // );
        ExternalLink::factory(3)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
