<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato - Elas Prosperam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#D2AD53',   // Ouro
                        secondary: '#BFB8AF', // Laranja Acinzentado
                        tertiary: '#DFE1DC',  // Verde Claro
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
    <header class="bg-white shadow-sm p-4">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-primary italic">Elas Prosperam</h1>
            <nav class="space-x-4 text-sm font-semibold uppercase">
                <a href="{{ route('home') }}" class="hover:text-primary">Home</a>
                <a href="{{ route('about.us') }}" class="hover:text-primary">Sobre Nós</a>
                <a href="{{ route('journey') }}" class="hover:text-primary">Jornada</a>
                <a href="{{ route('events.list') }}" class="hover:text-primary">Eventos</a>
                <a href="{{ route('contact') }}" class="hover:text-primary">Contato</a>
                <a href="{{ route('testimonials') }}" class="hover:text-primary">Depoimentos</a>
            </nav>
        </div>
    </header>

    <main class="max-w-4xl mx-auto py-20 px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-primary mb-4">Entre em Contato</h2>
            <p class="text-gray-600">Dúvidas sobre a Jornada ou nossos próximos eventos? Estamos aqui para ouvir você.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 bg-white p-10 rounded-3xl shadow-lg">
            <div>
                <h3 class="text-2xl font-bold text-primary mb-6">Suporte e Egrégora</h3>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Participe de nossa egrégora de mulheres que escolheram prosperar em todos os níveis.
                </p>
                <div class="space-y-4">
                    <p class="flex items-center text-gray-600">
                        <span class="mr-3 text-primary">●</span> WhatsApp Exclusivo
                    </p>
                    <p class="flex items-center text-gray-600">
                        <span class="mr-3 text-primary">●</span> Suporte para Alunas
                    </p>
                    <p class="flex items-center text-gray-600">
                        <span class="mr-3 text-primary">●</span> Orientação Prática
                    </p>
                </div>
            </div>

            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Nome Completo</label>
                    <input type="text" name="name" class="w-full p-3 border border-tertiary rounded-lg focus:outline-none focus:border-primary" required>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Seu E-mail</label>
                    <input type="email" name="email" class="w-full p-3 border border-tertiary rounded-lg focus:outline-none focus:border-primary" required>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Mensagem</label>
                    <textarea name="message" rows="4" class="w-full p-3 border border-tertiary rounded-lg focus:outline-none focus:border-primary" required></textarea>
                </div>
                <button type="submit" class="w-full bg-primary text-white font-bold py-3 rounded-lg hover:opacity-90 transition">Enviar Mensagem</button>
            </form>
        </div>
    </main>
</body>
</html>