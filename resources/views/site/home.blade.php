<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('img/logoelasprosperam.svg') }}">

    <title>Elas Prosperam — Experiência & Jornada</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#D2AD53',   // Dourado
                        secondary: '#BFB8AF', // Cinza Pastel
                        tertiary: '#DFE1DC',  // Verde Claro
                        warmbg: '#FDFDFC',    // Branco Quente
                    },
                    fontFamily: {
                        serif: ['Times New Roman MT', 'Georgia', 'serif'],
                        sans: ['Solomon', 'Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .font-header { font-family: 'Solomon', sans-serif; letter-spacing: -0.02em; }
        .font-body { font-family: 'Times New Roman MT', serif; }
        .organic-shape { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
    </style>
</head>
<body class="bg-warmbg text-gray-800 antialiased font-body">

    {{-- NAVEGAÇÃO MINIMALISTA COM LOGO --}}
<header class="fixed w-full z-50 transition-all duration-300 bg-warmbg/80 backdrop-blur-md border-b border-tertiary/20">
        <div class="max-w-7xl mx-auto px-6 h-24 flex justify-between items-center">
            
            {{-- ÁREA DA LOGO --}}
            <a href="{{ route('home') }}" class="flex items-center group">
                <img src="{{ asset('img/logoelasprosperam.svg') }}" 
                    alt="Logo Elas Prosperam" 
                    class="h-12 md:h-16 w-auto transition-transform duration-300 group-hover:scale-105">
            </a>

            <nav class="hidden md:flex space-x-10 text-[11px] font-bold uppercase tracking-[0.2em] text-gray-500">
                <a href="#inicio" class="hover:text-primary transition">Início</a>
                <a href="#sobre" class="hover:text-primary transition">Sobre Nós</a>
                <a href="#jornada" class="hover:text-primary transition">A Jornada</a>
                <a href="#eventos" class="hover:text-primary transition">Eventos</a>
                <a href="#depoimentos" class="hover:text-primary transition">Depoimentos</a>
                <a href="#contato" class="hover:text-primary transition">Contato</a>
            </nav>

            <div class="flex items-center gap-6">
                <a href="{{ route('login') }}" class="text-[10px] uppercase font-bold border-b border-primary text-primary pb-1">Login</a>
            </div>
        </div>
</header>
    <main>
        {{-- HERO SECTION --}}
        <section id="inicio" class="relative min-h-screen flex items-center pt-24 bg-tertiary/30">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="z-10">
                    <span class="text-primary font-bold uppercase tracking-[0.3em] text-xs mb-4 block">Bem-vinda ao seu novo ciclo</span>
                    <h1 class="text-6xl md:text-8xl font-header text-gray-900 leading-[0.9] mb-8">
                        A prosperidade <br><span class="italic text-primary">é feminina.</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-10 max-w-md leading-relaxed">
                        Um movimento desenhado para despertar a consciência financeira e emocional de mulheres que buscam o próximo nível.
                    </p>
                    <a href="#jornada" class="inline-block bg-primary text-white px-10 py-5 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-opacity-90 transition shadow-xl shadow-primary/20">
                        Conhecer a Jornada
                    </a>
                </div>
                {{-- imagem com shape orgânico --}}
                <div class="relative flex justify-center">
                    <div class="organic-shape bg-secondary w-full aspect-square max-w-lg overflow-hidden shadow-2xl rotate-3 hover:rotate-0 transition duration-700">
                        <img src="{{ asset('img/proprietarias2.jpg') }}" alt="Mentoras Elas Prosperam" class="w-full h-full object-cover">                        <div class="w-full h-full bg-gray-200 animate-pulse"></div> 
                    </div>
                </div>
            </div>
        </section>

        {{-- SOBRE NÓS --}}
        <section id="sobre" class="py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-24">
                    <h2 class="text-4xl font-header text-primary mb-4 italic">Três Mentoras, Uma Direção</h2>
                    <p class="text-gray-500 uppercase tracking-widest text-xs">Mente • Energia • Estratégia</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
                    @foreach([
                        ['nome' => 'Vanessa Santos', 'foco' => 'Energia', 'foto' => 'VanessaSantos.jpg'],
                        ['nome' => 'Priscila Golarte', 'foco' => 'Emocional', 'foto' => 'PriscilaGolarte.jpg'],
                        ['nome' => 'Vanessa Mello', 'foco' => 'Financeiro', 'foto' => 'VanessaMello.jpg']
                    ] as $mentora)
                    <div class="group text-center">
                        <div class="mb-8 overflow-hidden rounded-[60px] aspect-[4/5] bg-tertiary transition duration-500 shadow-lg">
                            <img 
                                src="{{ asset('img/' . $mentora['foto']) }}" 
                                alt="{{ $mentora['nome'] }}" 
                                class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700"
                            >
                        </div>
                        
                        <h3 class="text-2xl font-header text-gray-900 group-hover:text-primary transition">
                            {{ $mentora['nome'] }}
                        </h3>
                        <p class="text-sm italic text-gray-500 mt-2">
                            {{ $mentora['foco'] }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- JORNADA --}}
<section id="jornada" class="py-32 bg-[#FDFDFC]">
    <div class="max-w-7xl mx-auto px-6">
        
        {{-- Introdução --}}
        <div class="max-w-3xl mb-24">
            <span class="text-primary font-bold uppercase tracking-[0.4em] text-[10px] mb-4 block">Imersão de um mês</span>
            <h2 class="text-5xl md:text-7xl font-header text-gray-900 leading-tight mb-8">
                Um espaço seguro para <br><span class="italic text-primary">expandir seu ser.</span>
            </h2>
            <p class="text-xl text-gray-500 font-body leading-relaxed">
                A Jornada é uma imersão profunda conduzida pelas nossas três mentoras. Um ciclo para alinhar mente, energia e estratégia.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-start">
            
            {{-- Lado Esquerdo: Lista de Encontros --}}
            <div class="space-y-16">
                @foreach([
                    ['semana' => 'Semana 01', 'tema' => 'A Energia da Prosperidade', 'desc' => 'Vanessa Santos ensina como alinhar sua vibração ao fluxo da abundância.'],
                    ['semana' => 'Semana 02', 'tema' => 'A Prosperidade Emocional', 'desc' => 'Priscila Golarte foca em curar feridas e fortalecer sua voz interna.'],
                    ['semana' => 'Semana 03', 'tema' => 'Consciência Financeira', 'desc' => 'Vanessa Mello traz estratégias para organizar sua vida e relação com o dinheiro.'],
                    ['semana' => 'Semana 04', 'tema' => 'Hotseat da Prosperidade', 'desc' => 'Um momento único de mentoria direta com as três mentoras.'],
                ] as $index => $item)
                <div class="flex items-start gap-8 group">
                    {{-- Ícone Circular --}}
                    <div class="shrink-0 w-16 h-16 rounded-full border border-tertiary flex items-center justify-center text-primary font-header italic text-xl group-hover:bg-primary group-hover:text-white transition-all duration-500">
                        0{{ $index + 1 }}
                    </div>
                    <div>
                        <span class="text-[10px] uppercase font-bold tracking-widest text-secondary">{{ $item['semana'] }}</span>
                        <h3 class="text-2xl font-header text-gray-900 mt-1 mb-3">{{ $item['tema'] }}</h3>
                        <p class="text-gray-500 font-body leading-relaxed max-w-sm">{{ $item['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Lado Direito --}}
            <div class="sticky top-32">
                <div class="relative">
                    {{-- Shape Orgânico para a Foto --}}
                    <div class="organic-shape bg-tertiary w-full aspect-[4/5] overflow-hidden shadow-2xl relative z-10">
                        <img src="{{ asset('img/proprietarias.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    
                    {{-- Card Flutuante de Benefício --}}
                    <div class="absolute -bottom-10 -left-10 bg-white p-10 rounded-[40px] shadow-xl z-20 max-w-xs border border-tertiary/50">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"></path></svg>
                        </div>
                        <h4 class="text-sm font-header font-bold uppercase mb-2">Comunidade VIP</h4>
                        <p class="text-xs text-gray-500 font-body">Grupo exclusivo no WhatsApp para trocas, suporte e conteúdos práticos diários.</p>
                    </div>

                    {{-- decorativo sutil --}}
                    <div class="absolute -top-6 -right-6 text-primary animate-pulse">
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0l3.09 8.91h9.41l-7.62 5.54 2.91 8.91-7.79-5.66-7.79 5.66 2.91-8.91-7.62-5.54h9.41z"/></svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

        {{-- EVENTOS DINÂMICOS --}}
        <section id="eventos" class="py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                    <h2 class="text-5xl font-header text-gray-900 leading-tight">
                        Próximos <br><span class="text-primary italic">Encontros</span>
                    </h2>
                    <p class="text-gray-500 max-w-xs text-sm italic font-body">
                        Palestras, workshops e imersões presenciais ou online para o seu crescimento.
                    </p>
                </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                @forelse($events as $event)
                    <div class="flex gap-8 items-center p-8 bg-tertiary/10 border border-tertiary rounded-[40px] hover:border-primary transition duration-500 group">
                        {{-- Data formatada --}}
                        <div class="text-center border-r border-tertiary pr-8 shrink-0">
                            <span class="block text-4xl font-header text-primary leading-none">
                                {{ $event->date->format('d') }}
                            </span>
                            <span class="block text-[10px] uppercase font-bold text-gray-400 mt-2 tracking-widest">
                                {{ $event->date->translatedFormat('M') }}
                            </span>
                        </div>

                        {{-- Conteúdo do Evento --}}
                        <div>
                            <span class="text-[9px] uppercase font-bold tracking-[0.2em] text-secondary mb-2 block">
                                {{ $event->location }}
                            </span>
                            <h3 class="text-2xl font-header text-gray-900 mb-3 group-hover:text-primary transition">
                                {{ $event->title }}
                            </h3>
                            <p class="text-gray-500 text-sm font-body mb-4 line-clamp-2">
                                {{ $event->description }}
                            </p>
                            <a href="#contato" class="text-[10px] uppercase font-bold text-primary tracking-widest border-b border-primary/30 pb-1 hover:border-primary transition">
                                Saber Mais
                            </a>
                        </div>
                    </div>
                @empty
                    {{--  não tem eventos cadastrados --}}
                    <div class="col-span-full py-20 text-center bg-tertiary/20 rounded-[50px] border-2 border-dashed border-tertiary">
                        <p class="italic text-gray-400 font-body">
                            Novos movimentos estão sendo preparados pelas mentoras...
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- GALERIA (CARROSSEL) --}}
        <section class="py-16 bg-[#FDFDFC]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-header text-[#D2AD53] sm:text-4xl tracking-wide">
                        Nossos Momentos
                    </h2>
                    <div class="mt-4 flex justify-center">
                        <div class="w-16 h-0.5 bg-[#BFB8AF]"></div>
                    </div>
                    <p class="mt-4 text-lg font-body text-gray-500 italic">
                        A elegância de prosperar juntas.
                    </p>
                </div>

                <div class="flex overflow-x-auto pb-8 hide-scroll-bar gap-6 snap-x snap-mandatory px-6 md:grid md:grid-cols-4 md:gap-8 md:overflow-visible">
                   
                    {{-- imagens específicas --}}
                    @foreach(['woman.jpg', 'balcon.jpg', 'elas.jpg', 'talk.jpg'] as $img)
                    <div class="snap-center shrink-0 w-[80vw] md:w-auto transition-transform hover:scale-[1.02] duration-500">
                        <img class="w-full h-[400px] shadow-xl border border-[#D2AD53] object-cover rounded-lg md:rounded-none"
                             src="{{ asset('img/' . $img) }}"
                             alt="Momento Elas Prosperam">
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </section>


        {{-- SEÇÃO CONTATO  --}}
        <section id="contato" class="py-32 bg-tertiary/10">
            <div class="max-w-4xl mx-auto px-6 text-center">
                
                <div class="mb-16">
                    <span class="text-primary font-bold uppercase tracking-[0.4em] text-[10px] mb-4 block">Fale Conosco</span>
                    <h2 class="text-4xl md:text-5xl font-header text-gray-900 italic mb-6">Inicie sua Jornada</h2>
                    <p class="text-gray-500 font-body text-lg">
                        Dúvidas sobre os próximos eventos ou mentoria individual? <br>
                        Fale diretamente com nossa equipe via WhatsApp.
                    </p>
                </div>

                {{-- Formulário Visual (não envia pro Banco, só gera o Link) --}}
                <div class="space-y-6 max-w-lg mx-auto">
                    <div class="text-left">
                        <label class="block text-[10px] uppercase font-bold tracking-widest text-secondary mb-2 ml-4">Como podemos te chamar?</label>
                        <input type="text" id="whatsapp_name" placeholder="Seu nome completo" 
                            class="w-full bg-white border-0 rounded-full p-5 focus:ring-2 focus:ring-primary/20 transition shadow-sm font-body">
                    </div>

                    <div class="text-left">
                        <label class="block text-[10px] uppercase font-bold tracking-widest text-secondary mb-2 ml-4">Sua dúvida ou mensagem</label>
                        <textarea id="whatsapp_message" rows="3" placeholder="Gostaria de saber mais sobre..." 
                            class="w-full bg-white border-0 rounded-[30px] p-5 focus:ring-2 focus:ring-primary/20 transition shadow-sm font-body"></textarea>
                    </div>

                    <button onclick="sendToWhatsApp()" 
                        class="w-full bg-primary text-white px-12 py-5 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-opacity-90 transition shadow-xl shadow-primary/20 flex items-center justify-center gap-3">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.588-5.946 0-6.556 5.332-11.888 11.888-11.888 3.176 0 6.161 1.237 8.404 3.48s3.481 5.229 3.481 8.406c0 6.555-5.332 11.887-11.888 11.887-2.008 0-3.98-.509-5.719-1.476l-6.165 1.6z"/></svg>
                        Enviar via WhatsApp
                    </button>
                </div>
            </div>
        </section>

        <script>
            function sendToWhatsApp() {
                const name = document.getElementById('whatsapp_name').value;
                const message = document.getElementById('whatsapp_message').value;
                
                const phoneNumber = "5551995214397"; 
                
                const text = `Olá! Meu nome é *${name}*.\n\n${message}`;
                const encodedText = encodeURIComponent(text);
                
                const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodedText}`;
                
                window.open(whatsappUrl, '_blank');
            }
</script>

{{-- SEÇÃO DEPOIMENTOS  --}}
<section id="depoimentos" class="py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-header text-primary mb-20 italic">O que elas dizem sobre a Jornada</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            @forelse($testimonials as $testimonial)
                <div class="relative bg-white pt-16 pb-10 px-8 rounded-[40px] shadow-sm border border-tertiary flex flex-col items-center">
                    
                    <div class="absolute -top-12 left-1/2 -translate-x-1/2 w-24 h-24 rounded-full border-4 border-white overflow-hidden shadow-lg">
                        <img src="{{ $testimonial->photo_path ? asset('storage/' . $testimonial->photo_path) : asset('img/avatar-placeholder.jpg') }}" 
                             class="w-full h-full object-cover">
                    </div>

                    <div class="flex gap-1 text-primary mb-6">
                        @for($i = 0; $i < $testimonial->rating; $i++)
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>

                    <p class="text-gray-600 font-body italic leading-relaxed mb-8">
                        "{{ $testimonial->content }}"
                    </p>

                    <h4 class="font-header text-primary italic text-xl">
                        {{ $testimonial->client_name }}
                    </h4>
                </div>
            @empty
                <p class="col-span-full text-gray-400 italic">Novos depoimentos de prosperidade em breve...</p>
            @endforelse
        </div>
    </div>
</section>

    <footer class="py-16 bg-white border-t border-tertiary">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-primary font-header italic text-xl mb-4">Elas Prosperam</p>
            <p class="text-[10px] text-gray-400 uppercase tracking-[0.4em]">© {{ date('Y') }} • Elegância e Prosperidade</p>
        </div>
    </footer>

</body>
</html>