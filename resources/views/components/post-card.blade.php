@props(['post'])

<div class="card">
    {{-- Title --}}
    <h2 class="title">{{ $post->title }}</h2>

    {{-- Author and Date --}}
    <div class="text-xs font-light mb-4">
        <span>Posted {{ $post->created_at->diffForHumans() }}</span>
        <a href="" class="text-blue-500 font-medium">USERNAME</a>
    </div>

    {{-- Body --}}
    <div class="text-sm">
        <p>{{ Str::words($post->body, 15) }}</p>
    </div>
</div>
