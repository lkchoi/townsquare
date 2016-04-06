<article id="article-{{ $article->id }}">
    <div class="header">
        <div class="text-muted text-right" style="margin-left:1em;">
            {{ $article->created_at->toFormattedDateString() }}
        </div>
        <div class="title">
            <a href="/articles/{{ $article->id }}" class="title">{{ $article->title }}</a>
        </div>
        <div class="subject text-muted lead">
            {{ $article->subheader }}
        </div>
        <div class="byline" style="margin-top:-1em;margin-bottom:2em;">
            by {{ $article->author }}
        </div>
    </div>
    <p>
        @if (empty($full))
            {{ $article->abstract }}
        @else
            {!! $article->html !!}
        @endif
    </p>
</article>
