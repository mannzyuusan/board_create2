
    <x-app-layout>
    <x-slot name="index">
    </x-slot>
    
        <h1>理系掲示板</h1>
        
    <div>
        <form action="{{ route('home.index') }}" method="GET">
            <input type="text" name="keyword" value="{{ $keyword }}">
            <input type="submit" value="検索">
        </form>
    </div>
        
        <div class='posts'>
            
            @foreach ($posts as $postlist)
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class='postlist'>
                            <h2 class='title'>{{ $postlist->title }}</h2>
                            <p class='body'>{{ $postlist->body }}</p>
                            <div class='postlist' data-likes="{{ optional($postlist->likes)->count() ?? 0 }}">
                            
                            <div>
                                @if($postlist->is_liked_by_auth_user())
                                    <a href="{{ route('reply.unlike', ['id' => $postlist->id]) }}" class="btn btn-success btn-sm">いいね<span class="badge">{{ $postlist->likes->count() }}</span></a>
                        
                        
                                @else
                                    <a href="{{ route('reply.like', ['id' => $postlist->id]) }}" class="btn btn-secondary btn-sm">いいね<span class="badge">{{ $postlist->likes->count() }}</span></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
                

                <a href="/home/create">[create]</a>
            
                <a href="/like/sort">[いいね順で並び替える]</a>
        </div>

        <div class='paginate'>
            {{ $posts->links() }}
        </div>
     
     <script>
        document.addEventListener('DOMContentLoaded', function () {
            const postsList = document.getElementById('postsList');
            const posts = Array.from(postsList.getElementsByClassName('postlist'));

            // Sort posts by likes in descending order
            posts.sort((a, b) => b.dataset.likes - a.dataset.likes);

            // Reorder posts in the DOM
            posts.forEach(post => postsList.appendChild(post));
        });
    </script>
            
     
    </x-app-layout>