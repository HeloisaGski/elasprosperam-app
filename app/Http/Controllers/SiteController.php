<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Testimonial;

class SiteController extends Controller
{
    /**
     * Página Principal (Landing Page Única)
     */
    public function home()
    {
        // 1. Busca os eventos ativos e futuros (ordenados do mais próximo para o mais distante)
        $events = Event::orderBy('date', 'asc')->get();

        // 2. Busca os depoimentos ativos (os mais recentes primeiro)
        $testimonials = Testimonial::where('is_active', true)->latest()->get();

        // 3. Retorna a view 'home' enviando as duas coleções de dados
        return view('site.home', compact('events', 'testimonials'));
    }

    /**
     * As funções abaixo podem ser mantidas caso você ainda use as páginas separadas
     * ou links diretos, mas para a One-Page, a função principal é a home().
     */

    public function aboutUs()
    {
        return view('site.about_us');
    }

    public function journey()
    {
        return view('site.journey');
    }

    public function events()
    {
        // Se você tiver uma página que lista SÓ eventos
        $events = Event::orderBy('date', 'asc')->get();
        return view('site.events_list', compact('events'));
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function testimonials()
    {
        // Se você tiver uma página que lista SÓ depoimentos
        $testimonials = Testimonial::where('is_active', true)->latest()->get();
        return view('site.testimonials', compact('testimonials'));
    }
}