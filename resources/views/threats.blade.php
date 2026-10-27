<!DOCTYPE html>
<html lang="it">

<x-head />

<body class="min-h-screen bg-slate-100 font-sans text-slate-800">

    <x-navbar />

    <main class="mx-auto max-w-7xl px-6 py-10">

        <div>
            <h2>IP: {{ $ip }}</h2>
        </div>

        <h2>Risultati AbuseIPDB</h2>

        <p>
            <strong>Punteggio di abuso:</strong>
            {{ $risultato['data']['abuseConfidenceScore'] }}
        </p>

        <p>
            <strong>Paese:</strong>
            {{ $risultato['data']['countryCode'] }}
        </p>

        <p>
            <strong>Provider:</strong>
            {{ $risultato['data']['isp'] }}
        </p>

        <p>
            <strong>Numero di segnalazioni:</strong>
            {{ $risultato['data']['totalReports'] }}
        </p>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif

        <x-footer />
    </main>

</body>

</html>
