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
                <input type="text" name="alcohol[name]"/>
            </div>
            <div class="body">
                <h2>オススメ理由</h2>
                <textarea name="alcohol[comment]"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>