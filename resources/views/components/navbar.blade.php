<header class="border-b border-slate-700 bg-slate-900 text-white">
    <div class="mx-auto flex flex-wrap max-w-7xl items-center justify-between px-6 py-4">

        <a href="/" class="text-2xl font-bold tracking-tight">
            Threat<span class="text-blue-400">Scope</span>
        </a>

        <button data-collapse-toggle="mobile-menu" type="button"
            class="inline-flex items-center p-2 ml-auto text-sm text-gray-400 rounded-lg md:hidden hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-gray-600"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Apri menu principale</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>

        <div class="hidden md:flex md:w-auto items-center gap-2" id="desktop-menu">
            @guest
                <a class="rounded-lg border border-slate-600 px-4 py-2 text-sm font-medium transition hover:bg-slate-700"
                    href="{{ url('/login') }}">
                    Login
                </a>
                <a class="rounded-lg bg-blue-600 border border-blue-500 px-4 py-2 text-sm font-medium transition hover:bg-blue-700"
                    href="{{ url('/register') }}">
                    Registrati
                </a>
            @endguest

            @auth
                <a class="rounded-lg border border-slate-600 px-4 py-2 text-sm font-medium transition hover:bg-slate-700"
                    href="{{ url('/dashboard') }}">
                    Dashboard
                </a>
                <a class="rounded-lg border border-slate-600 px-4 py-2 text-sm font-medium transition hover:bg-slate-700"
                    href="{{ url('/history') }}">
                    Storico
                </a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit"
                        class="rounded-lg border border-blue-500 px-4 py-2 text-sm font-medium transition hover:bg-blue-700 bg-blue-600">
                        Esci
                    </button>
                </form>
            @endauth
        </div>

        <div class="hidden w-full md:hidden mt-4 pt-4 border-t border-slate-800" id="mobile-menu">
            <div class="flex flex-col space-y-2">
                @guest
                    <a class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-200 hover:bg-slate-800"
                        href="{{ url('/login') }}">
                        Login
                    </a>
                    <a class="block rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700"
                        href="{{ url('/register') }}">
                        Registrati
                    </a>
                @endguest

                @auth
                    <a class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-200 hover:bg-slate-800"
                        href="{{ url('/dashboard') }}">
                        Dashboard
                    </a>
                    <a class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-200 hover:bg-slate-800"
                        href="{{ url('/history') }}">
                        Storico
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="w-full text-left rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">
                            Esci
                        </button>
                    </form>
                @endauth
            </div>
        </div>

    </div>
</header>
