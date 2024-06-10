<x-admin-layout>
    <div class="bg-white w-11/12 mx-auto p-4 rounded-lg shadow">
        <div class="flex justify-between items-center">
            <x-admin.heading>All statuses</x-admin.heading>
            <a href="{{ route('admin.status.create') }}"
                class="py-2 px-4 text-center bg-blue text-white w-full basis-36 rounded-lg shadow">
                Create Statuss
            </a>
        </div>

        <div class="relative overflow-x-auto rounded-lg shadow bg-gray-50 mt-4">

            <div class="px-4 py-2">
                {{ $statuses->links() }}
            </div>

            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="text-xs text-gray-700 uppercase">
                    <tr>
                        <th scope="col" class="px-2 py-3">
                            Sr. No.
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Classes
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
                    @foreach ($statuses as $key => $status)
                        <tr class="bg-white hover:bg-gray-50 cursor-pointer border-b ">
                            <td class="px-6 py-4">
                                {{ $key + 1 }}
                            </td>
                            <td class="px-2 py-4">
                                {{ $status->name }}
                            </td>
                            <td class="px-2 py-4">
                                {{ $status->classes }}
                            </td>
                            <td class="px-2 py-4">
                                {{ $status->updated_at->diffForHumans() }}
                            </td>
                            <td class="px-2 py-4 flex space-x-2 m-auto">
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
                {{ $statuses->links() }}
            </div>

        </div>
    </div>






</x-admin-layout>
