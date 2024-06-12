<div class="post-and-buttons container">
    <div class="post-container bg-white rounded-xl mt-4">
        <div class="flex flex-col md:flex-row flex-1  p-4 ">

            {{-- <div class="flex-none mx-auto">
                <a href="#">
                    <img src="https://i.pravatar.cc/60" alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div> --}}
            <div>



                <h4 class="text-2xl font-semibold flex justify-between items-center">
                    <a href="#" class="hover:underline">{{ ucfirst($post->title) }}</a>
                </h4>

                <div class="text-gray-900 mt-2 text-base">

                    <div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus atque dolores distinctio, odit
                        consequuntur repellendus quis necessitatibus nisi sed cumque eaque provident commodi velit quod
                        vero dolorum, enim error qui. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil
                        molestias, eum voluptatum nemo delectus provident iste explicabo vitae ut harum aliquid maxime
                        cumque architecto voluptatibus tenetur neque asperiores sapiente molestiae.
                    </div>
                    <a href="#">
                        <img src="https://i.pravatar.cc/1200" alt="avatar"
                            class="w-full md:h-96 h-52 object-cover rounded my-2">
                    </a>

                    {!! $post->content !!}

                </div>

                <div class="flex flex-col md:flex-row md:items-center justify-between md:mt-6 mt-2">
                    <div
                        class="flex text-center items-center md:text-xs text-xxs text-gray-500 font-semibold space-x-1">
                        <div class="hidden md:block font-semibold text-gray-800">
                            {{ $post->SuperCategory->name }}
                        </div>
                        <div class="hidden md:block">&bull;</div>
                        <div>{{ $post->SubCategory->name }}</div>
                        <div>&bull;</div>
                        <div>{{ $post->Comments->count() }} Comments</div>
                        <div>&bull;</div>
                        <div class="text-gray-400 text-xs">{{ $post->created_at->diffForHumans() }}</div>
                    </div>

                    <div x-data="{ isOpen: false }"
                        class="flex justify-between md:justify-normal items-center md:space-x-2 mt-2 md:mt-0">
                        <div class="md:hidden flex">
                            <div class=" flex flex-col bg-gray-200 text-center rounded px-2 py-1 ">
                                <div
                                    class=" h-3 font-semibold leading-none text-sm  @if ($hasVoted) text-blue-500 @endif ">
                                    {{ $votesCount }}
                                </div>
                                <div class="text-xxs">
                                    likes
                                </div>
                            </div>
                            <button
                                class="{{ $hasVoted ? 'bg-blue' : 'bg-gray-500' }}  text-white w-10 rounded text-center -ml-1">
                                {{ $hasVoted ? 'voted' : 'vote' }}
                            </button>
                        </div>
                        <div
                            class="{{ $post->status->classes }} text-xxs font-bold md:uppercase leading-none rounded-full text-center md:w-24 w-16 h-7 md:py-2 flex justify-center items-center md:px-4 px-2">
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
                                x-transition.open.top.right.duration.500ms @keydown.escape.window="isOpen=false"
                                class=" absolute w-44 text-right font-semibold bg-white shadow-dialog rounded-xl py-2 md:ml-8 right-0 md:right-0 z-20 mt-8 md:mt-0">
                                <li><a href="#"
                                        class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-2">Mark
                                        as Spam</a></li>
                                <li><a href="#"
                                        class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-2">Delete
                                        Post</a></li>
                            </ul>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end post-container -->

    {{-- buttons container --}}
    <div class="buttons-container flex items-center justify-between mt-4">
        <div class="flex items-center space-x-2 md:ml-4 ml-2">
            <div class="relative" x-data="{ replyOpen: false }">
                <button @click="replyOpen=!replyOpen" type="button"
                    class="bg-blue-500 md:w-32 w-28 text-white rounded-xl md:text-sm text-xs px-4 py-2 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in ">
                    Reply
                </button>
                <div x-cloak x-show="replyOpen" x-transition.open.top.right.duration.500ms
                    @click.away="replyOpen = false" @keydown.escape.window="replyOpen=false"
                    class=" absolute z-10 md:w-104 w-64 text-right font-semibold text-sm bg-white shadow-dialog rounded-xl md:ml-2 mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                        </div>

                        {{-- <div class="flex items-center space-x-3"> --}}
                        <button type="button"
                            class="flex items-center w-full justify-center text-sm bg-blue-500 text-white font-semibold rounded-xl border border-blue hover:bg-blue-600  transition duration-150 ease-in px-6 py-2">
                            Post Comment
                        </button>
                        {{-- <button type="button"
                                class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button> --}}
                        {{-- </div> --}}

                    </form>
                </div>
            </div>

            <div class="relative" x-data="{ statusOpen: false }">
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
                                <svg class="text-gray-600 w-4 transform -rotate-45" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
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
            </div>
        </div>
        <div class="hidden md:flex items-center space-x-3 ml-4">
            <div class="bg-white text-center font-semibold rounded-xl px-3 py-1">
                <div class="text-xl leading-snug @if ($hasVoted) text-blue-500 @endif ">
                    {{ $votesCount }}</div>
                <div class="text-xxs text-gray-400 leading-none">likes</div>
            </div>
            <div class="">
                <button type="button"
                    class="{{ $hasVoted ? 'bg-blue-500 text-white' : 'bg-gray-200' }} w-32 rounded-xl text-sm px-4 py-2 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in ">
                    {{ $hasVoted ? 'Liked' : 'Like' }}
                </button>
            </div>
        </div>
    </div> <!-- end buttons container -->
</div>
