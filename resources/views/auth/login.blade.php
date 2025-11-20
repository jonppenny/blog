<x-auth>
    <x-slot:title>
        Sign In
    </x-slot:title>

    <div class="row">
        <div class="col-12 col-lg-4 offset-lg-4">
            <div class="card my-5">
                <div class="card-header">
                    <h1>Login</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="/user/login">
                        @csrf

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email"
                                   name="email"
                                   id="email"
                                   placeholder="mail@example.com"
                                   value="{{ old('email') }}"
                                   class="form-control @error('email') input-error @enderror"
                                   required
                                   autofocus>

                            @error('email')
                            <div class="label -mt-4 mb-2">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password"
                                   name="password"
                                   placeholder="••••••••"
                                   class="form-control @error('password') input-error @enderror"
                                   required>

                            @error('password')
                            <div class="label -mt-4 mb-2">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="mb-4 form-check">
                            <input type="checkbox" name="remember" id="remember" class="form-check-input">
                            <label for="remember" class="form-check-label">Remember me</label>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="btn btn-primary">
                                Sign In
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-auth>
