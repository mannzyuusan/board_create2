
    <x-app-layout>
    <x-slot name="index">
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
    
        <h1>理系掲示板 mainページ</h1>
        
        
        
        
        
        
        
        <div class='categories'>
            @foreach($categories as $categorylist)
                <div class='category'>
                    <a href="/home/{{ $categorylist->id}}">{{$categorylist->name}}</a>
                    
                </div>
                
            @endforeach
        
            
          
                

                <a href="/home/create" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">create</a>
            
                <a href="/like/sort" class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded">いいね順で並び替える</a>
        </div>

       
            
     
    </x-app-layout>