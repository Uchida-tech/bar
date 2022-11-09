<x-app-layout>
    <x-slot name="header">
        　HOME
    </x-slot>
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
        <!--認証済みユーザーの表示-->
        <h2>{{ Auth::user()->name }}</h2> 
    </body>
    <script>
        function deleteAlcohol(id) {
            'use strict'
    
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</x-app-layout>