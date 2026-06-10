<x-layout>
    <h1 class="text-4xl  mb-6">Create idea</h1>

    <form action="/ideas" method="post">
        @csrf

        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium ">Create an idea</label>
            <div class="mt-2">
                <textarea id="description" name="description" rows="3"
                    class="textarea block w-full rounded-md bg-white/5 px-3 py-1.5 text-base  outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
            </div>
        </div>

        <x-forms.error name='description' />

        <button type="submit"
            class="rounded-md mt-6 bg-indigo-500 px-3 py-2 text-sm font-semibold  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Create</button>
    </form>

</x-layout>
