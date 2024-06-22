<div>
    @auth
        <i class="fa-regular fa-xl fa-heart" wire:click="like({{ $post }})"></i>
    @else
        <a href="{{ route('login') }}">
            <i class="fa-regular fa-xl fa-heart"></i>
        </a>
    @endauth
    <span class="text-lg text-gray-500">
        {{ $post->Likes->count() }}
    </span>
</div>
