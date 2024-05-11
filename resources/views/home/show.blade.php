<x-app-layout>
    <x-slot name="投稿詳細">
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="background:blue bg-cyan-100 overflow-hidden shadow-sm sm:rounded-lg">
        <body>
            <div>
                <h1 class="title">本題：{{$post->title}}</h1>
                <p>本文：{{$post->body}}</p>
                <div>
                    @if(!empty($post->image_url))
                        <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
                    @else
                        <p></p>
                    @endif
                </div>
            </div>
            <div class="content">
                <div class="content__post">
                </div>
            </div>
            <div class="footer">
                <a href="/home/{{$post->category_id}}" class="btn_04">戻る</a>
            </div>
        </body>
    </div>
</x-app-layout>
