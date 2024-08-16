<x-layout>
    <h1 class="title">Welcome back</h1>

    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('login') }}" method="post">
            @csrf

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

            {{-- Remember --}}
            <div class="mb-4">
                <label for="remember">
                <input type="checkbox" name="remember" id="remember">
                Remember me</label>
            </div>

            @error('failed')
                <p class="error mb-4">{{ $message }}</p>
            @enderror

            {{--  --}}
            <button class="primary-btn">Login</button>


        </form>
    </div>
</x-layout>
