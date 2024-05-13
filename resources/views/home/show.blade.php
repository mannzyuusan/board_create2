<x-app-layout>
    <x-slot name="投稿詳細">
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-amber-50 overflow-hidden shadow-sm sm:rounded-lg p-5">
        <body>
            <div>
                <center><h1 class="title text-orange-500">{{$post->title}}</h1>
                <p2 class="text-gray-600">{{$post->body}}</p2>
                <div>
                    @if($post->image_url)
                        <img src="{{ $post->image_url }}" alt="画像が読み込めません。" width="600px"/>
                    @elseif($post->pdf_url)
                        <embed src="{{ $post->pdf_url }}" type="application/pdf" width="100%" height="600px" />
                    @else
                        <p></p>
                    @endif
                    </center>
                </div>
            </div>
            <div class="content">
                <div class="content__post">
                </div>
            </div>
            <br>
            <div class="footer">
                <a href="/home/{{$post->category_id}}" class="btn_04">戻る</a>
            </div>
        </body>
    </div>
</x-app-layout>
