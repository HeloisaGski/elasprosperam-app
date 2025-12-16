<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-3xl text-primary leading-tight italic">
            Olá, {{ Auth::user()->name }}! Bem-vinda ao seu painel.
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="bg-white p-8 rounded-[40px] shadow-sm border border-primary/10 hover:shadow-xl transition duration-500 flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-sans font-bold text-gray-900 mb-4">Eventos</h3>
                        <p class="text-gray-500 mb-8 text-sm leading-relaxed">Publique novas datas, workshops ou palestras diretamente na página inicial.</p>
                    </div>
                    <a href="{{ route('events.index') }}" class="inline-block text-center bg-primary text-white px-8 py-4 rounded-full text-[10px] uppercase font-bold tracking-widest hover:opacity-90 transition">
                        Gerenciar Eventos
                    </a>
                </div>

                <div class="bg-white p-8 rounded-[40px] shadow-sm border border-primary/10 hover:shadow-xl transition duration-500 flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-sans font-bold text-gray-900 mb-4">Testemunhos</h3>
                        <p class="text-gray-500 mb-8 text-sm leading-relaxed">Adicione depoimentos reais das clientes para gerar autoridade no seu site.</p>
                    </div>
                    <a href="{{ route('testimonials.index') }}" class="inline-block text-center bg-secondary text-white px-8 py-4 rounded-full text-[10px] uppercase font-bold tracking-widest hover:opacity-90 transition">
                        Gerenciar Depoimentos
                    </a>
                </div>

                <div class="bg-white p-8 rounded-[40px] shadow-sm border border-primary/10 hover:shadow-xl transition duration-500 flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-sans font-bold text-gray-900 mb-4">Ver Site</h3>
                        <p class="text-gray-500 mb-8 text-sm leading-relaxed">Confira como as mudanças estão sendo visualizadas pelas suas visitantes.</p>
                    </div>
                    <a href="{{ route('home') }}" target="_blank" class="inline-block text-center border-2 border-primary text-primary px-8 py-3.5 rounded-full text-[10px] uppercase font-bold tracking-widest hover:bg-primary hover:text-white transition">
                        Abrir Landing Page
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>