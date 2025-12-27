<!-- <!DOCTYPE html>
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
                        // Restaurei sua configuração original aqui
                        serif: ['Times New Roman MT', 'Georgia', 'serif'],
                        sans: ['Solomon', 'Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        /* Restaurei as classes originais para garantir o uso da Solomon e Times New Roman MT */
        .font-header { 
            font-family: 'Solomon', sans-serif; 
            letter-spacing: -0.02em; 
        }
        .font-body { 
            font-family: 'Times New Roman MT', serif; 
        }
        
        .organic-shape { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
        
        /* Utilitário para esconder barra de rolagem mantendo o scroll */
        .hide-scroll-bar::-webkit-scrollbar { display: none; }
        .hide-scroll-bar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-warmbg text-gray-800 antialiased font-body overflow-x-hidden">

    {{-- NAVEGAÇÃO --}}
    <header id="main-header" class="fixed w-full z-50 transition-all duration-300 bg-warmbg/90 backdrop-blur-md border-b border-tertiary/20">
        <div class="max-w-7xl mx-auto px-6 h-20 md:h-24 flex justify-between items-center">
            
            {{-- LOGO --}}
            <a href="{{ route('home') }}" class="flex items-center group z-50 relative">
                <img src="{{ asset('img/logoelasprosperam.svg') }}" 
                     alt="Logo Elas Prosperam" 
                     class="h-10 md:h-16 w-auto transition-transform duration-300 group-hover:scale-105">
            </a>

            {{-- MENU DESKTOP --}}
            <nav class="hidden md:flex space-x-8 lg:space-x-10 text-[11px] font-bold uppercase tracking-[0.2em] text-gray-500">
                <a href="#inicio" class="hover:text-primary transition">Início</a>
                <a href="#sobre" class="hover:text-primary transition">Sobre Nós</a>
                <a href="#jornada" class="hover:text-primary transition">A Jornada</a>
                <a href="#eventos" class="hover:text-primary transition">Eventos</a>
                <a href="#depoimentos" class="hover:text-primary transition">Depoimentos</a>
                <a href="#contato" class="hover:text-primary transition">Contato</a>
            </nav>

            {{-- AÇÕES (LOGIN + MENU MOBILE) --}}
            <div class="flex items-center gap-6 z-50 relative">
                <a href="{{ route('login') }}" class="text-[10px] uppercase font-bold border-b border-primary text-primary pb-1 hover:text-gray-900 transition">Login</a>
                
                {{-- BOTÃO HAMBÚRGUER (MOBILE) --}}
                <button id="mobile-menu-btn" class="md:hidden text-primary focus:outline-none p-2">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        {{-- MENU MOBILE OVERLAY --}}
        <div id="mobile-menu" class="fixed inset-0 bg-warmbg z-40 flex flex-col items-center justify-center space-y-8 opacity-0 pointer-events-none transition-opacity duration-300">
            <nav class="flex flex-col items-center space-y-6 text-lg font-header text-gray-800">
                <a href="#inicio" class="mobile-link hover:text-primary transition" onclick="toggleMenu()">Início</a>
                <a href="#sobre" class="mobile-link hover:text-primary transition" onclick="toggleMenu()">Sobre Nós</a>
                <a href="#jornada" class="mobile-link hover:text-primary transition" onclick="toggleMenu()">A Jornada</a>
                <a href="#eventos" class="mobile-link hover:text-primary transition" onclick="toggleMenu()">Eventos</a>
                <a href="#depoimentos" class="mobile-link hover:text-primary transition" onclick="toggleMenu()">Depoimentos</a>
                <a href="#contato" class="mobile-link hover:text-primary transition" onclick="toggleMenu()">Contato</a>
            </nav>
            <div class="mt-8">
                 <img src="{{ asset('img/logoelasprosperam.svg') }}" class="h-12 w-auto opacity-50">
            </div>
        </div>
    </header>

    <main>
        {{-- HERO SECTION --}}
        <section id="inicio" class="relative min-h-screen flex items-center pt-24 pb-12 bg-tertiary/30 overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="z-10 order-2 lg:order-1 text-center lg:text-left">
                    <span class="text-primary font-bold uppercase tracking-[0.3em] text-xs mb-4 block animate-fade-in-up">Bem-vinda ao seu novo ciclo</span>
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-header text-gray-900 leading-[0.9] mb-8">
                        A prosperidade <br><span class="italic text-primary">é feminina.</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-10 max-w-md mx-auto lg:mx-0 leading-relaxed font-body">
                        Um movimento desenhado para despertar a consciência financeira e emocional de mulheres que buscam o próximo nível.
                    </p>
                    <a href="#jornada" class="inline-block bg-primary text-white px-10 py-4 md:py-5 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-opacity-90 transition shadow-xl shadow-primary/20">
                        Conhecer a Jornada
                    </a>
                </div>
                
                {{-- Imagem Hero --}}
                <div class="relative flex justify-center order-1 lg:order-2">
                    <div class="organic-shape bg-secondary w-full max-w-[300px] md:max-w-md lg:max-w-lg aspect-square overflow-hidden shadow-2xl rotate-3 hover:rotate-0 transition duration-700">
                        <img src="{{ asset('img/proprietarias2.jpg') }}" alt="Mentoras Elas Prosperam" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>

        {{-- SOBRE NÓS --}}
        <section id="sobre" class="py-20 md:py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16 md:mb-24">
                    <h2 class="text-3xl md:text-4xl font-header text-primary mb-4 italic">Três Mentoras, Uma Direção</h2>
                    <p class="text-gray-500 uppercase tracking-widest text-xs">Mente • Energia • Estratégia</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-16">
                    @foreach([
                        ['nome' => 'Vanessa Santos', 'foco' => 'Energia', 'foto' => 'VanessaSantos.jpg'],
                        ['nome' => 'Priscila Golarte', 'foco' => 'Emocional', 'foto' => 'PriscilaGolarte.jpg'],
                        ['nome' => 'Vanessa Mello', 'foco' => 'Financeiro', 'foto' => 'VanessaMello.jpg']
                    ] as $mentora)
                    <div class="group text-center">
                        <div class="mx-auto md:mx-0 mb-8 overflow-hidden rounded-[60px] w-64 md:w-full aspect-[4/5] bg-tertiary transition duration-500 shadow-lg relative">
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
        <section id="jornada" class="py-20 md:py-32 bg-[#FDFDFC]">
            <div class="max-w-7xl mx-auto px-6">
                
                <div class="max-w-3xl mb-16 md:mb-24">
                    <span class="text-primary font-bold uppercase tracking-[0.4em] text-[10px] mb-4 block">Imersão de um mês</span>
                    <h2 class="text-4xl md:text-6xl lg:text-7xl font-header text-gray-900 leading-tight mb-8">
                        Um espaço seguro para <br><span class="italic text-primary">expandir seu ser.</span>
                    </h2>
                    <p class="text-lg md:text-xl text-gray-500 font-body leading-relaxed">
                        A Jornada é uma imersão profunda conduzida pelas nossas três mentoras. Um ciclo para alinhar mente, energia e estratégia.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 md:gap-24 items-start">
                    
                    {{-- Lista de Encontros --}}
                    <div class="space-y-12 md:space-y-16">
                        @foreach([
                            ['semana' => 'Semana 01', 'tema' => 'A Energia da Prosperidade', 'desc' => 'Vanessa Santos ensina como alinhar sua vibração ao fluxo da abundância.'],
                            ['semana' => 'Semana 02', 'tema' => 'A Prosperidade Emocional', 'desc' => 'Priscila Golarte foca em curar feridas e fortalecer sua voz interna.'],
                            ['semana' => 'Semana 03', 'tema' => 'Consciência Financeira', 'desc' => 'Vanessa Mello traz estratégias para organizar sua vida e relação com o dinheiro.'],
                            ['semana' => 'Semana 04', 'tema' => 'Hotseat da Prosperidade', 'desc' => 'Um momento único de mentoria direta com as três mentoras.'],
                        ] as $index => $item)
                        <div class="flex flex-col sm:flex-row items-start gap-6 md:gap-8 group">
                            <div class="shrink-0 w-14 h-14 md:w-16 md:h-16 rounded-full border border-tertiary flex items-center justify-center text-primary font-header italic text-xl group-hover:bg-primary group-hover:text-white transition-all duration-500">
                                0{{ $index + 1 }}
                            </div>
                            <div>
                                <span class="text-[10px] uppercase font-bold tracking-widest text-secondary">{{ $item['semana'] }}</span>
                                <h3 class="text-xl md:text-2xl font-header text-gray-900 mt-1 mb-2">{{ $item['tema'] }}</h3>
                                <p class="text-sm md:text-base text-gray-500 font-body leading-relaxed max-w-sm">{{ $item['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- Imagem Sticky --}}
                    <div class="relative lg:sticky lg:top-32 mt-12 lg:mt-0">
                        <div class="organic-shape bg-tertiary w-full aspect-[4/5] overflow-hidden shadow-2xl relative z-10">
                            <img src="{{ asset('img/proprietarias.jpg') }}" class="w-full h-full object-cover">
                        </div>
                        
                        {{-- Card Flutuante --}}
                        <div class="absolute -bottom-6 -left-0 md:-bottom-10 md:-left-10 bg-white p-6 md:p-10 rounded-[30px] md:rounded-[40px] shadow-xl z-20 max-w-[280px] md:max-w-xs border border-tertiary/50">
                            <div class="flex items-center justify-center h-12 w-12 md:h-16 md:w-16 rounded-full bg-yellow-100 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 md:w-8 md:h-8 text-yellow-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                </svg>
                            </div>
                            <h4 class="text-sm font-header font-bold uppercase mb-2">Comunidade VIP</h4>
                            <p class="text-xs text-gray-500 font-body">Grupo exclusivo no WhatsApp para trocas, suporte e conteúdos práticos diários.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- EVENTOS --}}
        <section id="eventos" class="py-20 md:py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-6">
                    <h2 class="text-4xl md:text-5xl font-header text-gray-900 leading-tight">
                        Próximos <br><span class="text-primary italic">Encontros</span>
                    </h2>
                    <p class="text-gray-500 max-w-xs text-sm italic font-body">
                        Palestras, workshops e imersões presenciais ou online para o seu crescimento.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10">
                    @forelse($events as $event)
                        <div class="flex flex-col sm:flex-row gap-6 sm:gap-8 items-start sm:items-center p-6 sm:p-8 bg-tertiary/10 border border-tertiary rounded-[30px] md:rounded-[40px] hover:border-primary transition duration-500 group">
                            <div class="text-left sm:text-center border-b sm:border-b-0 sm:border-r border-tertiary pb-4 sm:pb-0 pr-0 sm:pr-8 shrink-0 w-full sm:w-auto">
                                <span class="block text-4xl font-header text-primary leading-none">
                                    {{ $event->date->format('d') }}
                                </span>
                                <span class="block text-[10px] uppercase font-bold text-gray-400 mt-2 tracking-widest">
                                    {{ $event->date->translatedFormat('M') }}
                                </span>
                            </div>

                            <div>
                                <span class="text-[9px] uppercase font-bold tracking-[0.2em] text-secondary mb-2 block">
                                    {{ $event->location }}
                                </span>
                                <h3 class="text-xl md:text-2xl font-header text-gray-900 mb-3 group-hover:text-primary transition">
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
                    
                    {{-- Loop com as imagens específicas --}}
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

        {{-- CONTATO --}}
        <section id="contato" class="py-20 md:py-32 bg-tertiary/10">
            <div class="max-w-4xl mx-auto px-6 text-center">
                <div class="mb-12 md:mb-16">
                    <span class="text-primary font-bold uppercase tracking-[0.4em] text-[10px] mb-4 block">Fale Conosco</span>
                    <h2 class="text-4xl md:text-5xl font-header text-gray-900 italic mb-6">Inicie sua Jornada</h2>
                    <p class="text-gray-500 font-body text-lg">
                        Dúvidas sobre os próximos eventos ou mentoria individual? <br class="hidden md:block">
                        Fale diretamente com nossa equipe via WhatsApp.
                    </p>
                </div>

                <div class="space-y-6 max-w-lg mx-auto">
                    <div class="text-left">
                        <label class="block text-[10px] uppercase font-bold tracking-widest text-secondary mb-2 ml-4">Como podemos te chamar?</label>
                        <input type="text" id="whatsapp_name" placeholder="Seu nome completo" 
                            class="w-full bg-white border-0 rounded-full p-4 md:p-5 focus:ring-2 focus:ring-primary/20 transition shadow-sm font-body outline-none text-gray-700">
                    </div>

                    <div class="text-left">
                        <label class="block text-[10px] uppercase font-bold tracking-widest text-secondary mb-2 ml-4">Sua dúvida ou mensagem</label>
                        <textarea id="whatsapp_message" rows="3" placeholder="Gostaria de saber mais sobre..." 
                            class="w-full bg-white border-0 rounded-[30px] p-4 md:p-5 focus:ring-2 focus:ring-primary/20 transition shadow-sm font-body outline-none text-gray-700"></textarea>
                    </div>

                    <button onclick="sendToWhatsApp()" 
                        class="w-full bg-primary text-white px-12 py-4 md:py-5 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-opacity-90 transition shadow-xl shadow-primary/20 flex items-center justify-center gap-3">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.588-5.946 0-6.556 5.332-11.888 11.888-11.888 3.176 0 6.161 1.237 8.404 3.48s3.481 5.229 3.481 8.406c0 6.555-5.332 11.887-11.888 11.887-2.008 0-3.98-.509-5.719-1.476l-6.165 1.6z"/></svg>
                        Enviar via WhatsApp
                    </button>
                </div>
            </div>
        </section>

        {{-- DEPOIMENTOS --}}
        <section id="depoimentos" class="py-20 md:py-32 bg-white">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-header text-primary mb-16 md:mb-20 italic">O que elas dizem sobre a Jornada</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-12 mt-12 md:mt-0">
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

    </main>

    <footer class="py-16 bg-white border-t border-tertiary">
        <div class="flex justify-center mb-8">
            <a href="https://www.instagram.com/elasprosperam.oficial/#" target="_blank" 
            class="group relative inline-flex items-center justify-center px-8 py-3 text-base font-serif tracking-wide text-white transition-all duration-300 bg-[#D2AD53] rounded-sm hover:bg-[#BFB8AF] shadow-md hover:shadow-lg">
                <svg class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
                Siga no Instagram
            </a>
        </div>
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-primary font-header italic text-xl mb-4">Elas Prosperam</p>
            <p class="text-[10px] text-gray-400 uppercase tracking-[0.4em]">© {{ date('Y') }} • Elegância e Prosperidade</p>
        </div>
    </footer>

    {{-- SCRIPTS --}}
    <script>
        // Função WhatsApp
        function sendToWhatsApp() {
            const name = document.getElementById('whatsapp_name').value;
            const message = document.getElementById('whatsapp_message').value;
            const phoneNumber = "5551995214397"; 
            
            if(!name) { alert('Por favor, diga seu nome.'); return; }

            const text = `Olá! Meu nome é *${name}*.\n\n${message}`;
            const encodedText = encodeURIComponent(text);
            const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodedText}`;
            window.open(whatsappUrl, '_blank');
        }

        // Função Menu Mobile
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', toggleMenu);

        function toggleMenu() {
            menu.classList.toggle('opacity-0');
            menu.classList.toggle('pointer-events-none');
            
            // Troca ícone se quiser (opcional)
            const icon = btn.querySelector('svg path');
            if (menu.classList.contains('opacity-0')) {
                 // Ícone Hambúrguer
                 icon.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
            } else {
                 // Ícone X
                 icon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
            }
        }
    </script>
</body>
</html> -->