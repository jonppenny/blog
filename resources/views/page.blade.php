<x-layout>

    <x-slot:title>
        {{ $page->title }}
    </x-slot:title>

    {{-- Page content --}}
    <div class="d-flex flex-column flex-lg-row align-items-stretch justify-content-between gap-1 mb-1 bios-box-wrapper">
        <div class="p-5 bios-box">
            <h1>{{ $page->title }}</h1>
            <div class="page-content">
                {!! $page->body !!}
            </div>
        </div>
        <div class="p-5 bios-box">
            @include('components.side-panel')
        </div>
    </div>

</x-layout>
