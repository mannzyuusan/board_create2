<!DOCTYPE html>
<html lang="{{ str_replace('', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>理系掲示板</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    {{ $reply->likes->count() }}
    </head>
    <body>
        <h1>理系掲示板</h1>
        
    <div>
        <form action="{{ route('home.index') }}" method="GET">
            <input type="text" name="keyword" value="{{ $keyword }}">
            <input type="submit" value="検索">
        </form>
    </div>
        
        <div class='posts'>
            @foreach ($posts as $postlist)
                <div class='postlist'>
                    <h2 class='title'>{{ $postlist->title }}</h2>
                    <p class='body'>{{ $postlist->body }}</p>
                </div>
            @endforeach

                <a href="/home/create">[create]</a>

        </div>

        <div class='paginate'>
            {{ $posts->links() }}
        </div>
            
            <div>
                @if($reply->is_liked_by_auth_user())
                    <a href="{{ route('reply.unlike', ['id' => $reply->id]) }}" class="btn btn-success btn-sm">いいね<span class="badge">{{ $reply->likes->count() }}</span></a>
                    
                    
                @else
                    <a href="{{ route('reply.like', ['id' => $reply->id]) }}" class="btn btn-secondary btn-sm">いいね<span class="badge">{{ $reply->likes->count() }}</span></a>
                @endif
            </div>

    </body>
</html>