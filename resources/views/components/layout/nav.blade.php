<nav class="border-border border-b px-6">
    <div class="max-w-7xl mx-auto flex h-16 items-center justify-between">
        <div>
            <a href="/">
                <img src="/images/logo.png" alt="Logo" class="h-8">
            </a>
        </div>

        <div class="flex items-center gap-5">
            <button
                type="button"
                x-data="{
                    isLight: document.documentElement.classList.contains('light'),
                    toggle() {
                        this.isLight = !this.isLight;
                        document.documentElement.classList.toggle('light', this.isLight);
                        document.cookie = `theme=${this.isLight ? 'light' : 'dark'}; path=/; max-age=31536000; samesite=lax${location.protocol === 'https:' ? '; secure' : ''}`;
                    }
                }"
                x-on:click="toggle()"
                x-bind:aria-label="isLight ? 'Switch to dark mode' : 'Switch to light mode'"
                class="rounded-md border border-border px-3 py-1.5 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
            >
                <span x-text="isLight ? 'Dark mode' : 'Light mode'">Light mode</span>
            </button>

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
