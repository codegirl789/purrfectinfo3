<div class="">
    @auth
        <span wire:click="like({{ $post }})">

            <i
                class="fa-{{ $post->likedBy()->where('user_id', Auth::user()->id)->pluck('user_id')->contains(Auth::user()->id) == 1? 'solid text-red': 'regular' }} fa-xl fa-heart">
            </i>
            {{ $count }}
            {{ $count === 1 ? $liketext : $liketext . 's' }}

        </span>
    @else
        <a href="{{ route('login') }}">
            <i class="fa-regular fa-xl fa-heart"></i>
            {{ $count }}
            {{ $count === 1 ? $liketext : $liketext . 's' }}
        </a>
    @endauth
</div>
