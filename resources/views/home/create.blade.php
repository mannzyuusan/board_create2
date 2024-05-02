<x-app-layout>
    <x-slot name="index">
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
    
    <h1>理系掲示板</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
             <h2>投稿名</h2>
                <input type="text" name="post[nickname]" placeholder="表示される名前" value="{{ old('post.nickname')}}"/>
                <p class='nickname__error' style="color:red">{{ $errors->first('post.nickname') }}</p>
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title')}}"/>
                <p class='title__error' style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今週の内容" >{{old('post.body')}}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            
            <h2>科目</h2>
            
            <select name="post[category_id]">
                <option value="null" hidden>こちらから選択</option>
                @foreach($categories as $categorylist)
                    <option value="{{ $categorylist->id }}">{{ $categorylist->name }}</option>
                    <p class="category__error" style="color:red">{{ $errors->first('post.category_id') }}</p>
                    @endforeach
            </select>
            
            <h2>投稿するスレッド</h2>
            <select name="post[thread_id]">
                <option value="null" hidden>こちらから選択</option>
                @foreach($threads as $threadlist)
                    <option value="{{ $threadlist->id }}">{{ $threadlist->name }}</option>
                    @endforeach
            </select>
            
            <div class="image">
                <input type="file" name="image">
            </div>
            
            <input type="submit" value="store">
        </form>
        <div class='footer'>
            <a href="/home">戻る</a>
        </div>
        
</x-app-layout>