<x-layout>
    <x-slot:title>
        Contact os
    </x-slot:title>

    <section class="w-full p-7 text-zinc-50 border-[1px] border-zinc-200 rounded-2xl">
        <h2 class="text-3xl mb-5">Contact me</h2>

        <form action="/contact" method="POST" novalidate>
            @csrf

            @if($errors->any())

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
    </section>
</x-layout>