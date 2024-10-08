<x-admin-layout>
    <div class="bg-gray-50 w-full mx-auto p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <x-admin.heading>Create New Status</x-admin.heading>
            <a href="{{ route('admin.status.index') }}"
                class="py-2 px-4 text-center bg-blue text-white w-full basis-36 rounded-lg shadow">
                All Statuses
            </a>
        </div>

        <div class="p-4">
            <form action="{{ route('admin.status.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="Name" name="name"
                    class="py-2 px-4 my-1 bg-white w-full outline-none border-none rounded-lg shadow placeholder:text-black">
                <input type="text" placeholder="Classes" name="classes"
                    class="py-2 px-4 my-1 bg-white w-full outline-none border-none rounded-lg shadow placeholder:text-black">
                <button type="submit"
                    class="py-2 px-4 my-1 bg-blue text-white w-full outline-none border-none rounded-lg shadow placeholder:text-black">Create
                    Status</button>
            </form>
        </div>
    </div>
</x-admin-layout>
