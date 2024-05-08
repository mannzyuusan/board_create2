
    <x-app-layout>
    <x-slot name="index">
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
    
        <h1>{{$category->name}}</h1>
        
            <div>
                <form action="{{ route('home.main') }}" method="GET" class="search_container">
                    <input type="text" name="keyword" value="{{ $keyword }}" >
                    <input type="submit" value="検索">
                </form>
            </div>
        
        
        <div class='posts'>
            
            @foreach ($posts as $postlist)
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="background:blue bg-black overflow-hidden shadow-sm sm:rounded-lg">
                        <div class='postlist'>
                            <h2 class='title' >
                                <a href="/home/{{$postlist->category_id}}/{{$postlist->id}}" class="btnlinestretches2">{{ $postlist->title }}</a>
                            </h2>
                            
                            <p class='body'>{{ $postlist->body }}</p>
                            
                            
                                <div>
                                    @if($postlist->is_liked_by_auth_user())
                                        <a href="{{ route('reply.unlike', ['id' => $postlist->id]) }}" class="btn-success btn-sm">
                                            <img src="{{ asset('/img/heart.jpg') }}" style="width:25px; height:auto;">
                                        </a>{{ optional($postlist->likes)->count() ?? 0 }}
                            
                            
                                    @else
                                        <a href="{{ route('reply.like', ['id' => $postlist->id]) }}" class="btn-secondary btn-sm">
                                            <img src="{{ asset('/img/unheart.png') }}" style="width:20px; height:auto;">
                                        </a>{{ optional($postlist->likes)->count() ?? 0 }}
                                    @endif
                                </div>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
                

                <a href="/home/create" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">create</a>
            
                <a href="/like/sort" class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded">いいね順で並び替える</a>
        </div>

        <div class='paginate'>
            {{ $posts->links() }}
        </div>
            
     
    </x-app-layout>