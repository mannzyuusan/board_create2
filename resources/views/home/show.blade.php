
    <x-app-layout>
    <x-slot name="投稿詳細">
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
    
        <body>
            
        <h1 class="title">
            <p>{{$post->title}}</p>
            <p>{{$post->body}}</p>
            
            <div>
                
                @if(!empty($post->image_url))
                    <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
                @else
                    <p>画像がありません。</p>
                @endif
            </div>
                      
        </h1>
        <div class="content">
            <div class="content__post">
               
                    
            </div>
        </div>
            
        <div class="footer">
            <a href="/home/{{$post->category_id}}">戻る</a>
        </div>
     
    </x-app-layout>