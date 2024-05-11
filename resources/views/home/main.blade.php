
    <x-app-layout>
    <x-slot name="index">
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
    
        <h1 class="fuchidori">理系掲示板 mainページ</h1>
        
        
        <div class='categories'>
            
            <ol>
            @foreach($categories as $categorylist)
                <div class='category'>
                <li>    <a href="/home/{{ $categorylist->id}}" class="btn bgleft"><span>{{$categorylist->name}}</span></a> 
                </li>
                    
                </div>
                
            @endforeach
            
            </ol>
            
          
                

               
        </div>

       
            
     
    </x-app-layout>