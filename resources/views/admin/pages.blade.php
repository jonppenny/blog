<x-admin>
    <x-slot:title>
        Pages
    </x-slot:title>

    <div class="container">
        <div class="d-flex align-items-center justify-content-start gap-4">
            <h1>Pages</h1>
            <a href="{{route('admin.page.create')}}" class="btn btn-primary">New Page</a>
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
            @foreach ($pages as $page)
                <tr>
                    <td>{{$page->id}}</td>
                    <td>{{$page->title}}</td>
                    <td class="d-flex align-items-center justify-content-end gap-2">
                        <a href="{{route('admin.page.edit', ['page' => $page])}}" class="btn btn-secondary">Edit</a>
                        <form action="/admin/{{$page->slug}}/destroy" method="POST">
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
