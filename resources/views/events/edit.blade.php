<x-app-layout>
    <x-slot name="header">
        <h2 class="font-header text-3xl text-primary italic font-bold">
            Editar Movimento — {{ $event->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 shadow-xl rounded-[40px] border border-tertiary">
                
                {{-- O formulário aponta para a rota 'update' passando o ID do evento --}}
                <form action="{{ route('events.update', $event) }}" method="POST" class="space-y-8">
                    @csrf
                    @method('PUT') 

                    {{-- Título --}}
                    <div>
                        <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">Título do Evento</label>
                        <input type="text" name="title" value="{{ old('title', $event->title) }}" required 
                            class="w-full border-tertiary rounded-2xl focus:ring-primary focus:border-primary p-4 bg-tertiary/10 border-0">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        {{-- Data e Hora --}}
                        <div>
                            <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">Data e Hora</label>
                            <input type="datetime-local" name="date" 
                                value="{{ old('date', $event->date ? $event->date->format('Y-m-d\TH:i') : '') }}" required 
                                class="w-full border-tertiary rounded-2xl focus:ring-primary focus:border-primary p-4 bg-tertiary/10 border-0">
                        </div>

                        {{-- Localização --}}
                        <div>
                            <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">Localização</label>
                            <input type="text" name="location" value="{{ old('location', $event->location) }}" required 
                                class="w-full border-tertiary rounded-2xl focus:ring-primary focus:border-primary p-4 bg-tertiary/10 border-0">
                        </div>
                    </div>

                    <div>
                        {{-- NOVO CAMPO: Link Sympla --}}
                    <div>
                        <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">
                            Link do Ingresso (Sympla)
                        </label>
                        <input type="url" name="link_sympla" 
                            class="w-full border-tertiary rounded-2xl focus:ring-primary focus:border-primary p-4 bg-tertiary/10 border-0"
                            placeholder="https://www.sympla.com.br/evento/..."
                            value="{{ old('link_sympla', $event->link_sympla) }}">
                    </div>       
                    {{-- Descrição --}}
                    <div>
                        <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">Breve Descrição</label>
                        <textarea name="description" rows="4" required 
                            class="w-full border-tertiary rounded-2xl focus:ring-primary focus:border-primary p-4 bg-tertiary/10 border-0">{{ old('description', $event->description) }}</textarea>
                    </div>

                    {{-- Botões --}}
                    <div class="flex justify-end items-center gap-6 pt-6">
                        <a href="{{ route('events.index') }}" class="text-[10px] uppercase font-bold text-gray-400 hover:text-gray-600 transition">
                            Cancelar
                        </a>
                        <button type="submit" class="bg-primary text-white px-12 py-4 rounded-full text-[10px] uppercase font-bold tracking-widest shadow-xl shadow-primary/20 hover:opacity-90 transition">
                            Salvar Alterações
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>