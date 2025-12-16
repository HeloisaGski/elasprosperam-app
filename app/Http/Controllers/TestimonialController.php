<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'content'     => 'required|string',
            'rating'      => 'required|integer|min:1|max:5',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validação da foto
        ]);

        $data = $request->all();

        // Lógica de Upload da Foto
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('testimonials', 'public');
            $data['photo_path'] = $path;
        }

        Testimonial::create($data);

        return redirect()->route('testimonials.index')->with('success', 'Testemunho criado com sucesso!');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'content'     => 'required|string',
            'rating'      => 'required|integer|min:1|max:5',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            // Apaga a foto antiga se ela existir
            if ($testimonial->photo_path) {
                Storage::disk('public')->delete($testimonial->photo_path);
            }
            
            $path = $request->file('photo')->store('testimonials', 'public');
            $data['photo_path'] = $path;
        }

        $testimonial->update($data);

        return redirect()->route('testimonials.index')->with('success', 'Testemunho atualizado!');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->photo_path) {
            Storage::disk('public')->delete($testimonial->photo_path);
        }
        
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testemunho removido.');
    }
}