<div class="w-full">
    <div class="flex">
        <div class="w-1/2">
            <button class="btn btn-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add
                Category</button>
        </div>
        <div class="w-1/2 text-end">
            {{-- stiling form --}}
            <input type="text" class="form-control w-1/2 rounded p-2 border-blue-600" placeholder="Search">
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
            @for ($i = 0; $i < 5; $i++)
            <tr class="border-b dark:border-gray-600">
                <td class="py-3 px-6 text-left">{{ $i+1 }}</td>
                <td class="py-3 px-6 text-left">John Doe</td>
                <td class="py-3 px-6 text-left">Lorem ipsum dolor sit amet.</td>
                <td class="py-3 px-6 text-left">
                    <button
                        class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 dark:bg-yellow-600 dark:hover:bg-yellow-700">
                        Edit
                    </button>
                    <button
                        class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-green-600 dark:hover:bg-green-700">
                        Detail
                    </button>
                    <button
                        class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 dark:bg-red-600 dark:hover:bg-red-700">
                        Delete
                    </button>
                </td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>
