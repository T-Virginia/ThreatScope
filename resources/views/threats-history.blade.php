<!DOCTYPE html>
<html lang="it">

<x-head />

<body class="min-h-screen bg-slate-100 font-sans text-slate-800">

    <x-navbar />

    <main class="mx-auto max-w-7xl px-6 py-10">

        <ul>
            @if (count($records))
                @foreach ($records as $record)
                    <li>
                        <strong>IP: </strong> {{ $record->ip_address }}
                        - <strong>Punteggio di abuso: </strong> {{ $record->abuse_confidence_score ?? 'N/D' }}
                        - <strong>Segnalazioni: </strong> {{ $record->total_reports ?? 'N/D' }}
                        - <strong>Paese: </strong> {{ $record->country_code ?? 'N/D' }}
                        - <strong>Provider: </strong> {{ $record->isp ?? 'N/D' }}
                        - <strong>Data: </strong> {{ $record->created_at }}
                    </li>
                @endforeach
            @else
                <li>Nessun record presente</li>
            @endif
        </ul>

        <x-footer />
    </main>

</body>

</html>
