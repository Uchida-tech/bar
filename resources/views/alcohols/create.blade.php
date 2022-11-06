<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/alcohols" method="POST">
            @csrf
            <div class="name">
                <h2>お酒の名称</h2>
                <input type="text" name="alcohol[name]" value="{{ old('alcohol.name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('alcohol.name') }}</p>
            </div>
            <div class="body">
                <h2>オススメ理由</h2>
                <textarea name="alcohol[comment]">{{ old('alcohol.comment') }}</textarea>
                <p class="title__error" style="color:red">{{ $errors->first('alcohol.comment') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">
            [<a href="/">back</a>]
        </div>
    </body>
</html>