<x-main-layout>

    <div class="filters flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 mb-2">
        <div class="md:w-1/3 w-full">
            <select name="category" id="category" class="w-full py-2 cursor-pointer px-4 border-none rounded-xl">
                <option value="category one">Category One</option>
                <option value="category two">Category Two</option>
                <option value="category three">Category Three</option>
                <option value="category four">Category Four</option>
            </select>
        </div>

        <div class="md:w-1/3 w-full">
            <select name="filter" id="filter"
                class="w-full py-2 cursor-pointer font-normal px-4 border-none rounded-xl">
                <option value="filter one">Filter One</option>
                <option value="filter two">Filter Two</option>
                <option value="filter three">Filter Three</option>
                <option value="filter four">Filter Four</option>
            </select>
        </div>

        <div class="md:w-2/3 w-full relative">
            <input type="text" placeholder="Find an post"
                class="rounded-xl w-full px-4 py-2 bg-white pl-8 border-none placeholder-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg fill="none" class="w-4 text-gray-500" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>

            </div>
        </div>
    </div> <!-- end filter -->

    <div class="pt-1 pb-4">
        {{ $posts->links() }}
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4  mt-0">
        @foreach ($posts as $post)
            <div class="rounded-2xl shadow hover:shadow-card cursor-pointer bg-white p-3">
                {{-- <a href="{{ route('posts.show', $post->id) }}" class="font-semibold text-2xl hover:underline">
                    {{ ucfirst($post->title) }}</a> --}}

                <div class="flex items-center justify-center space-x-2">
                    <a href="{{ route('posts.show', $post->id) }}" class="basis-13">
                        <img src="https://i.pravatar.cc/300?v={{ $post->id }}" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                    <a href="{{ route('posts.show', $post->id) }}"
                        class="font-semibold text-xl basis-10/12 hover:underline">{{ ucfirst(substr($post->title, 0, 60)) }}...</a>
                </div>
                <a href="{{ route('posts.show', $post->id) }}" class="line-clamp-3 pt-2">
                    {{ $post->introduction }}
                </a>

                <div class="flex items-center justify-between pt-2">
                    <div class="flex space-x-1 items-center">
                        <span>{{ $post->SubCategory->name }}</span>
                        <div class=""> &bull; </div>
                        <span class="text-gray-500 text-sm"> {{ $post->SuperCategory->name }}</span>
                    </div>
                    <div class="text-gray-500 text-sm">
                        {{ $post->created_at->diffForHumans() }}
                    </div>
                </div>

                <div class=" mt-4">

                    <div x-data="{ isOpen: false }" class="flex justify-between items-center md:space-x-2 mt-2 md:mt-0">
                        {{-- <div class=" flex">
                            <div class=" flex flex-col bg-gray-200 text-center rounded-l-3xl px-4 pr-6 py-1 ">
                                <div
                                    class=" h-3 font-semibold leading-none text-sm  @if ($hasVoted) text-blue-500 @endif ">
                                    {{ $votesCount }}
                                </div>
                                <div class="text-xxs">
                                    votes
                                </div>
                            </div>
                            <button
                                class="{{ $hasVoted ? 'bg-blue' : 'bg-gray-500' }}  text-white w-16 rounded-3xl text-center -ml-4">
                                {{ $hasVoted ? 'voted' : 'vote' }}
                            </button>
                        </div> --}}
                        <div class="flex space-x-4 items-center">
                            <div>
                                <i class="fa-regular fa-xl fa-heart"></i>
                                <span class="text-lg text-gray-500">
                                    {{ $post->Likes->count() }}
                                </span>
                            </div>
                            <div class="">
                                <i class="fa-regular fa-xl fa-comment"></i>
                                <span class="text-lg text-gray-500">
                                    {{ $post->Comments->count() }}
                                </span>
                            </div>
                        </div>
                        <div class="flex space-x-2">

                            <div
                                class=" cursor-pointer text-xxs font-bold md:uppercase leading-none rounded-full text-center md:w-24 w-16 h-7 md:py-2 flex justify-center items-center md:px-4 px-2 {{ $post->status->classes }}">
                                {{ $post->Category->name }}
                            </div>
                            <button @click="isOpen=!isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>
                                <ul x-cloak x-show="isOpen" @click.away="isOpen=false"
                                    x-transition.open.top.left.duration.500ms @keydown.escape.window="isOpen=false"
                                    class=" absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 md:ml-8 right-0 md:left-0 z-20 mt-4 md:mt-0">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark
                                            as Spam</a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>

                    </div>

                </div>

            </div>
        @endforeach
    </div>

    <div class=" pt-4">
        {{ $posts->links() }}
    </div>
</x-main-layout>
