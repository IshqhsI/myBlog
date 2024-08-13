<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md dark:bg-gray-800">
    <h5 class="text-lg font-medium mb-6 dark:text-gray-100 text-gray-700">Add Category</h5>
    <form action="" method="post" wire:submit.prevent="createCategory" class="space-y-6">
        @csrf
        <div class="mb-4 ">
            <label for="name" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Name</label>
            <input type="text" id="name" name="name"
                class="form-control block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 dark:focus:ring-indigo-600 focus:border-indigo-500 dark:focus:border-indigo-600 sm:text-sm dark:bg-gray-700 dark:text-gray-100"
                wire:model="name">
            @error('name')
                <span class="text-red-500 text-sm dark:text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description"
                class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Description</label>
            <textarea id="description" name="description" rows="4"
                class="form-control block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 dark:focus:ring-indigo-600 focus:border-indigo-500 dark:focus:border-indigo-600 sm:text-sm dark:bg-gray-700 dark:text-gray-100"
                wire:model="description"></textarea>
            @error('description')
                <span class="text-red-500 text-sm dark:text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <button type="submit"
                class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline dark:bg-blue-600 dark:hover:bg-blue-700">
                Submit
            </button>
        </div>
    </form>
</div>
