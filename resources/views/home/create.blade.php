<x-app-layout>
    <x-slot name="index">
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        
        <div class="background:blue bg-cyan-100 overflow-hidden shadow-sm sm:rounded-lg">
        
    
    <h1 class="fuchidori">理系掲示板</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
             <h2 >投稿名</h2>
                <input type="text" name="post[nickname]" placeholder="表示される名前" value="{{ old('post.nickname')}}"/>
                <p class='nickname__error' style="color:red">{{ $errors->first('post.nickname') }}</p>
            <div class="title">
                <h2>題名</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title')}}"/>
                <p class='title__error' style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="今週の内容は～" >{{old('post.body')}}</textarea>
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
            
            <br>
            <br>
            
            <div class="image">
                <h2>画像の追加</h2>
                <p>画像は10MBまで</p>
                <input type="file" name="image">
            </div>
            
            <div class="pdf">
                <h2>PDFの追加</h2>
                <p>PDFは10MBまで</p>
                <input type="file" name="pdf">
            </div>
            <input type="submit" value="投稿する" class="button2">
        </form>
        <br>
        
        
</x-app-layout>