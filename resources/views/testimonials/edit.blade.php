<x-app-layout>
    <x-slot name="header">
        <h2 class="font-header text-3xl text-primary italic font-bold">
            Editar Testemunho — {{ $testimonial->client_name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 shadow-xl rounded-[40px] border border-tertiary">
                
                <form action="{{ route('testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-end">
                        {{-- Foto Atual e Upload --}}
                        <div class="flex items-center gap-6">
                            <div class="w-20 h-20 rounded-full overflow-hidden border-2 border-primary/20 shrink-0">
                                <img src="{{ $testimonial->photo_path ? asset('storage/' . $testimonial->photo_path) : asset('img/avatar-placeholder.jpg') }}" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">Alterar Foto</label>
                                <input type="file" name="photo" class="text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-[10px] file:font-bold file:bg-primary/10 file:text-primary">
                            </div>
                        </div>

                        {{-- Avaliação (Estrelas) --}}
                        <div>
                            <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">Avaliação (1-5)</label>
                            <select name="rating" class="w-full border-0 bg-tertiary/10 rounded-2xl p-4 focus:ring-primary">
                                @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}" {{ $testimonial->rating == $i ? 'selected' : '' }}>{{ $i }} Estrela{{ $i > 1 ? 's' : '' }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    {{-- Nome da Cliente --}}
                    <div>
                        <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">Nome da Cliente</label>
                        <input type="text" name="client_name" value="{{ old('client_name', $testimonial->client_name) }}" required 
                            class="w-full border-0 bg-tertiary/10 rounded-2xl p-4 focus:ring-primary">
                    </div>

                    {{-- Depoimento --}}
                    <div>
                        <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">O que ela escreveu?</label>
                        <textarea name="content" rows="4" required 
                            class="w-full border-0 bg-tertiary/10 rounded-2xl p-4 focus:ring-primary">{{ old('content', $testimonial->content) }}</textarea>
                    </div>

                    {{-- Botões --}}
                    <div class="flex justify-end items-center gap-6 pt-6">
                        <a href="{{ route('testimonials.index') }}" class="text-[10px] uppercase font-bold text-gray-400 hover:text-gray-600 transition">
                            Cancelar
                        </a>
                        <button type="submit" class="bg-primary text-white px-12 py-4 rounded-full text-[10px] uppercase font-bold tracking-widest shadow-xl shadow-primary/20 hover:opacity-90 transition">
                            Atualizar Testemunho
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>