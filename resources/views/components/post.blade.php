@props(['post'])

<div class="mb-4 pb-4">
    <h2>{{ $post->title }}</h2>

    <div>
        {{ $post->body }}
    </div>
</div>
