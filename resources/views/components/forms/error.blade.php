@props([
    'name' => 'required',
])

@error($name)
    <div class="mt-1 text-xs text-red-500">
        {{ $message }}
    </div>
@enderror
