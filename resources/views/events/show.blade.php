<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $event->title }} - Elas Prosperam</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6B46C1',
                        secondary: '#F6E05E',
                        customgray: '#f7f7f7',
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased bg-white text-gray-800">
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
            <a href="{{ url('/') }}" class="text-xl font-bold text-primary">Elas Prosperam</a>
            <nav class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="{{ route('home') }}" class="hover:text-primary transition duration-150">Home</a>
                <a href="{{ route('about.us') }}" class="hover:text-primary transition duration-150">Sobre Nós</a>
                <a href="{{ route('journey') }}" class="hover:text-primary transition duration-150">Jornada</a>
                <a href="{{ route('events') }}" class="hover:text-primary transition duration-150">Eventos</a>
                <a href="{{ route('contact') }}" class="hover:text-primary transition duration-150">Contato</a>
                <a href="{{ route('testimonials') }}" class="hover:text-primary transition duration-150">Depoimentos</a>
            </nav>
            <div class="flex items-center space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-white bg-primary hover:bg-opacity-90 px-4 py-2 rounded-lg transition duration-150">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900 transition duration-150">Login</a>
                @endauth
            </div>
        </div>
    </header>

    <main class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h1 class="text-3xl font-bold mb-4">{{ $event->title }}</h1>
                <p class="text-sm text-gray-500 mb-4">Data: {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }} | Local: {{ $event->location }}</p>
                <p class="text-gray-700 mb-8">{{ $event->description }}</p>
                <div class="flex justify-between">
                    <a href="{{ route('events.index') }}" class="bg-gray-300 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-400 transition duration-300">Voltar aos Eventos</a>
                    @auth
                        <div class="space-x-2">
                            <a href="{{ route('events.edit', $event) }}" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300">Editar</a>
                            <form action="{{ route('events.destroy', $event) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 transition duration-300" onclick="return confirm('Tem certeza?')">Excluir</button>
                            </form>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-sm">
            <p>&copy; {{ date('Y') }} Elas Prosperam. Todos os direitos reservados.</p>
            <div class="mt-2 space-x-4">
                <a href="{{ route('login') }}" class="hover:text-primary">Acesso Admin</a>
            </div>
        </div>
    </footer>
</body>
</html>
