<x-admin-layout>
    <div class="bg-white w-11/12 mx-auto p-4 rounded-lg shadow">
        <div class="flex justify-between items-center mb-2">
            <x-admin.heading>All categories</x-admin.heading>
            <a href="{{ route('admin.category.create') }}"
                class="py-2 px-4 text-center bg-blue text-white w-full basis-52 rounded-lg shadow">
                Create New Category
            </a>
        </div>

        <div class="relative overflow-x-auto rounded-lg shadow bg-gray-50">

            <div class="px-4 py-2">
                {{-- {{ $categories->links() }} --}}
            </div>

            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="text-xs text-gray-700 uppercase">
                    <tr>
                        <th scope="col" class="px-2 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Content
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Super_Category
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Updated
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr class="bg-white hover:bg-gray-50 cursor-pointer border-b ">
                            <th scope="row" class="p-2 font-medium text-gray-900 whitespace-nowrap ">
                                <img src="{{ asset($category->image) }}" alt="image"
                                    class="w-14 h-14 object-cover rounded-full">
                            </th>
                            <td class="p-2">
                                {{ $category->name }}
                            </td>
                            <td class="p-2 line-clamp-3">
                                {{ $category->description }}
                            </td>
                            <td class="p-2">
                                {{ $category->SuperCategory->name }}
                                {{-- @if ($category->super_id == 1)
                                    Animal
                                @else
                                    Bird
                                @endif --}}
                            </td>
                            <td class="p-2">
                                {{ $category->updated_at->diffForHumans() }}
                            </td>
                            <td class="p-2 flex space-x-2 m-auto">
                                <a href="#">
                                    <i class="fas fa-lg fa-trash text-red"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-regular fa-lg fa-pen-to-square text-blue "></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="px-4 py-2">
                {{-- {{ $categorys->links() }} --}}
            </div>

        </div>
    </div>
</x-admin-layout>
