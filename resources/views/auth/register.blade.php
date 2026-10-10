<x-layout>
    <x-form title="Register" description="Create a new account">
        <form action="/register" method="POST" class="mt-6 space-y-4">
            @csrf
            <x-form.field name="name" label="Name" />
            <x-form.field name="email" label="Email" type="email" />
            <x-form.field name="password" label="Password" type="password" />
            <div>
                <button type="submit" class="btn mt-2 h-10 w-full">Register</button>
            </div>
        </form>
    </x-form>
</x-layout>
