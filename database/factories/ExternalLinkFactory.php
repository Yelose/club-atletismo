<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExternalLink>
 */
class ExternalLinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'image' => fake()->randomElement(
                [
                    'https://static1.hoy.es/llerena/multimedia/201907/19/media/cortadas/seis-kUmH-U807953006188XH-624x385@Hoy.jpg',
                    'https://www.8directo.com/wp-content/uploads/2021/09/200293876_3978438302263555_1031880655553130637_n.jpg',
                    'https://www.radiorute.com/wp-content/uploads/2021/04/croos.jpg',
                    'https://www.elfielato.es/media/elfielato/images/2018/06/22/medallistas-y-bandera.jpg',
                    'https://clubatletismomalaga.es/wp-content/uploads/2021/10/v46457-980x623.jpg',
                    'https://s2.lanzadigital.com/wp-content/uploads/2019/04/Podio-femenino.jpg',
                    'https://estaticos-cdn.prensaiberica.es/clip/79784aa7-5c60-4ddd-8e6c-d624b692ae72_16-9-aspect-ratio_default_0.jpg',
                    'https://www.diariodeavila.es/media/IMG/2022/071DC9DE-FA15-0391-C3644EE450839854.JPG'
                ]),
            'link' => fake()->randomElement(
                [
                    'https://static1.hoy.es/llerena/multimedia/201907/19/media/cortadas/seis-kUmH-U807953006188XH-624x385@Hoy.jpg',
                    'https://www.8directo.com/wp-content/uploads/2021/09/200293876_3978438302263555_1031880655553130637_n.jpg',
                    'https://www.radiorute.com/wp-content/uploads/2021/04/croos.jpg',
                    'https://www.elfielato.es/media/elfielato/images/2018/06/22/medallistas-y-bandera.jpg',
                    'https://clubatletismomalaga.es/wp-content/uploads/2021/10/v46457-980x623.jpg',
                    'https://s2.lanzadigital.com/wp-content/uploads/2019/04/Podio-femenino.jpg',
                    'https://estaticos-cdn.prensaiberica.es/clip/79784aa7-5c60-4ddd-8e6c-d624b692ae72_16-9-aspect-ratio_default_0.jpg',
                    'https://www.diariodeavila.es/media/IMG/2022/071DC9DE-FA15-0391-C3644EE450839854.JPG'
                ])
           ];
    }
}
