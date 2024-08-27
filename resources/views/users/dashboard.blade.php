<x-layout>
    <h1 class="title">Welcome {{ auth()->user()->username }}, you have {{ $posts->total() }} posts</h1>

    {{-- Create Post Form --}}
    <div class="card mb-4">
        <h2 class="font-bold mb-4">Create a new post</h2>


        <form action="{{ route('posts.store') }}" method="post">
            @csrf

            {{-- Session Messages --}}
            @if (session('success'))
                <x-flash-message msg="{{ session('success') }}" bg="bg-yellow-500"></x-flash-message>
            @elseif (session('delete'))
                <x-flash-message msg="{{ session('delete') }}" bg="bg-red-500"></x-flash-message>
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

    {{-- User Posts --}}
    <h2 class="font-bold mb-4">Your latest post</h2>

    <div class="grid grid-cols-2 gap-6">
        @foreach ($posts as $post)
            <x-post-card :post="$post">
                {{-- Delete post --}}
                <form action="{{ route('posts.destroy', $post) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white px-2 py-1 text-xs rounded-md">Delete</button>
                </form>
            </x-post-card>
        @endforeach
    </div>

    <div>
        {{ $posts->links() }}
    </div>
</x-layout>
