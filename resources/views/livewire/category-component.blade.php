<div class="w-full">
    {{-- Alert hilang --}}
    @session('success')
        <div class="relative bg-teal-100 border-t-4 border-teal-500 rounded text-teal-900 px-4 py-3 shadow-md my-3 dark:bg-teal-200 dark:text-teal-900"
            role="alert">
            <div class="flex items-center justify-between">
                <div>
                    <p class="p-1">{{ session('success') }}</p>
                </div>
                <button type="button"
                    class="text-teal-700 hover:text-teal-900 text-2xl bg-transparent border-0 dark:text-teal-900"
                    onclick="this.parentElement.parentElement.style.display='none';">
                    &times;
                </button>
            </div>
        </div>
    @endsession

    {{-- Flash --}}

    <div class="flex">
        <div class="w-1/2">
            <a href="{{ route('categories.create') }}"
                class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add
                Category</a>
        </div>
        <div class="w-1/2 text-end">
            <input type="text" class="form-control w-full md:w-1/2 rounded p-2 border-blue-600" placeholder="Search" wire:keydown="searchCategory" wire:model="search">
        </div>
    </div>

    {{-- table data --}}
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden dark:bg-gray-800 dark:text-gray-100 mt-5">
        <thead class="bg-blue-600 text-white dark:bg-blue-700">
            <tr>
                <th class="py-3 px-6 text-left">No. </th>
                <th class="py-3 px-6 text-left">Name</th>
                <th class="py-3 px-6 text-left">Description</th>
                <th class="py-3 px-6 text-left">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- Pagination --}}
            @foreach ($categories as $i => $category)
                <tr class="border-b dark:border-gray-600">
                    <td class="py-3 px-6 text-left">{{ $i + 1 }}</td>
                    <td class="py-3 px-6 text-left">{{ $category->name }}</td>
                    <td class="py-3 px-6 text-left">{{ $category->description }}</td>
                    <td class="py-3 px-6 text-left">
                        <a href="{{ route('categories.edit', $category->id) }}"
                            class="inline-block bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 dark:bg-yellow-600 dark:hover:bg-yellow-700">
                            Edit
                        </a>
                        <a href="{{ route('categories.show', $category->id) }}"
                            class="inline-block bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-green-600 dark:hover:bg-green-700">
                            Detail
                        </a>

                        {{-- tombol delete --}}
                        <form action="{{ route('categories.destroy', $category->id) }}" method="post" class="inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="return confirm('Are you sure?')"
                                class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 dark:bg-red-600 dark:hover:bg-red-700">
                                Delete
                            </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
