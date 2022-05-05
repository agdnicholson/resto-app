<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex justify-end m-2 p-2">
        <a href="{{ route('admin.categories.index') }}" class="px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out">Back To Categories</a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="block p-6 rounded-lg shadow-lg bg-white">
            <form method="post" action="{{ route('admin.categories.update', $category->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="form-label inline-block mb-2 text-gray-700" >Name</label>
                    <input type="text" class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="name" id="name" value="{{ $category->name }}" placeholder="Enter Category Name">

                </div>
                <div class="form-group mb-6">
                    <label for="image" class="form-label inline-block mb-2 text-gray-700">Image</label>
                    <div class="py-5">
                        <img class="w-64" src="{{ Storage::url($category->image) }}" />
                    </div>
                    <input type="file" class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="image" name="image" placeholder="Select New Image">

                </div>
                
                <div class="form-group mb-6">
                    <label for="description" class="form-label inline-block mb-2 text-gray-700">Description</label>
                    <textarea
      class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
      id="description"
      name="description"
      rows="3"
      placeholder="Description"
    >{{ $category->description }}</textarea>
                </div>

                <button type="submit" class="
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out">Update</button>
            </form>
        </div>
    </div>
</x-admin-layout>