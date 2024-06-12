<x-admin-layout>

    <div class="grid grid-cols-3 gap-4">
        <a href="{{ route('homepage') }}" target="_blank"
            class="card text-xl font-semibold rounded-lg shadow flex justify-center items-center p-8 bg-blue hover:bg-blue-hover text-white cursor-pointer">
            Visit Website
        </a>
        {{-- <a href="{{ route('admin.dashboard.index') }}"
            class="card bg-white text-xl font-semibold rounded-lg shadow flex justify-center items-center p-8 hover:bg-blue hover:text-white cursor-pointer">
            Dashboard
        </a> --}}
        <a href="{{ route('admin.post.index') }}"
            class="card bg-white text-xl font-semibold rounded-lg shadow flex justify-center items-center p-8 hover:bg-blue hover:text-white cursor-pointer">
            All Posts
        </a>
        <a href="{{ route('admin.post.create') }}"
            class="card bg-white text-xl font-semibold rounded-lg shadow flex justify-center items-center p-8 hover:bg-blue hover:text-white cursor-pointer">
            Create New Post
        </a>
        <a href="{{ route('admin.category.index') }}"
            class="card bg-white text-xl font-semibold rounded-lg shadow flex justify-center items-center p-8 hover:bg-blue hover:text-white cursor-pointer">
            All Categories
        </a>
        <a href="{{ route('admin.category.create') }}"
            class="card bg-white text-xl font-semibold rounded-lg shadow flex justify-center items-center p-8 hover:bg-blue hover:text-white cursor-pointer">
            Create New Category
        </a>
        <a href="{{ route('admin.status.index') }}"
            class="card bg-white text-xl font-semibold rounded-lg shadow flex justify-center items-center p-8 hover:bg-blue hover:text-white cursor-pointer">
            All Statuses
        </a>
        <a href="{{ route('admin.status.create') }}"
            class="card bg-white text-xl font-semibold rounded-lg shadow flex justify-center items-center p-8 hover:bg-blue hover:text-white cursor-pointer">
            Create New Status
        </a>
    </div>
    </div>

</x-admin-layout>
