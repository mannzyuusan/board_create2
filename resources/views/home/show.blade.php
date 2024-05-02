
    <x-app-layout>
    <x-slot name="投稿詳細">
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
    
        <body>
        <h1 class="title">
            @foreach($postId ad $postlist)
            {{ $postlist->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $postlist->body }}</p>    
            </div>
        </div>
            @endforeach
        <div class="footer">
            <a href="/main">戻る</a>
        </div>
     
    </x-app-layout>