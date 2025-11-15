<x-layout>
    <x-slot:title>
        Admin
    </x-slot:title>

    <div class="container">
        <h1>Admin</h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
