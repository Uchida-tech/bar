<x-app-layout>
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
            <div class="category">
                <h2>Category</h2>
                <!--カテゴリーをテーブルに追加するための一時的機能-->
                <input type="number" name="alcohol[category_id]" value="{{ old('alcohol.category_id') }}"/>
                <!--<select name="alcohol[category_id]">-->
                <!--    @foreach($categories as $category)-->
                <!--        <option value="{{ $category->id }}">{{ $category->name }}</option>-->
                <!--    @endforeach-->
                <!--</select>-->
            </div>
            <!--レート機能をテーブルに追加するための一時的機能-->
            <div class="rate">
                <h2>Rate</h2>
                <input type="number" name="alcohol[rate]" value="{{ old('alcohol.rate') }}"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">
            [<a href="/">back</a>]
        </div>
    </body>
</x-app-layout>