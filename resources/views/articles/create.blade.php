@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <form action="/articles" method="post">
            <div class="form-group pull-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <h3>New Post</h3>
            <div class="form-group">
                <input type="text" name="author" class="form-control" placeholder="Author" />
            </div>
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Title" />
            </div>
            <div class="form-group">
                <input type="text" name="subheader" class="form-control" placeholder="Sub-header" />
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="3" name="abstract" placeholder="Abstract"></textarea>
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="10" name="content" placeholder="Article Body"></textarea>
            </div>
        </form>
    </div>
</div>
@stop