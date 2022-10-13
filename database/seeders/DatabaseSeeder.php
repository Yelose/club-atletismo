<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cronologia;
use App\Models\ExternalLink;
use App\Models\Team;
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
        Quien::factory()->create(
            [
                "titulo" => "Historia del Club",
                "image" => "https://img.asmedia.epimg.net/resizer/xyGk4fiXyjQmFGpG1g1Ys_AfIl0=/1952x1098/cloudfront-eu-central-1.images.arcpublishing.com/diarioas/YNFN6DEDIRMK7GPXBCKTNT6UYA.jpg
                ",
                "resumen" => "texto, texto"
            ]
        );
        Cronologia::factory()->count(5)->create();
        Team::factory()->count(10)->create();
        ExternalLink::factory()->count(10)->create();
        sponsor::factory()->count(6)->create();
        testimony::factory()->count(8)->create();
    }
}
