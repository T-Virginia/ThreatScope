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
                Le tue ricerche
            </h1>
            <p class="mt-3 max-w-2xl text-slate-600">
                Tutte le analisi che hai effettuato nel tempo.
            </p>
        </section>
        <section>
            <div
                class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border rounded-2xl border-default">
                <table class="w-full text-sm text-left rtl:text-right text-body">
                    <thead
                        class="text-sm text-body bg-neutral-primary bg-blue-200 border-b rounded-base
                        border-default">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-bold">
                                IP
                            </th>
                            <th scope="col" class="px-6 py-3 font-bold">
                                Punteggio di abuso
                            </th>
                            <th scope="col" class="px-6 py-3 font-bold">
                                Segnalazioni
                            </th>
                            <th scope="col" class="px-6 py-3 font-bold">
                                Paese
                            </th>
                            <th scope="col" class="px-6 py-3 font-bold">
                                Provider </th>
                            <th scope="col" class="px-6 py-3 font-bold">
                                Data
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($records))
                            @foreach ($records as $record)
                                <tr class="bg-neutral-primary border-b bg-blue-100 border-default">
                                    <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                        {{ $record->ip_address }}
                                    </th>
                                    <td class="px-6 py-4 flex justify-center">
                                        @if ($record->abuse_confidence_score === '' || $record->abuse_confidence_score === null)
                                            <span
                                                class="bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-full flex py-2 px-2 items-center justify-center w-10 outline-2 outline-offset shadow-xl/30">
                                                '' </span>
                                        @elseif ($record->abuse_confidence_score <= 50)
                                            <span
                                                class="bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300 rounded-full flex py-2 px-2 items-center justify-center w-10 outline-2 outline-offset shadow-xl/30">
                                                {{ $record->abuse_confidence_score }}</span>
                                        @elseif ($record->abuse_confidence_score <= 80)
                                            <span
                                                class="bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300 rounded-full flex py-2 px-2 items-center justify-center w-10 outline-2 outline-offset shadow-xl/30">
                                                {{ $record->abuse_confidence_score }}</span>
                                        @elseif ($record->abuse_confidence_score > 80)
                                            <span
                                                class="bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300 rounded-full flex py-2 px-2 items-center justify-center w-10 outline-2 outline-offset shadow-xl/30">
                                                {{ $record->abuse_confidence_score }}</span>
                                        @endif
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
            <div class="mt-4">
                {{ $records->links() }}
            </div>
        </section>
        <x-footer />
    </main>
</body>

</html>
