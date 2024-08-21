<x-layout>
    <h1 class="title">Hello {{ auth()->user()->username }}</h1>

    {{-- Create Post Form --}}
    <div class="card mb-4">
        <h2 class="font-bold mb-4">Create a new post</h2>


        <form action="{{ route('posts.store') }}" method="post">
            @csrf

            {{-- Session Messages --}}
            @if (session('success'))
            <div class="mb-2">
                <x-flash-message msg="{{ session('success') }}" bg="bg-yellow-500"></x-flash-message>
            </div>
            @endif

            {{-- Post Title --}}
            <div class="mb-4">

                <label for="title">Post Title</label>
                <div class="@error('title') border-2 border-rose-600 @enderror">
                    <input type="text" name="title" value="{{ old('title') }}" class="input">
                </div>

                @error('title')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Post Body --}}
            <div class="mb-4">

                <label for="body">Post Content</label>
                <div class="@error('body') border-2 border-rose-600 @enderror">
                    <textarea name="body" rows="4" class="input">{{ old('body') }}</textarea>
                </div>

                @error('body')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit Button --}}
            <button class="btn">Create</button>
        </form>
    </div>
</x-layout>
