<div class="flex min-h-[calc(100vh-4rem)] items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="text-center">
            <h1 class="text-2xl font-bold">{{ $title }}</h1>
            <p class="text-sm text-muted-foreground mt-2">{{ $description }}</p>
        </div>

        {{ $slot }}
    </div>
