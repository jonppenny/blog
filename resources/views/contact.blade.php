<x-layout>

    <x-slot:title>
        Contact
    </x-slot:title>

    {{-- Posts list --}}
    <div class="d-flex flex-column flex-lg-row align-items-stretch justify-content-between gap-1 mb-1 bios-box-wrapper">
        <div class="p-5 bios-box">
            <h1>Contact</h1>
            <p>If you would like to get in touch, you can email me at <a href="mailto:jon@jonppenny.co.uk">jon@jonppenny.co.uk</a> or you can find me on <a href="https://linkedin.com/in/jonppenny" tareget=="_blank">LinkedIn</a>. You can see some of the projects I'm working on by going to my <a href="https://github.com/jonppenny" target="_blank">Github page</a>.</p>
        </div>
        <div class="p-5 bios-box">
            @include('components.side-panel')
        </div>
    </div>

</x-layout>
