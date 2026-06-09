<x-layout>
    <h1 class="text-4xl  mb-6">Ideas</h1>

    @if ($ideas->count())
        <div class="mt-6">
            <h2 class="text-2xl mb-4">
                @if ($ideas->count())
                    Total ideas: {{ $ideas->count() }}
                @endif
            </h2>

            <ul class="grid gap-y-4 grid-cols-2 gap-x-4">
                @foreach ($ideas as $idea)
                    <x-card :$idea />
                @endforeach
            </ul>
        </div>
    @else
        <p>
            No ideas yet.
        </p>
    @endif
    <a href="/ideas/create" class="underline mt-10 block">Create a new one!</a>
</x-layout>
