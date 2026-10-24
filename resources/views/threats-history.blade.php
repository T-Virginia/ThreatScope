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
