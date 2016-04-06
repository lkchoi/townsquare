@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        @include('articles.single', ['article' => $article, 'full' => true])
    </div>
</div>
@stop