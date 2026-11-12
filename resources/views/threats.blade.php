<!DOCTYPE html>
<html lang="it">

<x-head />

<body class="min-h-screen bg-slate-100 font-sans text-slate-800">

    <x-navbar />

    <div>
        <h1 class="font-bold">IP: {{ $ip }}</h1>
    </div>
    <div class="w-full max-w-sm p-6 bg-neutral-primary-soft border border-default rounded-base shadow-xs">


        <div class="flex items-center justify-between mb-4">

            <h5 class="text-xl font-semibold leading-none text-heading">Risultati AbuseIPDB</h5>
        </div>
        <div class="flow-root">
            <ul role="list" class="divide-y divide-default">
                <li class="py-4 sm:py-4">
                    <div class="flex items-center gap-2">

                        <div class="flex-1 min-w-0 ms-2">
                            <p class="font-medium text-heading truncate">
                                <strong>Punteggio di abuso:</strong>
                                {{ $risultato['data']['abuseConfidenceScore'] }}
                            </p>

                        </div>

                    </div>
                </li>
                <li class="py-4 sm:py-4">
                    <div class="flex items-center gap-2">

                        <div class="flex-1 min-w-0 ms-2">
                            <p class="font-medium text-heading truncate">
                                <strong>Paese:</strong>
                                {{ $risultato['data']['countryCode'] }}
                            </p>
                        </div>

                    </div>
                </li>
                <li class="py-4 sm:py-4">
                    <div class="flex items-center gap-2">

                        <div class="flex-1 min-w-0 ms-2">
                            <p class="font-medium text-heading truncate">
                                <strong>Provider:</strong>
                                {{ $risultato['data']['isp'] }}
                            </p>
                        </div>

                    </div>
                </li>
                <li class="py-4 sm:py-4">
                    <div class="flex items-center gap-2">

                        <div class="flex-1 min-w-0 ms-2">
                            <p class="font-medium text-heading truncate">
                                <strong>Numero di segnalazioni:</strong>
                                {{ $risultato['data']['totalReports'] }}
                            </p>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif

    <x-footer />
    </main>

</body>

</html>
