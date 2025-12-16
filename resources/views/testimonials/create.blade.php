<x-app-layout>
    {{-- Título da Página no Header do Painel --}}
    <x-slot name="header">
        <h2 class="font-header text-3xl text-primary leading-tight italic">
            Novo Relato de Prosperidade — Cadastrar Testemunho
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 shadow-xl rounded-[40px] border border-tertiary">
                
                {{-- O enctype é OBRIGATÓRIO pro envio de imagens --}}
                <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                        {{-- Upload da Foto --}}
                        <div>
                            <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-3">Foto da Cliente</label>
                            <div class="flex items-center justify-center w-full">
                                <label class="flex flex-col items-center justify-center w-full h-32 border-2 border-tertiary border-dashed rounded-[30px] cursor-pointer bg-tertiary/5 hover:bg-tertiary/10 transition">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-8 h-8 text-primary/50 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                        <p class="text-[10px] text-secondary uppercase font-bold tracking-widest">Selecionar Foto</p>
                                    </div>
                                    <input type="file" name="photo" class="hidden" accept="image/*" />
                                </label>
                            </div>
                        </div>

                        {{-- Avaliação  --}}
                        <div>
                            <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-3">Avaliação (Estrelas)</label>
                            <select name="rating" required 
                                class="w-full border-0 bg-tertiary/10 rounded-2xl p-4 focus:ring-2 focus:ring-primary/20 text-gray-700 font-body">
                                <option value="5">5 Estrelas (Excelente)</option>
                                <option value="4">4 Estrelas (Muito Bom)</option>
                                <option value="3">3 Estrelas (Bom)</option>
                                <option value="2">2 Estrelas (Regular)</option>
                                <option value="1">1 Estrela (Insatisfeito)</option>
                            </select>
                        </div>
                    </div>

                    {{-- Nome da Cliente --}}
                    <div>
                        <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">Nome Completo da Cliente</label>
                        <input type="text" name="client_name" required 
                            class="w-full border-0 bg-tertiary/10 rounded-2xl p-4 focus:ring-2 focus:ring-primary/20 font-body text-gray-800"
                            placeholder="Ex: Maria Silva">
                    </div>

                    {{-- Depoimento --}}
                    <div>
                        <label class="block text-[10px] uppercase font-bold tracking-[0.2em] text-secondary mb-2">O Depoimento</label>
                        <textarea name="content" rows="5" required 
                            class="w-full border-0 bg-tertiary/10 rounded-[30px] p-5 focus:ring-2 focus:ring-primary/20 font-body text-gray-700 leading-relaxed"
                            placeholder="Escreva aqui o relato da transformação..."></textarea>
                    </div>

                    {{-- Botões de Ação --}}
                    <div class="flex justify-end items-center gap-8 pt-6">
                        <a href="{{ route('testimonials.index') }}" class="text-[10px] uppercase font-bold text-gray-400 hover:text-gray-600 transition tracking-widest">
                            Cancelar
                        </a>
                        <button type="submit" class="bg-primary text-white px-12 py-4 rounded-full text-[10px] uppercase font-bold tracking-[0.2em] shadow-xl shadow-primary/20 hover:opacity-95 transition transform hover:scale-105">
                            Publicar Testemunho
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>