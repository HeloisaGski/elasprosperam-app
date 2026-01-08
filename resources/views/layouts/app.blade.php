<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="{{ asset('img/logoelasprosperam.svg') }}">

        <title>Painel ADMIN — Elas Prosperam</title>
        <style>
            /* fundo sempre o verde claro da marca */
            body { background-color: #DFE1DC; }
            .font-header { font-family: 'Solomon', sans-serif; }
            .font-body { font-family: 'Times New Roman MT', serif; }
        </style>

        {{-- Scripts padrão do Breeze --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-800">
      
        <div class="min-h-screen bg-tertiary">
            
            {{-- Navegação superior --}}
            <div class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-primary/10">
                @include('layouts.navigation')
            </div>

            @isset($header)
                <header class="bg-white/50 shadow-sm">
                    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
                        {{-- título fonte elegante --}}
                        <div class="text-primary">
                            {{ $header }}
                        </div>
                    </div>
                </header>
            @endisset

            <main class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>