<x-main-layout>

    {{-- <div>

        <form wire:submit.prevent="submit" class="filters flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-2 mb-2">
            <div class="md:w-1/3 w-full">
                <select name="parent_category" wire:model="parent_category" id="parent_category"
                    class="w-full py-2 cursor-pointer px-4 border-none rounded-xl">
                    <option value="">Parent Category</option>
                    @foreach ($parent_categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="md:w-1/3 w-full">
                <select name="category" id="category" wire:model="category"
                    class="w-full py-2 cursor-pointer font-normal px-4 border-none rounded-xl">
                    <option value="">Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="md:w-2/3 w-full relative">
                <input type="text" placeholder="Find an post" wire:model="search_query"
                    class="rounded-xl w-full px-4 py-2 bg-white border-none placeholder-gray-900">
            </div>
    
            <button type="submit"
                class="md:w-1/5 rounded-xl w-full text-center py-2 bg-blue text-white border-none placeholder-gray-900 relative flex justify-center space-x-2">
                Search
                <svg fill="none" class="w-4 ml-1 text-white" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
    
            </button>
        </form> <!-- end filter -->
    </div> --}}


    <div class="pt-1 pb-4">
        {{ $posts->links() }}
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4  mt-0">
        @forelse ($posts as $post)
            <div class="rounded-2xl shadow hover:shadow-card cursor-pointer bg-white p-3">
                <div class="flex items-center justify-center space-x-2">
                    <a href="{{ route('posts.show', $post->id) }}" class="basis-13">
                        <img src="{{ asset($post->image) }}" alt="avatar" class="w-14 h-14 rounded-xl object-cover">
                    </a>
                    <a href="{{ route('posts.show', $post->id) }}"
                        class="font-semibold text-xl basis-10/12 hover:underline line-clamp-2">{{ $post->title }}</a>
                </div>
                <a href="{{ route('posts.show', $post->id) }}" class="line-clamp-3 pt-2">
                    {{ $post->introduction }}
                </a>

                <div class="flex items-center justify-between pt-2">
                    <div class="flex space-x-1 items-center">
                        <span>{{ $post->SuperCategory->name }}</span>
                        <div class=""> &bull; </div>
                        <span class="text-gray-500 text-sm"> {{ $post->SubCategory->name }}</span>
                    </div>
                    <div class="text-gray-500 text-sm">
                        {{ $post->created_at->diffForHumans() }}
                    </div>
                </div>

                <div class=" mt-4">

                    <div x-data="{ isOpen: false }" class="flex justify-between items-center md:space-x-2 mt-2 md:mt-0">

                        <div class="flex flex-col">
                            <div class="flex space-x-4 items-center">
                                <div>
                                    @auth
                                        @if ($post->id % 2 != 0)
                                            <i class="fa-solid text-red fa-xl fa-heart"></i>
                                        @else
                                            <i class="fa-regular fa-xl fa-heart"></i>
                                        @endif
                                    @else
                                        @if ($post->id % 2 != 0)
                                            <a href="{{ route('login') }}">
                                                <i class="fa-solid text-red fa-xl fa-heart"></i>
                                            </a>
                                        @else
                                            <a href="{{ route('login') }}">
                                                <i class="fa-regular fa-xl fa-heart"></i>
                                            </a>
                                        @endif
                                    @endauth
                                    <span class="text-lg text-gray-500">
                                        {{ $post->Likes->count() }}
                                    </span>
                                </div>
                                <div class="">
                                    <i class="fa-regular text-gray-500 fa-xl fa-comment"></i>
                                    <span class="text-lg text-gray-500">
                                        {{ $post->Comments->count() }}
                                    </span>
                                </div>
                                @guest
                                    <p class="text-xs text-gray-500">login to like and comment</p>
                                @endguest

                            </div>
                        </div>

                        <a href="{{ route('category.show', $post->Category->id) }}"
                            class=" cursor-pointer text-xxs font-bold md:uppercase leading-none rounded-full text-center md:w-24 w-16 h-7 md:py-2 flex justify-center items-center md:px-4 px-2 {{ $post->Category->color }} text-white">
                            {{ $post->Category->name }}
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p class="w-full text-center py-2 rounded-xl shadow bg-indigo-500 text-white">No Posts Found</p>
        @endforelse
    </div>

    <div class=" pt-4">
        {{ $posts->links() }}
    </div>


</x-main-layout>
