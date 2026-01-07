<x-app-layout>
    <x-slot name="header">
        <h2 class="font-header text-3xl text-primary italic font-bold">
            Gerenciar Eventos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Novo Evento --}}
            <div class="flex justify-end mb-8">
                <a href="{{ route('events.create') }}" class="bg-primary text-white px-8 py-3 rounded-full text-[10px] uppercase font-bold tracking-widest shadow-lg hover:opacity-90 transition">
                    Novo Evento
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm rounded-[40px] border border-tertiary">
                <table class="min-w-full divide-y divide-tertiary/20">
                    <thead class="bg-tertiary/10">
                        <tr>
                            <th class="px-6 py-4 text-left text-[10px] font-bold uppercase tracking-widest text-secondary">Evento</th>
                            <th class="px-6 py-4 text-left text-[10px] font-bold uppercase tracking-widest text-secondary">Data</th>
                            <th class="px-6 py-4 text-right text-[10px] font-bold uppercase tracking-widest text-secondary">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-tertiary/10">
                        @forelse($events as $event)
                        <tr class="hover:bg-tertiary/5 transition">
                            <td class="px-6 py-4 font-header text-xl text-gray-900">{{ $event->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500 font-body">{{ $event->date->format('d/m/Y H:i') }}</td>
                            <td class="px-6 py-4 text-right space-x-4">
                                <a href="{{ route('events.edit', $event) }}" class="text-primary font-bold text-[10px] uppercase tracking-widest hover:underline">Editar</a>
                                <form action="{{ route('events.destroy', $event) }}" method="POST" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-400 font-bold text-[10px] uppercase tracking-widest hover:underline" onclick="return confirm('Excluir este evento?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="px-6 py-20 text-center text-gray-400 italic font-body">
                                Nenhum evento cadastrado ainda.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>