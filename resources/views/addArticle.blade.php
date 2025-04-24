<x-layout>
    <x-slot:title>Add Article</x-slot:title>

    <a href="/articles" class="p-3 text-2xl font-semibold mb-6 bg-zinc-200 rounded-xl">
        < Back</a>

            <section class="text-zinc-100 my-7 p-6 border-[1px] rounded-xl border-zinc-200 space-x-52">

                <h1 class="text-4xl tracking-wide text-center mx-auto">Create new article</h1>
                <form action="{{ isset($article) ? route('article.update', $article->id) : route('article.store') }}" method="POST">
                    @csrf
                    @if(isset($article))
                    @method('PUT')
                    @endif

                    @if($errors->any())
                    <div class="m-2 p-2 border-2 border-rose-500 rounded-md max-w-2xl mx-auto">
                        <ul>
                            @foreach ($errors->all() as $er)
                            <li>{{ $er }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="text-zinc-100 flex flex-col mx-auto max-w-5xl mb-5">
                        <label for="author" class="text-zinc-100 text-xl ml-2 mb-1">Author</label>
                        <input type="text" id="author" name="author"
                            class="border-[1px] border-zinc-400 p-2 rounded-lg focus-within:bg-zinc-500 focus-within:outline-0"
                            placeholder="Author" value="{{ $article->author ?? old('author')  }}">
                    </div>

                    <div class="text-zinc-100 flex flex-col mx-auto max-w-5xl mb-5">
                        <label for="header" class="text-zinc-100 text-xl ml-2 mb-1">Header</label>
                        <input type="text" id="header" name="header"
                            class="border-[1px] border-zinc-400 p-2 rounded-lg focus-within:bg-zinc-500 focus-within:outline-0"
                            placeholder="Header" value="{{ $article->header ?? old('header') }}">
                    </div>

                    <div class="text-zinc-100 flex flex-col mx-auto max-w-5xl mb-5">
                        <label for="body" class="text-zinc-100 text-xl ml-2 mb-1">Breed text</label>
                        <textarea type="text" id="body" name="body"
                            class="border-[1px] border-zinc-400 p-2 rounded-lg focus-within:bg-zinc-500 focus-within:outline-0"
                            placeholder="Breed text">{{ $article->body ?? old('body') }}</textarea>
                    </div>

                    <div class="w-full flex justify-center">
                        <input type="submit" class="p-2 rounded-xl mx-auto my-2 w-2xl bg-zinc-300 hover:bg-zinc-100 text-2xl font-semibold text-slate-950">

                    </div>
                </form>
            </section>
</x-layout>