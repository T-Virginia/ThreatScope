<!DOCTYPE html>
<html lang="it">

<x-head />

<body class="min-h-screen bg-slate-100 font-sans text-slate-800">

    <x-navbar />

    <main class="mx-auto">
        <section class="bg-neutral-primary bg-slate-900 flex">
            <div class="py-8 px-4 mx-auto max-w-screen-2xl lg:py-16 ml-12">
                <span
                    class="inline-flex text-white items-center bg-brand-softer border border-brand-subtle text-fg-brand-strong text-xs font-medium px-1.5 py-0.5 rounded-2xl">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.5 11.5 11 13l4-3.5M12 20a16.405 16.405 0 0 1-5.092-5.804A16.694 16.694 0 0 1 5 6.666L12 4l7 2.667a16.695 16.695 0 0 1-1.908 7.529A16.406 16.406 0 0 1 12 20Z" />
                    </svg>
                    Threat Intelligence
                </span>
                <h1 class="mb-6 text-4xl font-bold tracking-tighter text-white text-heading md:text-5xl lg:text-6xl">
                    Analizza gli
                    IP.
                </h1>
                <h1 class="mb-6 text-4xl font-bold tracking-tighter text-white text-heading md:text-5xl lg:text-6xl">
                    Previeni le
                    <span class="text-blue-400">minacce.</span>
                </h1>
                <div class="w-1/2">
                    <p class="mb-8 text-base font-normal text-white text-body md:text-xl break-word">ThreathScope ti
                        aiuta a
                        verifica
                        la
                        reputazione degli indirizzi IP e a individuare potenziali minacce, grazie all'integrazione con
                        AbuselIPDB.</p>
                </div>
            </div>
            <div class="max-w-2xl p-8 mr-12">
                <img src="{{ Vite::asset('resources/images/rete.jpg') }}" alt="mondo connesso">
            </div>
        </section>
        <section class="bg-primary">
            <div class="py-8 px-4 mx-auto">
                <div class="text-center">
                    <span
                        class="text-body bg-blue-100 box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-full text-sm px-4 py-2.5 focus:outline-none">
                        Tutto quello che ti serve
                    </span>
                    <h1 class="mb-6 mt-12 text-4xl font-bold tracking-tighter text-heading md:text-5xl lg:text-6xl">
                        Funzionalità principali
                    </h1>
                    <p class="mb-8 text-base text-gray-600 font-normal text-body md:text-xl">
                        Strumenti semplici e potenti per restare al sicuro online.</p>
                </div>
            </div>
            {{--     gruppo card --}}
            <div class="flex flex-wrap justify-center gap-12 mx-auto my-auto max-w-full" role="group">
                <div class="bg-[#FFFF] block max-w-sm p-6 border border-gray-300 rounded-2xl shadow-xs">
                    <span
                        class="inline-flex items-center bg-blue-200 text-fg-brand-strong text-xs font-medium px-1.5 py-0.5 rounded-2xl">
                        <svg class="w-[24px] h-[24px] text-blue-600" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                        </svg>
                    </span>
                    <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">Ricerca IP
                    </h5>
                    <p class="text-body mb-6 text-gray-600">Inserisci un indirizzo IP e consulta la sua reputazione su
                        AbuselIPDB.</p>
                    <x-arrow_button page="/dashboard" />
                </div>
                <div class="bg-[#FFFF] block max-w-sm p-6 border border-gray-300 rounded-2xl shadow-xs">
                    <span
                        class="inline-flex text-green items-center bg-emerald-200 text-fg-brand-strong text-xs font-medium px-1.5 py-0.5 rounded-2xl">
                        <svg class="w-6 h-6 text-green" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.5 11.5 11 13l4-3.5M12 20a16.405 16.405 0 0 1-5.092-5.804A16.694 16.694 0 0 1 5 6.666L12 4l7 2.667a16.695 16.695 0 0 1-1.908 7.529A16.406 16.406 0 0 1 12 20Z" />
                        </svg>
                    </span>
                    <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">Analisi delle minacce
                    </h5>
                    <p class="text-body mb-6 text-gray-600">Scopri se un IP è associato a spam, malware o attività
                        sospette.</p>
                    <x-arrow_button page="/dashboard" />
                </div>
                <div class="bg-[#FFFF] block max-w-sm p-6 border border-gray-300 rounded-2xl shadow-xs">
                    <span
                        class="inline-flex text-green items-center bg-violet-300 text-fg-brand-strong text-xs font-medium px-1.5 py-0.5 rounded-2xl">
                        <svg class="w-6 h-6 text-violet-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </span>
                    <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">Cronologia delle
                        ricerche
                    </h5>
                    <p class="text-body mb-6 text-gray-600">Rivedi le tue ultime analisi e monitora i trend.</p>
                    <x-arrow_button page="/history" />
                </div>
                <div class="bg-[#FFFF] block max-w-sm p-6 border border-gray-300 rounded-2xl shadow-xs">
                    <span
                        class="inline-flex text-green items-center bg-yellow-400 text-fg-brand-strong text-xs font-medium px-1.5 py-0.5 rounded-2xl">
                        <svg class="w-[24px] h-[24px] text-yellow-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 15v4m6-6v6m6-4v4m6-6v6M3 11l6-5 6 5 5.5-5.5" />
                        </svg>

                    </span>
                    <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">Report dettagliati
                    </h5>
                    <p class="text-body mb-6 text-gray-600">Ottieni informazioni complete su paese, provider e livello
                        di rischio.</p>
                    <x-arrow_button page="/history" />
                </div>
            </div>
            {{--     gruppo card --}}
            <div class="bg-blue-100 block p-6 border rounded-2xl shadow-xs mt-8 border-gray-300 flex ml-12 mr-12">
                <div class="border border-blue-100 w-20 rounded-2xl p-6 r-6">
                    <span
                        class="iinline-flex items-center bg-blue-200 text-fg-brand-strong text-xs font-medium py-0.5 rounded-2xl">
                        <svg class="w-6 h-6 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M9.5 11.5 11 13l4-3.5M12 20a16.405 16.405 0 0 1-5.092-5.804A16.694 16.694 0 0 1 5 6.666L12 4l7 2.667a16.695 16.695 0 0 1-1.908 7.529A16.406 16.406 0 0 1 12 20Z" />
                        </svg>
                    </span>
                </div>
                <div class="mt-3">
                    <h4 class="font-bold">Proteggi la tua infrastruttura</h4>
                    <p>ThreatScope è pensato per i professionisti della sicurezza, system administrator e aziende
                        che
                        vogliono tenere sotto controllo la propria esposizione online.</p>
                </div>
            </div>
        </section>
        <x-footer />
    </main>
</body>

</html>
