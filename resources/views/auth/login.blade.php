<x-guest-layout>

    {{-- STATUS DE SESSÃO --}}
    <x-auth-session-status
        class="mb-8 text-center text-sm italic text-secondary font-sans"
        :status="session('status')"
    />

    {{-- TÍTULO --}}
    <div class="flex justify-center mb-10">
        <div class="px-12 py-6 shadow-sm
                    border-top-width:4px border-bottom-width:4px"
             style="background-color: rgba(255, 255, 255, 1);
                    border-top: 4px solid #D2AD53;
                    border-bottom: 4px solid #D2AD53;">
            <h1 class="text-3xl md:text-4xl font-serif italic text-center"
                style="color:#1f2937;">
                Área restrita
            </h1>
        </div>
    </div>


    <form method="POST" action="{{ route('login') }}" class="space-y-7">

        @csrf

        {{-- USERNAME --}}
        <div>
            <x-input-label
                for="Username"
                :value="__('Usuário')"
                class="text-[15px] uppercase tracking-[0.3em]
                       text-secondary ml-4 mb-2 font-sans"
            />

            <x-text-input
                id="username"
                type="text"
                name="username"
                :value="old('username')"
                required
                autofocus
                autocomplete="username"
                class="w-full rounded-full border
                       bg-warmbg px-6 py-4
                       font-sans text-gray-800 shadow-sm"
            />

            <x-input-error
                :messages="$errors->get('username')"
                class="mt-2 text-xs italic text-secondary"
            />
        </div>

        {{-- SENHA --}}
        <div x-data="{ show: false }" class="relative">
            <x-input-label
                for="password"
                :value="__('Senha')"
                class="text-[15px] uppercase tracking-[0.3em]
                    text-secondary ml-4 mb-2 font-sans"
            />

            <input
                :type="show ? 'text' : 'password'"
                name="password"
                id="password"
                required
                autocomplete="current-password"
                class="w-full rounded-full border
                    bg-warmbg px-6 py-4 pr-14
                    font-sans text-gray-800 shadow-sm"
            />

            {{-- BOTÃO DO OLHO --}}
            <button
                type="button"
                @click="show = !show"
                class="absolute right-5 top-[53%]
                    text-gray-400 hover:text-primary
                    transition"
            >
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="w-5 h-5">

                    <path x-show="!show"
                        d="M1.5 12s4.5-7 10.5-7 10.5 7 10.5 7-4.5 7-10.5 7S1.5 12 1.5 12zm10.5 3.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z"/>

                    <path x-show="show"
                        d="M2 4.3l1.4-1.4L20.7 20l-1.4 1.4-3.2-3.2A11.6 11.6 0 0112 19c-6 0-10.5-7-10.5-7a20.7 20.7 0 014.7-5.5L2 4.3zm6.5 6.5a3.5 3.5 0 004.9 4.9l-4.9-4.9zm3.5-5.8c6 0 10.5 7 10.5 7a20.3 20.3 0 01-4 4.9l-3.1-3.1a3.5 3.5 0 00-4.3-4.3L7.8 6.6A11.7 11.7 0 0112 5z"/>

                </svg>
            </button>

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2 text-xs italic text-secondary"
            />
        </div>

        {{-- LEMBRAR --}}
        <div class="flex items-center justify-between pt-2">

            <label for="remember_me" class="inline-flex items-center gap-3">
                <input
                    id="remember_me"
                    type="checkbox"
                    name="remember"
                    class="rounded-full"
                >
                <span class="text-sm italic text-secondary font-sans">
                    Lembrar de mim
                </span>
            </label>

            <!-- @if (Route::has('password.request'))
                <a
                    href="{{ route('password.request') }}"
                    class="text-[11px] uppercase tracking-widest
                           transition font-sans"
                >
                    Esqueci a senha
                </a>
            @endif -->
        </div>

        {{-- BOTÃO DE ENTRAR --}}
        <div class="pt-8">
            <x-primary-button
                class="w-full justify-center rounded-full
                       px-12 py-4 text-xs uppercase
                       tracking-[0.35em] font-bold font-sans
                       text-[15px]
                       shadow-xl transition"
                style="background-color:#D2AD53;
                       color:white;
                       box-shadow: 0 20px 25px -5px rgba(210,173,83,0.35);"
            >
                Entrar
            </x-primary-button>
        </div>
    </form>

    <script>
    function togglePassword(button) {
        const input = document.getElementById(button.dataset.target);

        if (input.type === 'password') {
            input.type = 'text';
            button.innerText = '🙈';
        } else {
            input.type = 'password';
            button.innerText = '👁️';
        }
    }
    </script>


</x-guest-layout>
