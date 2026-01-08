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

                    {{-- TOGGLE DE DESTAQUE --}}
                    <div class="flex items-center gap-4 bg-tertiary/20 p-4 rounded-2xl border border-tertiary">
                        
                        <div class="relative inline-block w-12 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input type="checkbox" name="is_featured" id="is_featured" value="1"
                                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer peer checked:right-0 checked:border-primary"
                                {{ old('is_featured', $event->is_featured ?? false) ? 'checked' : '' }}
                            />
                            <label for="is_featured" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer peer-checked:bg-primary/50"></label>
                        </div>
                        
                        <div>
                            <label for="is_featured" class="block text-[10px] uppercase font-bold tracking-[0.2em] text-primary cursor-pointer">
                                Evento em Destaque?
                            </label>
                            <p class="text-xs text-gray-500">Se marcado, este evento terá destaque visual na página inicial.</p>
                        </div>
                    </div>

                    <style>
                        .toggle-checkbox:checked {
                            right: 0;
                            border-color: #D2AD53; 
                        }
                        .toggle-checkbox:checked + .toggle-label {
                            background-color: #D2AD53; 
                        }
                        .toggle-checkbox {
                            right: calc(100% - 1.5rem); 
                            transition: all 0.3s;
                        }
                    </style>

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

                        {{-- Link Sympla --}}
                        <div>
                            <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">
                                Link do Ingresso (Sympla)
                            </label>
                            <input type="url" name="link_sympla" 
                                class="w-full border-tertiary rounded-2xl focus:ring-primary focus:border-primary p-4 bg-tertiary/10 border-0"
                                placeholder="https://www.sympla.com.br/evento/..."
                                value="{{ old('link_sympla') }}">
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