<!DOCTYPE html>
<html lang="it">

<x-head />

<body class="min-h-screen bg-slate-100 font-sans text-slate-800">
    <x-navbar />
    <main class="mx-auto max-w-7xl px-6 py-10">
        <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
            <table class="w-full text-sm text-left rtl:text-right text-body">
                <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-medium">
                            IP
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Punteggio di abuso
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Segnalazioni
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Paese
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Provider </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Data
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($records))
                        @foreach ($records as $record)
                            <tr class="bg-neutral-primary border-b border-default">
                                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                    {{ $record->ip_address }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $record->abuse_confidence_score ?? 'N/D' }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $record->total_reports ?? 'N/D' }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $record->country_code ?? 'N/D' }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $record->isp ?? 'N/D' }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $record->created_at }}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="bg-neutral-primary border-b border-default">
                            <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                Nessun record presente
                            </th>
                            <td></td>
                    @endif
                </tbody>
            </table>
        </div>
        <x-footer />
    </main>
</body>

</html>
