<nav class="border-border border-b px-6">
    <div class="max-w-7xl mx-auto flex h-16 items-center justify-between">
        <div>
            <a href="/">
                <img src="/images/logo.png" alt="Logo" class="h-8">
            </a>
        </div>

        <div class="flex items-center gap-5">
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    @method('DELETE')

                    <button>Logout</button>
                </form>
            @endauth

            @guest
                <a href="/login">Sign in</a>
                <a href="/register" class="btn">Register</a>
            @endguest
        </div>
    </div>
</nav>
