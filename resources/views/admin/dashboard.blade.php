<x-admin-layout>

    <div class="grid grid-cols-3 gap-4">
        <div
            class="card bg-white text-xl font-semibold rounded-lg shadow flex justify-center items-center p-8 hover:bg-blue hover:text-white cursor-pointer">
            <a href="{{ route('admin.dashboard.index') }}">Dashboard</a>
        </div>
        <div
            class="card bg-white text-xl font-semibold rounded-lg shadow flex justify-center items-center p-8 hover:bg-blue hover:text-white cursor-pointer">
            <a href="{{ route('admin.post.index') }}">All Posts</a>
        </div>
        <div
            class="card bg-white text-xl font-semibold rounded-lg shadow flex justify-center items-center p-8 hover:bg-blue hover:text-white cursor-pointer">
            <a href="{{ route('admin.post.create') }}">Create New Post</a>
        </div>
        <div
            class="card bg-white text-xl font-semibold rounded-lg shadow flex justify-center items-center p-8 hover:bg-blue hover:text-white cursor-pointer">
            <a href="{{ route('admin.category.index') }}">All Categories</a>
        </div>
        <div
            class="card bg-white text-xl font-semibold rounded-lg shadow flex justify-center items-center p-8 hover:bg-blue hover:text-white cursor-pointer">
            <a href="{{ route('admin.category.create') }}">Create New Category</a>
        </div>
        <div
            class="card bg-white text-xl font-semibold rounded-lg shadow flex justify-center items-center p-8 hover:bg-blue hover:text-white cursor-pointer">
            <a href="{{ route('admin.status.index') }}">All Statuses</a>
        </div>
        <div
            class="card bg-white text-xl font-semibold rounded-lg shadow flex justify-center items-center p-8 hover:bg-blue hover:text-white cursor-pointer">
            <a href="{{ route('admin.status.create') }}">Create New Status</a>
        </div>
    </div>

</x-admin-layout>
