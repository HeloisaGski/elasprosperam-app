<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eventos - Elas Prosperam</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#D2AD53',
                        secondary: '#BFB8AF',
                        tertiary: '#DFE1DC',
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Times New Roman MT', serif; }
        h1, h2, h3 { font-family: 'Solomon', sans-serif; }
    </style>
</head>
<body class="bg-tertiary text-gray-800 antialiased">
    <main class="max-w-6xl mx-auto py-20 px-6">
        <h2 class="text-4xl font-bold text-primary mb-12 text-center">Nossa Agenda de Movimentos</h2>

        <div class="space-y-8">
            {{-- Controller passa os eventos --}}
            @forelse($events as $event)
                <div class="bg-white overflow-hidden rounded-2xl shadow-sm flex flex-col md:flex-row hover:shadow-md transition">
                    <div class="bg-primary text-white p-8 flex flex-col justify-center items-center md:w-48 text-center">
                        <span class="text-sm uppercase font-bold tracking-widest">{{ $event->event_date->format('M') }}</span>
                        <span class="text-4xl font-bold">{{ $event->event_date->format('d') }}</span>
                        <span class="text-sm font-semibold">{{ $event->event_date->format('H:i') }}</span>
                    </div>
                    <div class="p-8 flex-1">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $event->title }}</h3>
                        <p class="text-primary font-semibold mb-4 italic">{{ $event->location }}</p>
                        <p class="text-gray-600 mb-6">{{ $event->short_description }}</p>
                        <a href="{{ $event->registration_link ?? '#' }}" class="inline-block border-2 border-primary text-primary px-6 py-2 rounded-full font-bold hover:bg-primary hover:text-white transition">Garantir minha vaga</a>
                    </div>
                </div>
            @empty
                <div class="text-center py-20 bg-white rounded-2xl">
                    <p class="text-gray-500 italic">Nenhum evento agendado no momento. Fique de olho!</p>
                </div>
            @endforelse
        </div>
    </main>
</body>
</html>