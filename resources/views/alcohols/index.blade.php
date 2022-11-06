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
                    <a href="/alcohols/{{ $alcohol->id }}">{{ $alcohol->name }}</a>
                    <p class='body'>{{ $alcohol->comment }}</p>
                    <form action="/alcohols/{{ $alcohol->id }}" id="form_{{ $alcohol->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteAlcohol({{ $alcohol->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $alcohols->links() }}
        </div>
        <div class='create'>
            <a href='/alcohols/create'>create</a>
        </div>
    </body>
    <script>
        function deleteAlcohol(id) {
            'use strict'
    
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</html>