<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='alcohols'>
            @foreach ($alcohols as $alcohol)
                <div class='alcohol'>
                    <h2 class='title'>{{ $alcohol->title }}</h2>
                    <p class='body'>{{ $alcohol->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $alcohols->links() }}
        </div>
    </body>
</html>