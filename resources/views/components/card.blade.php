@props(['idea'])

<a href="/ideas/{{ $idea->id }}" class="card bg-neutral text-neutral-content">
    <div class="card-body items-center text-center">
        <h2 class="card-title">{{ $idea->id }}</h2>
        <p>{{ $idea->description }}</p>
    </div>
</a>
