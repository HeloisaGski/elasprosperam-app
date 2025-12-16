<x-app-layout>
    <x-slot name="header">
        <h2 class="font-header text-3xl text-primary italic font-bold">
            Gerenciar Testemunhos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="flex justify-end mb-8">
                <a href="{{ route('testimonials.create') }}" class="bg-primary text-white px-8 py-3 rounded-full text-[10px] uppercase font-bold tracking-widest shadow-lg hover:opacity-90 transition">
                    + Novo Testemunho
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm rounded-[40px] border border-tertiary">
                <table class="min-w-full divide-y divide-tertiary/20">
                    <thead class="bg-tertiary/10">
                        <tr>
                            <th class="px-6 py-4 text-left text-[10px] font-bold uppercase tracking-widest text-secondary">Cliente</th>
                            <th class="px-6 py-4 text-left text-[10px] font-bold uppercase tracking-widest text-secondary">Depoimento</th>
                            <th class="px-6 py-4 text-left text-[10px] font-bold uppercase tracking-widest text-secondary">Status</th>
                            <th class="px-6 py-4 text-right text-[10px] font-bold uppercase tracking-widest text-secondary">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-tertiary/10">
                        @forelse($testimonials as $testimonial)
                        <tr class="hover:bg-tertiary/5 transition">
                            <td class="px-6 py-4 flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full overflow-hidden bg-tertiary/30">
                                    <img src="{{ $testimonial->photo_path ? asset('storage/' . $testimonial->photo_path) : asset('img/avatar-placeholder.jpg') }}" class="w-full h-full object-cover">
                                </div>
                                <span class="font-header text-lg text-gray-900">{{ $testimonial->client_name }}</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 font-body">
                                <span class="line-clamp-1">{{ $testimonial->content }}</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $testimonial->is_active ? 'Ativo' : 'Inativo' }}
                            </td>
                            <td class="px-6 py-4 text-right space-x-4">
                                <a href="{{ route('testimonials.edit', $testimonial) }}" class="text-primary font-bold text-[10px] uppercase tracking-widest hover:underline">Editar</a>
                                <form action="{{ route('testimonials.destroy', $testimonial) }}" method="POST" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-400 font-bold text-[10px] uppercase tracking-widest hover:underline" onclick="return confirm('Excluir este testemunho?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-20 text-center text-gray-400 italic font-body">
                                Nenhum testemunho registrado ainda.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>