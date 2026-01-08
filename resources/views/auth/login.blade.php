<x-guest-layout>

    {{-- STATUS DE SESSÃO --}}
    <x-auth-session-status
        class="mb-8 text-center text-sm italic text-secondary font-sans"
        :status="session('status')"
    />

    {{-- VOLTAR PRA A LANDING PAGE --}}
    <div class="mb-6">
        <a
            href="{{ url('/') }}"
            class="inline-flex items-center text-secondary hover:text-primary transition"
            aria-label="Voltar para a página inicial"
        >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            class="w-10 h-15"
        >
            <path
                d="M19 12a1 1 0 0 1-1 1H8.414l1.293 1.293a1 1 0 0 1-1.414 1.414l-3-3a1 1 0 0 1 0-1.414l3-3a1 1 0 0 1 1.414 1.414L8.414 11H18a1 1 0 0 1 1 1z"
                fill="#f97c4b"
            />
        </svg>
        </a>
    </div>


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

            <input
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
                <svg
                    x-show="!show"
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                    stroke-linejoin="round"
                    stroke-miterlimit="2"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6"
                    fill="currentColor"
                >
                    <path d="m17.069 6.546 2.684-2.359c.143-.125.32-.187.497-.187.418 0 .75.34.75.75 0 .207-.086.414-.254.562l-16.5 14.501c-.142.126-.319.187-.496.187-.415 0-.75-.334-.75-.75 0-.207.086-.414.253-.562l2.438-2.143c-1.414-1.132-2.627-2.552-3.547-4.028-.096-.159-.144-.338-.144-.517s.049-.358.145-.517c2.111-3.39 5.775-6.483 9.853-6.483 1.815 0 3.536.593 5.071 1.546zm2.319 1.83c.966.943 1.803 2.014 2.474 3.117.092.156.138.332.138.507s-.046.351-.138.507c-2.068 3.403-5.721 6.493-9.864 6.493-1.297 0-2.553-.313-3.729-.849l1.247-1.096c.795.285 1.626.445 2.482.445 3.516 0 6.576-2.622 8.413-5.5-.595-.932-1.318-1.838-2.145-2.637zm-3.434 3.019c.03.197.046.399.046.605 0 2.208-1.792 4-4 4-.384 0-.756-.054-1.107-.156l1.58-1.389c.895-.171 1.621-.821 1.901-1.671zm-.058-3.818c-1.197-.67-2.512-1.077-3.898-1.077-3.465 0-6.533 2.632-8.404 5.5.853 1.308 1.955 2.567 3.231 3.549l1.728-1.519c-.351-.595-.553-1.289-.553-2.03 0-2.208 1.792-4 4-4 .925 0 1.777.315 2.455.843zm-2.6 2.285c-.378-.23-.822-.362-1.296-.362-1.38 0-2.5 1.12-2.5 2.5 0 .36.076.701.213 1.011z"/>
                </svg>

                <svg
                    x-show="show"
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                    stroke-linejoin="round"
                    stroke-miterlimit="2"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6"
                    fill="currentColor"
                >
                    <path d="m11.998 5c-4.078 0-7.742 3.093-9.853 6.483-.096.159-.145.338-.145.517s.048.358.144.517c2.112 3.39 5.776 6.483 9.854 6.483 4.143 0 7.796-3.09 9.864-6.493.092-.156.138-.332.138-.507s-.046-.351-.138-.507c-2.068-3.403-5.721-6.493-9.864-6.493zm8.413 7c-1.837 2.878-4.897 5.5-8.413 5.5-3.465 0-6.532-2.632-8.404-5.5 1.871-2.868 4.939-5.5 8.404-5.5 3.518 0 6.579 2.624 8.413 5.5zm-8.411-4c2.208 0 4 1.792 4 4s-1.792 4-4 4-4-1.792-4-4 1.792-4 4-4zm0 1.5c-1.38 0-2.5 1.12-2.5 2.5s1.12 2.5 2.5 2.5 2.5-1.12 2.5-2.5-1.12-2.5-2.5-2.5z"/>
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
</x-guest-layout>