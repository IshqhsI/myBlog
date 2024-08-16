<div class="mx-auto bg-white p-6 rounded-lg shadow-md dark:bg-gray-800">
    <h5 class="text-lg font-medium mb-6 dark:text-gray-100 text-gray-700">Edit Post</h5>
    <form action="{{ route('posts.update', $post->id) }}" method="post" class="space-y-6" enctype="multipart/form-data">
        @csrf
        @method('put')
        {{-- @dd($post->slug) --}}
        <div class="lg:flex">
            <div class="w-full lg:w-1/2">
                <div class="mb-2">
                    <label for="title"
                        class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Title</label>
                    <input type="text" id="title" name="title"
                        class="form-control block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 dark:focus:ring-indigo-600 focus:border-indigo-500 dark:focus:border-indigo-600 sm:text-sm dark:bg-gray-700 dark:text-gray-100 @error('name') border-red-500 dark:border-red-600  @enderror"
                        wire:model="title" value="{{ $post->title }}" wire:keyup="generateSlug" required>
                    @error('title')
                        <span class="text-red-500 text-sm dark:text-red-400">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="w-full lg:w-1/2 p-0 lg:ps-3">
                <div class="mb-2">
                    <label for="slug"
                        class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Slug</label>
                    <input type="text" id="slug" name="slug"
                        class="form-control block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 dark:focus:ring-indigo-600 focus:border-indigo-500 dark:focus:border-indigo-600 sm:text-sm dark:bg-gray-700 dark:text-gray-100 @error('name') border-red-500 dark:border-red-600  @enderror"
                        value="{{ $slug !== null ? $slug : $post->slug }}" required readonly>
                    @error('slug')
                        <span class="text-red-500 text-sm dark:text-red-400">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-4" wire:ignore>
            <label for="content" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Content</label>
            <textarea id="content" name="content" rows="4"
                class="form-control block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 dark:focus:ring-indigo-600 focus:border-indigo-500 dark:focus:border-indigo-600 sm:text-sm dark:bg-gray-700 dark:text-gray-100 @error('content') border-red-500 dark:border-red-600  @enderror">
                            {!! $post->content !!}
            </textarea>
            @error('content')
                <span class="text-red-500 text-sm dark:text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="lg:flex">
            <div class="lg:w-1/2 w-full">
                <div class="mb-2">
                    <label for="image"
                        class="block text-gray-700 dark:text-gray-300 text-sm font-semibold mb-2">Image</label>
                    <input type="file" id="image" name="image" wire:model="image"
                        class="form-control block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 dark:focus:ring-indigo-600 focus:border-indigo-500 dark:focus:border-indigo-600 sm:text-sm dark:bg-gray-700 dark:text-gray-100"
                        accept="image/*">
                    <img src="{{ asset('storage/posts/' . $post->image) }}" alt="" class="w-full mt-2">
                    @error('image')
                        <span class="text-red-500 text-sm dark:text-red-400">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="w-full lg:w-1/2 p-0 lg:ps-3">
                <div class="mb-2">
                    <label for="category"
                        class="block text-gray-700 dark:text-gray-300 text-sm font-semibold mb-2">Category</label>
                    <select id="category" name="category_id" wire:model="category"
                        class="block w-full mt-1 text-sm border-gray-300 dark:border-gray-600 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-800 dark:text-gray-300">
                        <option class="" value="" disabled selected>Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $post->category_id == $category->id ? ' selected' : '' }}>{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-red-500 text-sm dark:text-red-400">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="w-full lg:w-1/2 p-0 lg:ps-3 block">
                <div class="mb-2">
                    {{-- Checkbox --}}
                    <label for="tag"
                        class="block text-gray-700 dark:text-gray-300 text-sm font-semibold mb-2">Tag</label>
                    <div class="w-full flex flex-wrap">
                        @foreach ($tags as $inex => $tag)
                            <div class="w-1/3 p-0">
                                <input type="checkbox" class="mr-2 form-checkbox" id="tag-{{ $tag->id }}"
                                    name="tags[]" value="{{ $tag->id }}"
                                    {{ in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' checked' : '' }}>
                                <label for="tag-{{ $tag->id }}"
                                    class="inline-block text-gray-700 dark:text-gray-300 text-sm font-semibold mb-2">{{ $tag->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    @error('tags')
                        <span class="text-red-500 text-sm dark:text-red-400">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <button type="submit"
                class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline dark:bg-blue-600 dark:hover:bg-blue-700">
                Submit
            </button>
        </div>
    </form>
</div>
