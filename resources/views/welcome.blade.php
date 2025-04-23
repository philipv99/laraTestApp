<x-layout>
  <x-slot:title>
    Contact os
  </x-slot:title>


  <section class="bg-slate-900 py-6 pt-40 h-fit min-h-[100vh]">
    <div class="w-full max-w-6xl mx-auto p-5 text-zinc-50 shadow bg-zinc-700 rounded-xl">
      <h2 class="text-3xl mb-5">Contact me</h2>

      <form action="/contact" method="POST" novalidate>
        @csrf


        @if($errors->any())
        <div class="m-2 p-2 border-2 border-rose-500 rounded-md">
          <ul>
            @foreach ($errors->all() as $er)
            <li>{{ $er }}</li>
            @endforeach
          </ul>
        </div>
        @endif


        <div class="mb-4">
          <label for="name" class="mb-3 text-lg">Name</label>
          <input type="text" id="name" name="name" required placeholder="Type your Name"
            class="w-full p-3 rounded-lg shadow-2xl tracking-wider placeholder:text-slate-300 bg-orange-500/20 focus-within:bg-orange-500/70 focus-within:outline-0"
            value="{{ old('name') }}">
        </div>

        <div class="mb-4">
          <label for="mail" class="mb-3 text-lg">Email</label>
          <input type="text" id="mail" name="mail" required placeholder="Email"
            class="w-full p-3 rounded-lg shadow-2xl tracking-wider bg-orange-500/20 placeholder:text-slate-300 focus-within:bg-orange-500/70 focus-within:outline-0"
            value="{{ old('mail') }}">
        </div>

        <div class="mb-4">
          <label for="message" class="mb-3 text-lg">Message</label>
          <textarea type="text" id="message" name="message" required rows="10"
            placeholder="Type in your message"
            class="w-full p-3 rounded-lg shadow-2xl tracking-wider bg-orange-500/20 focus-within:bg-orange-500/70 placeholder:text-slate-300 focus-within:outline-0">{{ old('message') }}</textarea>
        </div>

        <div class="w-full flex justify-center">
          <input type="submit" class="bg-orange-500 w-[50%] hover:bg-orange-400 tracking-widest font-black p-2 mx-auto rounded-lg text-lx">
        </div>

      </form>

    </div>
    </div>
  </section>
</x-layout>