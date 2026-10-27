<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | ThreatScope</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-100 font-sans text-slate-800">

    <header class="border-b border-slate-200 bg-slate-900 text-white">
        <div class="mx-auto flex max-w-7xl items-center px-6 py-4">
            <a href="/dashboard" class="text-2xl font-bold tracking-tight">
                Threat<span class="text-blue-400">Scope</span>
            </a>
            <div class="ml-auto flex items-center gap-2">
                <a type="button"
                    class="rounded-lg border border-slate-600 px-4 py-2 text-sm font-medium transition hover:bg-slate-700"
                    href="{{ url('/login') }}">
                    Login
                </a>
                @auth

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

    <main class="mx-auto max-w-7xl px-6 py-10">
        <section class="mb-8">
            <p class="mb-2 text-sm font-semibold uppercase tracking-widest text-blue-600">
                Threat Intelligence
            </p>

            <h1 class="text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">
                Benvenuto
            </h1>

            <p class="mt-3 max-w-2xl text-slate-600">
                Analizza la reputazione degli indirizzi IP e consulta i risultati
                delle tue ricerche.
            </p>
        </section>

        <section class="grid gap-6 md:grid-cols-2">

            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <div class="mb-4 flex size-12 items-center justify-center rounded-xl bg-blue-100 text-xl text-blue-700">
                    ⌕
                </div>

                <h2 class="text-xl font-semibold text-slate-900">Ricerca IP</h2>

                <p class="mt-2 text-sm leading-6 text-slate-600">
                    Inserisci un indirizzo IP e consulta le informazioni restituite da AbuseIPDB.
                </p>

                <form action="{{ route('threats.search') }}" method="GET" class="mt-5">
                    <label for="ip" class="mb-2 block text-sm font-medium text-slate-700">
                        Indirizzo IP
                    </label>

                    <input type="text" id="ip" name="ip" placeholder="Es. 8.8.8.8" required
                        class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                    <button type="submit"
                        class="mt-4 w-full rounded-lg bg-blue-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-blue-700">
                        Analizza IP →
                    </button>
                </form>
            </div>

            <a href="{{ url('/history') }}"
                class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-blue-300 hover:shadow-md">
                <div
                    class="mb-4 flex size-12 items-center justify-center rounded-xl bg-violet-100 text-xl text-violet-700">
                    ◷
                </div>

                <h2 class="text-xl font-semibold text-slate-900">
                    Cronologia
                </h2>

                <p class="mt-2 text-sm leading-6 text-slate-600">
                    Rivedi le tue ricerche e i risultati di reputazione
                    salvati nel database.
                </p>

                <p class="mt-5 text-sm font-semibold text-violet-600">
                    Consulta la cronologia →
                </p>
            </a>
        </section>

        <footer class="mt-12 border-t border-slate-200 pt-5 text-sm text-slate-500">
            ThreatScope · Piattaforma di Threat Intelligence
        </footer>
    </main>

</body>

</html>
