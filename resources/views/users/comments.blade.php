<x-main-layout>
    <div class=" flex flex-col md:flex-row  md:space-y-0 md:space-x-6 mb-2 items-center">
        <div class="md:w-28 w-full ">
            <div class="flex items-center justify-center md:justify-left pt-2 font-semibold hover:underline">
                <svg class="w-4 h-4 pt-1" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
                <a href="/" class=""> Go Home </a>
            </div>
        </div>
        <h2 class="w-full text-2xl text-center pt-4 lg:pt-0 md:pt-0">
            My Comments
        </h2>
    </div>

    <div class="py-4">
        <div class="grid grid-flow-row md:grid-cols-3 lg:col-span-3  gap-4">
            @foreach ($comments as $comment)
                <div class="card rounded-lg shadow bg-white">
                    <div class="image">
                        <a href="{{ route('posts.show', $comment->Post->id) }}">
                            <img src="{{ asset($comment->Post->image) }}" alt="post image"
                                class="rounded-t-lg object-cover">
                        </a>
                    </div>
                    <div class="content p-2">
                        <div class="flex justify-between items-center pb-2">
                            <a href="{{ route('posts.show', $comment->Post->id) }}"
                                class=" cursor-pointer text-xxs font-bold md:uppercase leading-none rounded-full text-center md:w-24 w-16 h-7 md:py-2 flex justify-center items-center md:px-4 px-2 {{ $comment->Post->status->classes }} ">
                                {{ $comment->Post->Category->name }}
                            </a>
                            <span class="text-gray-500 text-xs">{{ $comment->Post->created_at->diffForHumans() }}</span>
                        </div>
                        <a href="{{ route('posts.show', $comment->Post->id) }}"
                            class="text-lg font-semibold hover:underline">
                            {{ $comment->Post->title }}
                        </a>
                        <p class="text-base pt-2 line-clamp-6">
                            <span class="font-semibold text-lg">Your Comment: </span>{{ $comment->message }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-main-layout>
