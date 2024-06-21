<div class="relative">
    <form wire:submit.prevent="searchForm" class="relative ">
        <input type="text" placeholder="Search" wire:model="search"
            class="w-full lg:w-80 outline-none border-none py-2 px-4 rounded-3xl  shadow-input placeholder:text-black focus:ring-1 focus:ring-blue focus:ring-opacity-40">
        <button type="submit" class="absolute top-1 right-1 shadow bg-blue w-9 h-8  rounded-3xl"><i
                class="fas fa-search fa-lg text-white"></i></button>
    </form>
    @if (!empty($search))
        <div class="transition-all duration-75 
             absolute z-50 w-full border-2  lg:w-96 overflow-hidden lg:bg-white bg-white top-12 right-18 shadow "
            style="
             border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
             border-image-slice: 1;
             background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
             background-origin: border-box;
             background-clip: content-box, border-box;
             ">
            @if ($posts->count() > 0)
                <ul class="flex flex-col space-y-1">
                    @forelse ($posts as $post)
                        <a href="{{ route('posts.show', $post->id) }}" class="bg-white rounded-md shadow py-2 px-4">
                            <li>
                                <p class="text-justify capitalize">{{ $post->title }} <i
                                        class="fa-solid fa-sm fa-arrow-up-right-from-square"></i></p>
                            </li>
                        </a>
                    @empty
                        <p>no results found</p>
                    @endforelse
                </ul>
            @else
                <p>no results found</p>
            @endif
        </div>
    @endif
</div>
