<?php

namespace Database\Seeders;

use App\Models\Cronologia;
use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Noticia;
use App\Models\Quien;

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

        Quien::factory()->create([
            'image'=> 'https://www.pikaramagazine.com/wp-content/uploads/2014/03/Juegos1.jpg',
            'titulo'=> 'Historia del Club',
            'resumen'=> 'Curabitur at ante tincidunt, rutrum lorem semper, convallis elit. Curabitur feugiat interdum est. In nec mi interdum, cursus lectus ut, finibus tellus. Donec faucibus aliquet neque, eget ultricies lectus ornare eget. Etiam accumsan arcu nunc. Aenean nulla ligula, molestie et nunc in, fermentum porttitor magna. Donec a justo consequat, elementum libero sit amet, malesuada justo. Mauris rutrum imperdiet velit, eu convallis metus. Proin auctor blandit eros. Maecenas in justo sit amet elit facilisis lobortis in at sem. Morbi nisl metus, molestie ut dolor vitae, suscipit aliquam odio. Ut mi augue, congue tempus urna at, elementum porta urna.',
        ]);
        Cronologia::factory()->count(10)->create();
    }
}
