<x-layout>
    <x-slot:title>Articles</x-slot:title>
    <section class="border-[1px] border-zinc-200 p-6 rounded-2xl">
        <div class="flex items-center gap-10 font-black text-zinc-200">
            <a href="/addArticle"
                class="font-black text-slate-900 bg-zinc-200 shadow-2xl px-8 py-2 text-8xl rounded-2xl hover:outline-2 outline-cyan-600">+</a>
            <h2 class="text-7xl w-full ml-[25%]">Articles</h2>
        </div>
        <div class="mt-2 border-t-[1px] border-zinc-500 pt-5 space-y-5">
            @foreach ($articles->all() as $article)
            <x-article-component :article="$article"></x-article-component>
            @endforeach
        </div>
    </section>
</x-layout>