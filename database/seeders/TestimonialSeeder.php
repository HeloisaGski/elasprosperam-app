<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'Deide Costa',
                'content' => 'Participar do projeto foi um divisor de águas na minha jornada pessoal e profissional.',
                'rating' => 5,
            ],
            [
                'client_name' => 'Paula Dentro',
                'content' => 'Uma experiência acolhedora, inspiradora e transformadora. Me senti fortalecida.',
                'rating' => 4,
            ],
            [
                'client_name' => 'Sabrina Birlem capeta',
                'content' => 'Aprendi muito, conheci pessoas incríveis e saí com uma nova visão de futuro.',
                'rating' => 5,
            ],
        ];

        foreach ($testimonials as $data) {
            Testimonial::create([
                'client_name' => $data['client_name'],
                'content'     => $data['content'],
                'rating'      => $data['rating'],
                'photo_path'  => 'testimonials/woman.webp',
                'is_active'   => true,
            ]);
        }
    }
}
