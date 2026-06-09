<x-layout>
    <div class="card bg-neutral p-6 mt-6">
        <h1 class="text-2xl">Idea {{ $idea->id }}</h1>

        <div class="mt-6 ">
            <h2 class="text-xl mb-4">
                {{ $idea->description }}
            </h2>

            <a href="/ideas/{{ $idea->id }}/edit"
                class="rounded-md mt-6 bg-indigo-500 px-3 py-2 text-sm font-semibold  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                Edit
            </a>
        </div>
    </div>

</x-layout>
