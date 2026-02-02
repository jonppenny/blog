<x-admin>
    <x-slot:title>
        Create
    </x-slot:title>
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('admin.page.store')}}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Page title</label>
                <input type="text" name="title" value="{{old('title')}}" id="title" class="form-control @error('title') is-invalid @enderror" required/>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Page slug</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">/</span>
                    </div>
                    <input type="text" name="slug" value="{{old('slug')}}" id="slug" class="form-control @error('slug') is-invalid @enderror" required/>
                    @error('slug')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 ck-dark">
                <label for="body" class="form-label">Page body</label>
                <x-ckeditor name="body" :value="old('body', '')" class="@error('body') is-invalid @enderror" />
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-admin>
