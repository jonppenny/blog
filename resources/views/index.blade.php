<x-layout>

    <x-slot:title>
        Start
    </x-slot:title>

    {{-- Posts list --}}
    <div class="d-flex flex-column flex-lg-row align-items-stretch justify-content-between gap-1 mb-1 bios-box-wrapper">
        <div class="p-5 bios-box">
            <h1>Start</h1>

            @forelse ($posts as $post)
                <div><a href="/post/{{$post->id}}"
                        class="d-inline-block my-2 text-uppercase bios-link">{{ Str::limit($post->title, 100) }}</a>
                </div>
            @empty
                <p>No posts found.</p>
            @endforelse

            {{-- Pagination --}}
            {{--@if ($posts instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="">
                    {{ $posts->links() }}
                </div>
            @endif--}}
        </div>
        <div class="p-5 bios-box">
            @include('components.side-panel')
        </div>
    </div>

</x-layout>
