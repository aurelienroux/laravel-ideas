<x-layout>
    <h1 class="text-4xl  mb-6">Change idea</h1>

    <form action="/ideas/ {{ $idea->id }}" method="post">
        @csrf
        @method('PATCH')

        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium ">Update your idea</label>
            <div class="mt-2">
                <textarea id="description" name="description" rows="3"
                    class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base  outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">{{ $idea->description }}</textarea>
            </div>

            <x-forms.error name="description" />
        </div>

        <button type="submit"
            class="rounded-md mt-6 bg-indigo-500 px-3 py-2 text-sm font-semibold  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Update</button>

        <button type="submit" form="delete-idea-form"
            class="rounded-md ml-4 mt-6 bg-red-500 px-3 py-2 text-sm font-semibold  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Delete</button>
    </form>

    <form id="delete-idea-form" action="/ideas/{{ $idea->id }}" method="POST">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
