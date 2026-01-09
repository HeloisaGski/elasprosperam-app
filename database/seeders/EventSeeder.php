<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        Event::create([
            'title' => 'Elas Prosperam - Experience - 2° edição',
            'description' => 'Não é mais sobre entender.
            É sobre se mover.
            Sentir.
            Decidir.
            E sustentar a mulher que você está se tornando.',
            'date' => Carbon::now()->addDays(15),
            'location' => 'Sopro Work.Live, Capão da Canoa - RS',
            'link_sympla' => 'https://www.sympla.com.br/evento/elas-prosperam-experience-2-edicao/3257487?share_id=copiarlink&utm_source=ig&utm_medium=social&utm_content=link_in_bio&fbclid=PAZXh0bgNhZW0CMTEAc3J0YwZhcHBfaWQMMjU2MjgxMDQwNTU4AAGnk-VVVlG3k5Id1r23Gkji7CFxn-zA_gSsQuBi6qAWs9s0UR1QP73ugY0B4es_aem_g5InHR-zFiR1ARTTeQqv2Q&referrer=l.instagram.com&referrer=l.instagram.com&share_id=copiarlink',
            'is_featured' => true,
        ]);

        Event::create([
            'title' => 'Workshop de Liderança Feminina',
            'description' => 'Workshop focado em liderança e crescimento profissional.',
            'date' => Carbon::now()->addDays(30),
            'location' => 'Evento Online',
            'link_sympla' => 'https://www.sympla.com.br/evento/workshop-lideranca',
            'is_featured' => false,
        ]);
    }
}