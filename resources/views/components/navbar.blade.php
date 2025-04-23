<header class="fixed z-20 p-4 w-full bg-gradient-to-br to-indigo-700 from-indigo-900">
    <div class="flex justify-between items-center max-w-[1200px] mx-auto font-bold text-white tracking-wider">
        <h1 class="text-5xl">Title</h1>
        <ul class="flex gap-8 text-lg capitalize">
            <x-navbar-link href="/messages" :active="request()->is('messages')">Messages</x-navbar-link>
            <x-navbar-link href="/" :active="request()->is(patterns: '/')">Post Messages</x-navbar-link>
        </ul>
    </div>
</header>