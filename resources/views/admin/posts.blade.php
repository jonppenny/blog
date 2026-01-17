<x-admin>
    <x-slot:title>
        Posts
    </x-slot:title>

    <div class="container">
        <div class="d-flex align-items-center justify-content-start gap-4">
            <h1>Posts</h1>
            <a href="{{route('admin.post.create')}}" class="btn btn-primary">New Post</a>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td class="d-flex align-items-center justify-content-end gap-2">
                        <a href="{{route('admin.post.edit', ['post' => $post])}}" class="btn btn-secondary">Edit</a>
                        <form action="/admin/{{$post->id}}/destroy" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-outline-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-admin>
