@extends('layouts.default')
@section('content')
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="article-list">
            @foreach ($articles as $article)
                @include('articles.single', compact('article'))
            @endforeach
        </div>
        <a id="load-more" class="btn btn-block btn-default">Load More</a>
    </div>
</div>
@stop
@section('tail')
<script type="text/javascript" src="/js/load-more.js"></script>
@stop