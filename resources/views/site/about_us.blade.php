<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sobre Nós - Elas Prosperam</title>
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
        h1, h2, h3, h4 { font-family: 'Solomon', sans-serif; }
    </style>
</head>
<body class="bg-tertiary text-gray-800 antialiased">
    <header class="bg-white shadow-sm p-4 sticky top-0 z-50">
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

    <main class="max-w-6xl mx-auto py-16 px-6">
        <section class="text-center mb-20">
            <h2 class="text-5xl font-bold text-primary mb-6">Nossa Missão</h2>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed">
                O <strong>Elas Prosperam</strong> nasceu para ser um espaço seguro, profundo e transformador para a mulher que deseja prosperar de dentro para fora. Acreditamos que a prosperidade verdadeira é sobre <strong>ser mais</strong>.
            </p>
        </section>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="bg-white p-8 rounded-2xl shadow-sm text-center">
                <div class="w-32 h-32 bg-secondary rounded-full mx-auto mb-6"></div>
                <h3 class="text-2xl font-bold text-primary mb-2">Vanessa Santos</h3>
                <p class="text-sm font-bold uppercase text-gray-500 mb-4 tracking-widest">Energia da Prosperidade</p>
                <p class="text-gray-600 italic leading-relaxed">
                    Focada em alinhar sua vibração ao fluxo da vida e abrir caminhos para a abundância.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm text-center">
                <div class="w-32 h-32 bg-secondary rounded-full mx-auto mb-6"></div>
                <h3 class="text-2xl font-bold text-primary mb-2">Priscila Golarte</h3>
                <p class="text-sm font-bold uppercase text-gray-500 mb-4 tracking-widest">Prosperidade Emocional</p>
                <p class="text-gray-600 italic leading-relaxed">
                    Especialista em curar feridas, fortalecer a voz feminina e promover maturidade interna.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm text-center">
                <div class="w-32 h-32 bg-secondary rounded-full mx-auto mb-6"></div>
                <h3 class="text-2xl font-bold text-primary mb-2">Vanessa Mello</h3>
                <p class="text-sm font-bold uppercase text-gray-500 mb-4 tracking-widest">Consciência Financeira</p>
                <p class="text-gray-600 italic leading-relaxed">
                    Mentora estratégica para organizar a vida financeira e curar sua relação com o dinheiro.
                </p>
            </div>
        </div>
    </main>
</body>
</html>