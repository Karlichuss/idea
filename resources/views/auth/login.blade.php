<x-layout>
    <x-form title="Login" description="Enter your credentials to access your account">
        <form action="/login" method="POST" class="mt-6 space-y-4">
            @csrf
            <x-form.field name="email" label="Email" type="email" />
            <x-form.field name="password" label="Password" type="password" />
            <div>
                <button type="submit" class="btn mt-2 h-10 w-full">Log In</button>
            </div>
        </form>
    </x-form>
</x-layout>
