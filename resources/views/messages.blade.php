<x-layout>
  <x-slot:title>
    Messages
  </x-slot:title>

  <section class="bg-slate-900 py-6 pt-40 h-fit min-h-[100vh]">
    <div class="w-full max-w-6xl mx-auto p-5 text-zinc-50 shadow border-zinc-400 border-[1px] rounded-xl">
      <h2 class="text-3xl mb-5">Messages</h2>

      @foreach ($messages as $message)
      <div class="mb-3 p-3 bg-zinc-200/10 rounded-xl shadow">
        <h3 class="text-xl tracking-wider font-bold mb-3">{{ $message->name }}</h3>
        <p class="mx-auto w-[95%]">{{ $message->message }}</p>
      </div>
      @endforeach
    </div>
  </section>

</x-layout>