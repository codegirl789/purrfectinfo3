<div class="post-and-buttons container">
    <div class="post-container bg-white rounded-xl mt-4">
        <div class="flex flex-col md:flex-row flex-1  p-4 ">

            <div>
                <h4 class="text-2xl font-semibold flex justify-between items-center">
                    <a href="#" class="hover:underline">{{ ucfirst($post->title) }}</a>
                </h4>

                <div class="flex flex-col md:flex-row md:items-center justify-between  mt-2">

                    <div class="flex flex-col">
                        <div class="flex space-x-4 items-center">
                            <livewire:heart :post="$post" wire:prevent.self :wire:key="'key-'.$post->id">
                                <div class="">
                                    <i class="fa-regular fa-xl fa-comment"></i>
                                    <span class="text-lg text-gray-500">
                                        {{ $post->Comments->count() }}
                                    </span>
                                </div>
                                @guest
                                    <p class="text-xs text-gray-500">login to like and comment</p>
                                @endguest

                        </div>
                    </div>

                    <div
                        class="flex text-center items-center md:text-sm text-xxs text-gray-500 font-semibold space-x-1">
                        <div class="hidden md:block font-semibold text-gray-800">
                            {{ $post->SuperCategory->name }}
                        </div>
                        <div class="hidden md:block">&bull;</div>
                        <div>{{ $post->SubCategory->name }}</div>
                        <div>&bull;</div>
                        <div class="text-gray-400 text-xs">{{ $post->created_at->diffForHumans() }}</div>
                    </div>

                    <div x-data="{ isOpen: false }"
                        class="flex justify-between md:justify-normal items-center md:space-x-2 mt-2 md:mt-0">
                        <div
                            class="{{ $post->status->classes }} text-xxs font-bold md:uppercase leading-none rounded-full text-center md:w-24 w-16 h-7 md:py-2 flex justify-center items-center md:px-4 px-2">
                            {{ $post->Category->name }}
                        </div>

                    </div>
                </div>

                <div class="text-gray-900 mt-2 text-base">
                    <div>
                        {{ $post->introduction }}
                    </div>

                    <a href="#">
                        <img src="{{ asset($post->image) }}" alt="avatar"
                            class="w-full md:h-96 h-52 object-cover rounded my-4">
                    </a>

                    {!! $post->content !!}
                </div>
            </div>
        </div>
    </div> <!-- end post-container -->

    {{-- buttons container --}}
    <div class="buttons-container flex items-center justify-between mt-4">
        <div class="flex items-center space-x-2 md:ml-4 ml-2">
            <livewire:create-comment :post="$post" />

            {{-- <div class="relative" x-data="{ statusOpen: false }">
                <button @click="statusOpen = !statusOpen" type="button"
                    class="flex items-center justify-center bg-gray-200 rounded-xl md:text-sm text-xs md:px-4 px-3 py-2 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in ">
                    <span>Set Status</span>
                    <svg class="w-4  ml-2" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>

                </button>

                <div x-cloak x-show="statusOpen" x-transition-.open.top.right.duration.500ms
                    @click.away="statusOpen=false" @keydown.escape.window="statusOpen=false"
                    class=" absolute z-10 md:w-104 w-64 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl md:ml-2 -right-4 md:right-0  mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-gray-600 border-none" name="status"
                                        value="1" checked>
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-purple border-none" name="status"
                                        value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-yellow border-none" name="status"
                                        value="3">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-green border-none" name="status"
                                        value="3">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-red border-none" name="status"
                                        value="3">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comments" cols="30" rows="3"
                                class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                placeholder="Add an update comment (optional)"></textarea>
                        </div>

                        <div class="flex items-center justify-between space-x-3">
                            <button type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                            <button type="submit"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue-500 text-white font-semibold rounded-xl border border-blue hover:bg-blue-600 transition duration-150 ease-in px-6 py-3">
                                <span class="ml-1">Update</span>
                            </button>
                        </div>

                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input type="checkbox" name="notify_voters" class="rounded bg-gray-200"
                                    checked="">
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div> --}}
        </div>

    </div> <!-- end buttons container -->
</div>
