<article class="p-4 bg-zinc-400 rounded-2xl font-bold text-lg">
    <div class="flex justify-between">
        <h3 class="text-4xl">{{ $article->header }}</h3>
        <div class="flex gap-2">
            <a href="{{ route('article.edit', $article->id) }}" class="p-1 rounded border-[1px] border-slate-900 hover:bg-zinc-100 self-center">Edit</a>
            <form action="{{ route('article.delete', $article->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="p-1 rounded border-[1px] border-rose-600 hover:bg-rose-400 self-center">Remove</button>
            </form>
        </div>
    </div>
    <h5 class="italic font-light text-gray-700">{{ $article->author }}</h5>
    <div class="border-t-2 border-amber-50 my-2 p-2 pb-0">
        <p>
            {{ $article->body }}
        </p>

        <div class="flex justify-between text-sm italic text-neutral-900 font-light m-0 mt-2">
            <div>
                <p>Posted on:</p>
                <p>{{ \Carbon\Carbon::parse($article->created_at)->format('h:m - d/m/Y') }}</p>
            </div>
            <div>
                <p>Last edit on:</p>
                <p>{{ \Carbon\Carbon::parse($article->updated_at)->format('h:m - d/m/Y') }}</p>
            </div>
        </div>
    </div>
</article>