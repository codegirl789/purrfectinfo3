<span wire:click.defer="$emitSelf('like', {{ $post }})">

    <i
        class="fa-{{ $post->likedBy()->where('user_id', Auth::user()->id)->pluck('user_id')->contains(Auth::user()->id) == 1? 'solid': 'regular' }} fa-heart">
    </i>
    {{ $count }}
    {{ $count === 1 ? $liketext : $liketext . 's' }}

</span>
