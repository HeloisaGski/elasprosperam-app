<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-3xl text-primary leading-tight italic">
            Novo Movimento — Cadastrar Evento
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 shadow-xl rounded-[40px] border border-tertiary">
                
                <form action="{{ route('events.store') }}" method="POST" class="space-y-8">
                    @csrf

                    {{-- Título --}}
                    <div>
                        <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">Título do Evento</label>
                        <input type="text" name="title" required 
                            class="w-full border-tertiary rounded-2xl focus:ring-primary focus:border-primary p-4 bg-tertiary/10 border-0"
                            placeholder="Ex: Workshop Elas Prosperam Experience">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        {{-- Data e Hora --}}
                        <div>
                            <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">Data e Hora</label>
                            <input type="datetime-local" name="date" required 
                                class="w-full border-tertiary rounded-2xl focus:ring-primary focus:border-primary p-4 bg-tertiary/10 border-0">
                        </div>

                        {{-- Localização --}}
                        <div>
                            <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">Localização</label>
                            <input type="text" name="location" required 
                                class="w-full border-tertiary rounded-2xl focus:ring-primary focus:border-primary p-4 bg-tertiary/10 border-0"
                                placeholder="Ex: Online via Zoom ou Endereço">
                        </div>
                    </div>

                    {{-- Descrição --}}
                    <div>
                        <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">Breve Descrição</label>
                        <textarea name="description" rows="4" required 
                            class="w-full border-tertiary rounded-2xl focus:ring-primary focus:border-primary p-4 bg-tertiary/10 border-0"
                            placeholder="Descreva o que acontecerá neste encontro..."></textarea>
                    </div>

                    {{-- Botões --}}
                    <div class="flex justify-end items-center gap-6 pt-6">
                        <a href="{{ route('events.index') }}" class="text-[10px] uppercase font-bold text-gray-400 hover:text-gray-600 transition">
                            Cancelar
                        </a>
                        <button type="submit" class="bg-primary text-white px-12 py-4 rounded-full text-[10px] uppercase font-bold tracking-widest shadow-xl shadow-primary/20 hover:opacity-90 transition">
                            Publicar Evento
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>