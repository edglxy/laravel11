<x-layout>
    <h1 class="title">Register a new account</h1>

    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('register') }}" method="post">
            @csrf

            {{-- Username --}}
            <div class="mb-4 ">
                <label for="username">Username</label>
                <div class="@error('username') border-2 border-rose-600 @enderror">
                    <input type="text" name="username" class="input" value="{{ old('username') }}">
                </div>
                @error('username')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <div class="@error('email') border-2 border-rose-600 @enderror">
                    <input type="text" name="email" class="input" value="{{ old('username') }}">
                </div>
                @error('email')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div class="mb-4">
                <label for="password">Password</label>
                <div class="@error('password') border-2 border-rose-600 @enderror">
                    <input type="password" name="password" class="input">
                </div>
                @error('password')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div class="mb-8">
                <label for="password_confirmation">Confirm Password</label>
                <div class="@error('password_confirmation') border-2 border-rose-600 @enderror">
                    <input type="password" name="password_confirmation" class="input">
                </div>
                @error('password_confirmation')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{--  --}}
            <button class="primary-btn">Register</button>


        </form>
    </div>
</x-layout>
