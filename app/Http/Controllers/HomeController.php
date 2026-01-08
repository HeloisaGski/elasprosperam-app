<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // 1. Busca o destaque
        $featuredEvent = Event::where('is_featured', true)
            ->whereDate('date', '>=', now())
            ->orderBy('date', 'asc')
            ->first();

        // 2. Busca o resto
        $query = Event::query()
            ->whereDate('date', '>=', now())
            ->orderBy('date', 'asc');
        
        if ($featuredEvent) {
            $query->where('id', '!=', $featuredEvent->id);
        }
        
        $events = $query->get();

        return view('home', compact('featuredEvent', 'events'));
    }
}