<x-layout>
    <x-slot:title>
        Sign In
    </x-slot:title>

    <div class="d-flex flex-column flex-lg-row align-items-stretch justify-content-between gap-1 mb-1 bios-box-wrapper">
        <div class="p-5 bios-box">
            <h2>Login</h2>

            <form method="POST" action="/login">
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
                    <button type="submit" class="d-inline-block my-2 text-uppercase bios-link">
                        Sign In
                    </button>
                </div>
            </form>
        </div>
        <div class="p-5 bios-box">
            <div class="d-flex flex-column justify-content-between gap-4">
                <div>
                    <div><a href="#" class="d-inline-block my-2 text-uppercase bios-link">About</a></div>
                    <div><a href="#" class="d-inline-block my-2 text-uppercase bios-link">Contact</a></div>
                </div>
                <div>
                    <div><a href="https://linkedin.com/in/jonppenny" class="d-inline-block my-2 text-uppercase bios-link">LinkedIn</a></div>
                    <div><a href="https://github.com/jonppenny" class="d-inline-block my-2 text-uppercase bios-link">Github</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 p-5 bios-box"></div>
</x-layout>
