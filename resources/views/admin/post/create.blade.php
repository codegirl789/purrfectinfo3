<x-admin-layout>
    <div class="bg-gray-50 w-full mx-auto p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <x-admin.heading>Create New Post</x-admin.heading>
            <a href="{{ route('admin.post.index') }}"
                class="py-2 px-4 text-center bg-blue hover:bg-blue-hover text-white w-full basis-36 rounded-lg shadow">
                All Posts
            </a>
        </div>

        <div class="py-4 px-0">
            <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="text" placeholder="Title" name="title"
                    class="py-2 px-4 my-2 bg-white w-full outline-none border-none rounded-lg shadow placeholder:text-black">
                <div class="flex justify-between items-start space-x-2 mt-1">
                    <select name="super_category_id"
                        class="py-2 px-4  bg-white w-full outline-none border-none rounded-lg shadow placeholder:text-black">
                        <option value="#">Select Super Category</option>
                        @foreach ($super_categories as $super_category)
                            <option value="{{ $super_category->id }}">{{ $super_category->name }}</option>
                        @endforeach
                    </select>
                    <select name="category_id"
                        class="py-2 px-4  bg-white w-full outline-none border-none rounded-lg shadow placeholder:text-black">
                        <option value="#">Select category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <select name="sub_category_id"
                        class="py-2 px-4 bg-white w-full outline-none border-none rounded-lg shadow placeholder:text-black">
                        <option value="#">Select sub_category</option>
                        @foreach ($sub_categories as $sub_category)
                            <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                        @endforeach
                    </select>
                    <select name="status_id"
                        class="py-2 px-4 bg-white w-full outline-none border-none rounded-lg shadow placeholder:text-black">
                        <option value="#">Select status</option>
                        @foreach ($statuses as $status)
                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="file" name="image"
                    class="py-2 px-4 my-2 bg-white w-full outline-none border-none rounded-lg shadow placeholder:text-black">
                <textarea name="introduction" rows="3" placeholder="Introduction"
                    class="py-2 px-4 mb-2 bg-white w-full outline-none border-none rounded-lg shadow placeholder:text-black resize-none"></textarea>
                <textarea name="content" rows="3" placeholder="Content" id="myeditorinstance"
                    class="py-2 px-4 bg-white w-full outline-none border-none rounded-lg shadow placeholder:text-black"></textarea>
                <button type="submit"
                    class="py-2 px-4 my-4 bg-blue hover:bg-blue-hover text-white w-full outline-none border-none rounded-lg shadow placeholder:text-black">Create
                    Post</button>
            </form>
        </div>
    </div>
</x-admin-layout>
