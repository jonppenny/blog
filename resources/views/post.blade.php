<x-layout>
    <x-slot:title>
        {{$post->title}}
    </x-slot:title>

    {{-- Posts list --}}
    <div class="d-flex flex-column flex-lg-row align-items-stretch justify-content-between gap-1 mb-1 bios-box-wrapper">
        <div class="p-5 bios-box">
            <h1>{{$post->title}}</h1>
            <div class="mb-2">{{ $post->created_at->format('d-m-Y') }}</div>
            <div>{{$post->body}}</div>
        </div>
        <div class="p-5 bios-box">
            @include('components.side-panel')
        </div>
    </div>

</x-layout>
