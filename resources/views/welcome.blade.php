@extends('layouts.default')
@section('head')
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
@stop

@section('content')
<div class="container">
    <div class="content">
        <div class="title">
            <h1>Townsquare</h1>
            <p class="lead">Coding Test</p>
        </div>
        <div class="main">
            <div class="row">
                <div class="col-sm-6">
                    <p>
                        Make a simple responsive website with the use of but not required:
                    </p>
                    <ol>
                        <li>Javascript or JS Libraries such as JQuery, React.js</li>
                        <li>Frameworks as Angular, Bootstrap, etc</li>
                        <li>Any other suggested Library or Framework you feel comfortable to work with</li>
                    </ol>
                    <p>
                        The website must include at least the following:
                    </p>
                    <ol>
                        <li>Mini-CMS: Write a simple tool to enter news articles. The tool should interact with a custom API that saves/reads data to/from a plain JSON file.</li>
                        <li>Make a simple responsive front-end site composed of two pages that interacts with your custom API to read the news articles:</li>
                        <ol>
                            <li>Home page with the first 3 news articles sorted by date from newest to oldest, with a “load more” button to load 3 more news till the end.</li>
                            <li>Inner page triggered by clicking the title of the news in the home page, this page contains the full “news”; title, sub-header, date, author and abstract of the content that expands on clicking “read more”.</li>
                        </ol>
                    </ol>
                    <p>
                         * Feel free to work on your localhost and send us the files along with any specific explanations so that we can test it ourselves. Or you can post this to a public host and give us the URL, but please also send us all the files in a ZIP format for our review. Be prepared to present (via screenshare or in person) your work and walk us through how you created it.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
