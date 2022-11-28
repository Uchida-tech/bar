<x-app-layout>
    <body>
        <h1 class="name">
            {{ $alcohol->name }}
        </h1>
        <div class="content">
            <div class="content_alcohol">
                <h3>本文</h3>
                <p>{{ $alcohol->comment}}</p>
                <a href="">{{ $alcohol->category->name }}</a>
            </div>
        </div>
        <p class="edit">[<a href="/alcohols/{{ $alcohol->id }}/edit">edit</a>]</p>
        <div class="back">
            [<a href="/">back</a>]
        </div>
    </body>
</x-app-layout>