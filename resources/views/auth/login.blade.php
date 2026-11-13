<!DOCTYPE html>
<html lang="it">

<x-head />

<body class="min-h-screen bg-slate-100 font-sans text-slate-800">
    <x-navbar />
    <main class="mx-auto">
        <section class="w-full flex items-center gap-6">
            <div class="bg-neutral-primary bg-slate-900 max-w-6xl lg:max-w-2xl">
                <div class="py-8 px-4 mx-auto max-w-screen-2xl ml-12 lg:py-16">
                    <h1 class="mb-6 text-4xl font-bold tracking-tighter text-white text-heading md:text-5xl lg:text-6xl">
                        Threat
                        <span class="text-blue-400">Scope</span>
                    </h1>
                    <div class="w-1/2">
                        <h5 class="mb-8 text-base font-normal text-white text-body font-bold md:text-xl break-word">La
                            sicurezza inizia
                            da un indirizzo IP.</h5>
                        <p class="mb-8 text-base font-normal text-gray-500 text-body md:text-xl break-word">Accedi per
                            consultare le tue ricerche, salvare le analisi e gestire la tua area personale.</p>
                    </div>
                </div>
                <div class="">
                    <img src="{{ Vite::asset('resources/images/rete.jpg') }}" alt="mondo connesso">
                </div>
            </div>
            <div class="bg-neutral-primary flex">
                <div class="bg-neutral-primary ml-12">
                    <p class="font-bold text-3xl">Accedi al tuo account</p>
                    <p class="text-gray-500 text-2xl">Inserisci le tue credenziali per continuare</p>
                    <form action="{{ route('login') }}" method="POST">
                        <div class="grid gap-6 mb-6 md:grid-cols-1 mt-12">
                            @csrf
                            <div class="mb-6">
                                <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Email
                                    address</label>
                                <input type="email" id="email"
                                    class="bg-neutral-secondary-medium border border-default-medium rounded-2xl text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs"
                                    placeholder="john.doe@company.com" name="email" autocomplete="email" required>
                            </div>
                            <div class="mb-6">
                                <label for="password"
                                    class="block mb-2.5 text-sm font-medium text-heading">Password</label>
                                <input type="password" id="password" name="password" autocomplete="current-password"
                                    class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-2xl rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs"
                                    placeholder="•••••••••"required>
                            </div>
                            <div class="flex items-start mb-6">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" name="remember" value="1"
                                        class="w-4 h-4 border border-default-medium rounded-xs bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft" />
                                </div>
                                <label for="remember" class="ms-2 text-sm font-medium text-heading">Ricordami</label>
                            </div>
                            <button type="submit"
                                class="rounded-lg bg-brand border border-slate-600 px-4 py-2 text-sm text-white font-medium transition hover:bg-slate-700">Accedi</button>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <x-footer />
    </main>
</body>

</html>
