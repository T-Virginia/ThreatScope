<header class="border-b border-slate-200 bg-slate-900 text-white">
    <div class="mx-auto flex max-w-7xl items-center px-6 py-4">
        <a href="/dashboard" class="text-2xl font-bold tracking-tight">
            Threat<span class="text-blue-400">Scope</span>
        </a>
        <div class="ml-auto flex items-center gap-2">

            @guest
                <a type="button"
                    class="rounded-lg border border-slate-600 px-4 py-2 text-sm font-medium transition hover:bg-slate-700"
                    href="{{ url('/login') }}">
                    Login
                </a>
                <a type="button"
                    class="rounded-lg bg-brand border border-slate-600 px-4 py-2 text-sm font-medium transition hover:bg-slate-700"
                    href="{{ url('/register') }}">
                    Registrati
                </a>
            @endguest

            @auth
                <a type="button"
                    class="rounded-lg border border-slate-600 px-4 py-2 text-sm font-medium transition hover:bg-slate-700"
                    href="{{ url('/dashboard') }}">
                    Dahboard
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="rounded-lg border border-slate-600 px-4 py-2 text-sm font-medium transition hover:bg-slate-700">
                        Esci
                    </button>
                </form>
            @endauth

        </div>
    </div>
</header>
