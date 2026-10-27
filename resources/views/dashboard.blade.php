<!DOCTYPE html>
<html lang="it">

<x-head />

<body class="min-h-screen bg-slate-100 font-sans text-slate-800">

    <x-navbar />

    <main class="mx-auto max-w-7xl px-6 py-10">
        <section class="mb-8">
            <p class="mb-2 text-sm font-semibold uppercase tracking-widest text-blue-600">
                Threat Intelligence
            </p>

            <h1 class="text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">
                La tua dashboard
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

        <x-footer />
    </main>

</body>

</html>
