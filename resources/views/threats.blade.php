<!DOCTYPE html>
<html lang="it">

<x-head />

<body class="min-h-screen bg-slate-100 font-sans text-slate-800">
    <x-navbar />
    <section class="flex bg-neutral-primary border-gray-300 border bg-blue-100 h-14 grid content-center">
        <div class="ml-5">
            <p class="font-bold text-2xl">
                Dettaglio Analisi IP</p>
        </div>
    </section>
    <section class="flex item-center justify-center mt-5">
        <div class="w-full max-w-2xl p-6 bg-blue-100 border border-default border-gray-300 rounded-2xl shadow-xs">
            <div class="flex items-center mb-4 border-b">
                <h5 class="text-2xl font-semibold leading-none text-heading mb-4">Risultati AbuseIPDB</h5>
            </div>
            <div class="flow-root">
                <div class="py-4 sm:py-4 text-center">
                    <div class="flex items-center">
                        <div class="flex-1 min-w-0 ms-2">
                            <p class="text-2xl font-medium text-heading">
                                <strong>IP:</strong>
                                {{ $ip }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 border-b">
                    <div class="py-4 sm:py-4 px-6 inline-flex border-r">
                        <div class="flex items-center justify-center gap-2">
                            <div class="flex min-w-0 ms-2">
                                <svg class="mr-2 w-6 h-6 text-gray-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207" />
                                </svg>
                                <p class="font-medium text-heading">
                                    <strong>Punteggio di abuso:</strong>
                                    {{ $risultato['data']['abuseConfidenceScore'] }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="py-4 sm:py-4 px-6 inline-flex">
                        <div class="flex items-center justify-center gap-2">
                            <div class="flex min-w-0 ms-2">
                                <svg class="mr-2 w-6 h-6 text-gray-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="font-medium text-heading">
                                    <strong>Paese:</strong>
                                    {{ $risultato['data']['countryCode'] ?? '' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 border-b">
                    <div class="py-4 sm:py-4 px-6 inline-flex border-r">
                        <div class="flex items-center justify-center gap-2">
                            <div class="flex min-w-0 ms-2">
                                <svg class="mr-2 w-6 h-6 text-gray-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 12a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1M5 12h14M5 12a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1m-2 3h.01M14 15h.01M17 9h.01M14 9h.01" />
                                </svg>
                                <p class="font-medium text-heading">
                                    <strong>Provider:</strong>
                                    {{ $risultato['data']['isp'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="py-4 sm:py-4 px-6 inline-flex">
                        <div class="flex items-center gap-2">
                            <div class="flex min-w-0 ms-2">
                                <svg class="mr-2 w-6 h-6 text-gray-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13.5713 5h7v9h-7m-6.00001-4-3 4.5m3-4.5v5m0-5h3.00001m0 0h5m-5 0v5m-3.00001 0h3.00001m-3.00001 0v5m3.00001-5v5m6-6 2.5 6m-3-6-2.5 6m-3-14.5c0 .82843-.67158 1.5-1.50001 1.5-.82843 0-1.5-.67157-1.5-1.5s.67157-1.5 1.5-1.5 1.50001.67157 1.50001 1.5Z" />
                                </svg>
                                <p class="font-medium text-heading">
                                    <strong>Numero di segnalazioni:</strong>
                                    {{ $risultato['data']['totalReports'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 border-b">
                    <div class="py-4 sm:py-4 px-6 inline-flex border-r">
                        <div class="flex items-center justify-center gap-2">
                            <div class="flex min-w-0 ms-2">
                                <svg class="mr-2 w-6 h-6 text-gray-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                        d="M7.58209 8.96025 9.8136 11.1917l-1.61782 1.6178c-1.08305-.1811-2.23623.1454-3.07364.9828-1.1208 1.1208-1.32697 2.8069-.62368 4.1363.14842.2806.42122.474.73509.5213.06726.0101.1347.0133.20136.0098-.00351.0666-.00036.1341.00977.2013.04724.3139.24069.5867.52125.7351 1.32944.7033 3.01552.4971 4.13627-.6237.8375-.8374 1.1639-1.9906.9829-3.0736l4.8107-4.8108c1.0831.1811 2.2363-.1454 3.0737-.9828 1.1208-1.1208 1.3269-2.80688.6237-4.13632-.1485-.28056-.4213-.474-.7351-.52125-.0673-.01012-.1347-.01327-.2014-.00977.0035-.06666.0004-.13409-.0098-.20136-.0472-.31386-.2406-.58666-.5212-.73508-1.3294-.70329-3.0155-.49713-4.1363.62367-.8374.83741-1.1639 1.9906-.9828 3.07365l-1.7788 1.77875-2.23152-2.23148-1.41419 1.41424Zm1.31056-3.1394c-.04235-.32684-.24303-.61183-.53647-.76186l-1.98183-1.0133c-.38619-.19746-.85564-.12345-1.16234.18326l-.86321.8632c-.3067.3067-.38072.77616-.18326 1.16235l1.0133 1.98182c.15004.29345.43503.49412.76187.53647l1.1127.14418c.3076.03985.61628-.06528.8356-.28461l.86321-.8632c.21932-.21932.32446-.52801.2846-.83561l-.14417-1.1127ZM19.4448 16.4052l-3.1186-3.1187c-.7811-.781-2.0474-.781-2.8285 0l-.1719.172c-.7811.781-.7811 2.0474 0 2.8284l3.1186 3.1187c.7811.781 2.0474.781 2.8285 0l.1719-.172c.7811-.781.7811-2.0474 0-2.8284Z" />
                                </svg>
                                <p class="font-medium text-heading">
                                    <strong>Uso:</strong>
                                    {{ $risultato['data']['usageType'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="py-4 sm:py-4 px-6 inline-flex">
                        <div class="flex items-center gap-2">
                            <div class="flex min-w-0 ms-2">
                                <svg class="mr-2 w-6 h-6 text-gray-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M9.166 19.986A.915.915 0 0 1 9 20H5a1 1 0 1 1 0-2h4c.057 0 .112.005.166.014a3.001 3.001 0 0 1 5.668 0A.915.915 0 0 1 15 18h4a1 1 0 1 1 0 2h-4c-.056 0-.112-.005-.166-.014a3.001 3.001 0 0 1-5.668 0ZM11 19a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M11.5 2.131a1 1 0 0 1 1 0l4.601 2.657c-.06.018-.12.044-.179.075L12.08 7.475 6.946 4.76 11.5 2.131ZM5.967 6.505v5.21a1 1 0 0 0 .5.866l4.57 2.638V9.186l-5.07-2.681Zm7.07 8.671 4.496-2.595a1 1 0 0 0 .5-.866v-5.2a1 1 0 0 1-.161.108l-4.835 2.608v5.945Z" />
                                </svg>

                                <p class="font-medium text-heading">
                                    <strong>ISP:</strong>
                                    {{ $risultato['data']['isp'] }}
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
