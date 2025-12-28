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

        {{-- EMAIL --}}
        <div>
            <x-input-label
                for="email"
                :value="__('Email')"
                class="text-[15px] uppercase tracking-[0.3em]
                       text-secondary ml-4 mb-2 font-sans"
            />

            <x-text-input
                id="email"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                autocomplete="username"
                class="w-full rounded-full border
                       bg-warmbg px-6 py-4
                       font-sans text-gray-800 shadow-sm"
            />

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2 text-xs italic text-secondary"
            />
        </div>

        {{-- SENHA --}}
        <div>
            <x-input-label
                for="password"
                :value="__('Senha')"
                class="text-[15px] uppercase tracking-[0.3em]
                       text-secondary ml-4 mb-2 font-sans"
            />

            <x-text-input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                class="w-full rounded-full border
                       bg-warmbg px-6 py-4
                       font-sans text-gray-800 shadow-sm"
            />

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

            @if (Route::has('password.request'))
                <a
                    href="{{ route('password.request') }}"
                    class="text-[11px] uppercase tracking-widest
                           transition font-sans"
                >
                    Esqueci a senha
                </a>
            @endif
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

</x-guest-layout>
