@props(['title', 'body' => '#'])

<div class="bg-neutral-primary bg-[#FFFF] block max-w-sm p-6 border border-gray-300 rounded-2xl shadow-xs">
        <span class="inline-flex text-green items-center bg-yellow-400 text-fg-brand-strong text-xs font-medium px-1.5 py-0.5 rounded-2xl">
            <svg class="w-[24px] h-[24px] text-yellow-800" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 15v4m6-6v6m6-4v4m6-6v6M3 11l6-5 6 5 5.5-5.5" />
            </svg>

        </span>
            <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">{{ $title }}
            </h5>
                <p class="text-body mb-6 text-gray-600">{{ $body }}</p>
    <x-arrow_button />
</div>
