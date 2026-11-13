<!DOCTYPE html>
<html lang="it">

<x-head />

<body class="min-h-screen bg-slate-100 font-sans text-slate-800">
    <x-navbar />
    <section class="flex bg-neutral-primary bg-blue-100 h-14 grid content-center">
        <div class="ml-5">
            <p class="font-bold text-2xl">
                Dettaglio Analisi IP</p>
        </div>
    </section>
    <section class="flex item-center justify-center mt-5">
        <div class="w-full max-w-2xl p-6 bg-blue-100 border border-default rounded-2xl shadow-xs">
            <div class="flex items-center mb-4 border-b">
                <h5 class="text-2xl font-semibold leading-none text-heading mb-4">Risultati AbuseIPDB</h5>
            </div>
            <div class="flow-root">
                <div class="py-4 sm:py-4 text-center">
                    <div class="flex items-center">
                        <div class="flex-1 min-w-0 ms-2">
                            <p class="text-2xl font-medium text-heading truncate">
                                <strong>IP:</strong>
                                {{ $ip }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 border-b">
                    <div class="py-4 sm:py-4 px-6 inline-flex border-r">
                        <div class="flex items-center gap-2">
                            <div class="flex-1 min-w-0 ms-2">
                                <p class="font-medium text-heading truncate">
                                    <strong>Punteggio di abuso:</strong>
                                    {{ $risultato['data']['abuseConfidenceScore'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="py-4 sm:py-4 px-6 inline-flex">
                        <div class="flex items-center gap-2">
                            <div class="flex-1 min-w-0 ms-2">
                                <p class="font-medium text-heading truncate">
                                    <strong>Paese:</strong>
                                    {{ $risultato['data']['countryCode'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 border-b">
                    <div class="py-4 sm:py-4 px-6 inline-flex border-r">
                        <div class="flex items-center gap-2">
                            <div class="flex-1 min-w-0 ms-2">
                                <p class="font-medium text-heading truncate">
                                    <strong>Provider:</strong>
                                    {{ $risultato['data']['isp'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="py-4 sm:py-4 px-6 inline-flex">
                        <div class="flex items-center gap-2">
                            <div class="flex-1 min-w-0 ms-2">
                                <p class="font-medium text-heading truncate">
                                    <strong>Numero di segnalazioni:</strong>
                                    {{ $risultato['data']['totalReports'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif
    </section>

    <x-footer />
    </main>

</body>

</html>
