<x-admin-layout>
    <div class="bg-white px-2 py-4 rounded-lg shadow">
        <div class="flex justify-between items-center mb-2">
            <x-admin.heading>View Post</x-admin.heading>
            <a href="{{ route('admin.post.index') }}"
                class="py-2 px-4 text-center bg-blue hover:bg-blue-hover text-white w-full basis-36 rounded-lg shadow">
                View All Posts
            </a>
        </div>

        <div class="p-4 rounded-lg shadow bg-white">
            <h1 class="text-lg text-center font-semibold">{{ $post->title }}</h1>
            <div class="flex justify-between items-center text-base py-2 my-2 bg-gray-50 rounded-lg shadow p-4">
                <span>{{ $post->Category->name }}</span>
                <span>{{ $post->SubCategory->name }}</span>
                <span>{{ $post->status->name }}</span>
                <span>{{ $post->updated_at->diffForHumans() }}</span>
            </div>

            <p class="p-2 bg-gray-50 rounded-lg shadow text-base">
                {{ $post->content }}
            </p>
        </div>
    </div>
</x-admin-layout>
