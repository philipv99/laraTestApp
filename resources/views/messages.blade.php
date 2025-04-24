<x-layout>
    <x-slot:title>
        Messages
    </x-slot:title>

    <section class="p-7 text-zinc-50 border-zinc-200 border-[1px] rounded-2xl">
        <h2 class="text-3xl mb-5">Messages</h2>

        @foreach ($messages as $message)
        <div class="mb-3 p-3 bg-zinc-200/10 rounded-xl shadow">
            <h3 class="text-xl tracking-wider font-bold mb-3">{{ $message->name }}</h3>
            <p class="mx-auto w-[95%]">{{ $message->message }}</p>
        </div>
        @endforeach
    </section>
</x-layout>