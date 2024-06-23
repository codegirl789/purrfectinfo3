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
                            <img src="{{ asset($comment->User->image) }}" alt="avatar" class="w-14 h-14 rounded-xl">
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
                            @if ($comment->User->id === Auth()->user()->id)
                                <form action="{{ route('user_comments_destroy', $comment->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this?');"
                                        class="hover:bg-gray-200 bg-gray-300 text-xs rounded-3xl shadow text-white block transition duration-150 ease-in px-4 py-2">
                                        Delete Comment <i class="fas fa-trash text-white"></i>
                                    </button>
                                </form>
                            @endif

                            {{-- <form action="{{ route('admin.post.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this?');">
                                   <i class="fas fa-lg fa-trash text-red"></i>
                                </button>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div> <!-- End comment Container --->
        @endforeach

    </div> <!-- end comments container -->
</div>
