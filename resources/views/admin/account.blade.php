<x-admin>
    <x-slot:title>
        {{$user->name}} Account
    </x-slot:title>
    <div>
        <h1>Account</h1>

        <form action="{{route('admin.account.update')}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" value="{{$user->email}}" id="email" class="form-control w-25"/>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" value="" placeholder="********" id="password"
                       class="form-control w-25" required/>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" value="" placeholder="********"
                       id="password_confirmation" class="form-control w-25" required/>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-admin>
