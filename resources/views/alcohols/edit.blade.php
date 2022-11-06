<!-- body内だけを表示しています。 -->
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/alcohols/{{ $alcohol->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='alcohol[name]' value="{{ $alcohol->name }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='alcohol[comment]' value="{{ $alcohol->comment }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>