<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image; 

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
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        $data = $request->all();
        $data['is_active'] = true;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            
            $filename = md5(time() . uniqid()) . '.webp';
            $path = 'testimonials/' . $filename;

            $img = Image::make($image->getRealPath())
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('webp', 80);

            Storage::disk('public')->put($path, (string) $img);
            
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
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            // apaga a foto antiga
            if ($testimonial->photo_path) {
                if(Storage::disk('public')->exists($testimonial->photo_path)) {
                    Storage::disk('public')->delete($testimonial->photo_path);
                }
            }
            
            $image = $request->file('photo');
            $filename = md5(time() . uniqid()) . '.webp';
            $path = 'testimonials/' . $filename;

            $img = Image::make($image->getRealPath())
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('webp', 80);

            Storage::disk('public')->put($path, (string) $img);
            $data['photo_path'] = $path;
        }

        $testimonial->update($data);

        return redirect()->route('testimonials.index')->with('success', 'Testemunho atualizado!');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->photo_path) {
            if(Storage::disk('public')->exists($testimonial->photo_path)) {
                Storage::disk('public')->delete($testimonial->photo_path);
            }
        }
        
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testemunho removido.');
    }
}