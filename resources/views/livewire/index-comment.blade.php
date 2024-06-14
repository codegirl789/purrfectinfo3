<div>
    {{-- comments container --}}

    <div class="comments-container relative space-y-6 md:ml-24 pt-4 my-8 mt-1 ">

        {{-- {{ $post->Comments->count() }} --}}
        @foreach ($post->Comments->sortByDesc('created_at') as $key => $comment)
            <div
                class="comment-container relative flex hover:shadow-card transition duration-150 ease-in bg-white rounded-xl ">

                <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                    <div class="flex-none">
                        <a href="#">
                            <img src="https://i.pravatar.cc/200?v={{ $key + 1 }}" alt="avatar"
                                class="w-14 h-14 rounded-xl">
                        </a>
                    </div>

                    <div class="w-full md:mx-4 mt-2 md:mt-0">
                        {{-- <h4 class="text-xl font-semibold">
                  <a href="#" class="hover:underline">A Unique Tittle Can Go Here</a>
              </h4> --}}

                        <div class="text-gray-600">
                            {{ $comment->message }}
                        </div>

                        <div class="flex items-center justify-between md:mt-4 mt-2">
                            <div class="flex items-center text-xxs text-gray-400 font-semibold space-x-1">
                                <div class="font-semibold text-gray-800">{{ $comment->User->name }}</div>
                                <div>&bull;</div>
                                <div>{{ $comment->created_at->diffForHumans() }}</div>
                            </div>
                            <div x-data="{ commentOpen1: false }" class="flex items-center space-x-2">
                                <button @click="commentOpen1 = !commentOpen1"
                                    class="relative bg-gray-100 mt-3 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3 ">
                                    <svg fill="currentColor" width="24" height="6">
                                        <path
                                            d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                            style="color: rgba(163, 163, 163, .5)">
                                    </svg>
                                    <ul x-cloaked x-show="commentOpen1" x-transition.oen.top.right.duration.500ms
                                        @click.away="commentOpen1=false" @keydown.escape.window="commentOpen1=false"
                                        class="absolute z-10 shadow-dialog w-44 font-semibold bg-white  rounded-xl text-right py-3 md:ml-8 right-0 md:right-0 mt-4 md:mt-0">

                                        @if ($comment->User->id == auth()->user()->id)
                                            <a href="#"
                                                class="hover:bg-gray-200 block transition duration-150 ease-in px-5 py-3">Mark
                                                As Spam</a>
                                            <a href="#"
                                                class="hover:bg-gray-200 block transition duration-150 ease-in px-5 py-3">Delete
                                                Comment</a>
                                        @else
                                            <a href="#"
                                                class="hover:bg-gray-200 block transition duration-150 ease-in px-5 py-3">Mark
                                                As Spam</a>
                                        @endif
                                    </ul>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End comment Container --->
        @endforeach

    </div> <!-- end comments container -->
</div>
