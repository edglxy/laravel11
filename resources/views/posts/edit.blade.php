<x-layout>

    <a href="{{ route('dashboard') }}" class="block mb-2 text-xs text-blue-500">&larr; Go back to your dashboard</a>

    <div class="card">
        <h2 class="font-bold mb-4">Update your post</h2>

        <form action="{{ route('posts.update', $post) }}" method="post">
            @csrf
            @method('PUT')

            {{-- Post Title --}}
            <div class="mb-4">

                <label for="title">Post Title</label>
                <div class="@error('title') border-2 border-rose-600 @enderror">
                    <input type="text" name="title" value="{{ $post->title }}" class="input">
                </div>

                @error('title')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Post Body --}}
            <div class="mb-4">

                <label for="body">Post Content</label>
                <div class="@error('body') border-2 border-rose-600 @enderror">
                    <textarea name="body" rows="4" class="input">{{ $post->body }}</textarea>
                </div>

                @error('body')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit Button --}}
            <button class="btn">Update</button>
        </form>
    </div>


</x-layout>
