<x-layout>

    <x-slot:title>
        Contact
    </x-slot:title>

    {{-- Posts list --}}
    <div class="d-flex flex-column flex-lg-row align-items-stretch justify-content-between gap-1 mb-1 bios-box-wrapper">
        <div class="p-5 bios-box">
            <h1>Contact</h1>
        </div>
        <div class="p-5 bios-box">
            @include('components.side-panel')
        </div>
    </div>

</x-layout>
