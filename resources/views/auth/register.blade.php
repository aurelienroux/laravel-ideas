<x-layout>
    <form action="/register" method="POST">
        @csrf

        <fieldset class="mx-auto fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
            <legend class="fieldset-legend">Register</legend>

            <label for="name" class="label">Name</label>
            <input type="name" name="name" class="input" placeholder="Name" required />

            <label for="email" class="label">Email</label>
            <input type="email" name="email" class="input" placeholder="Email" required />

            <label for="password" class="label">Password</label>
            <input type="password" name="password" class="input" placeholder="Password" required />

            <button type="submit" class="btn btn-neutral mt-4">Register</button>
        </fieldset>
    </form>
</x-layout>
