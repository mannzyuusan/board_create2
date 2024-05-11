<x-app-layout>
    <x-slot name="index">
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1 class="fuchidori">理系掲示板 mainページ</h1>
        <div class='categories' style="display: flex; flex-wrap: wrap;">
            @foreach($categories as $index => $categorylist)
                <div class='category' style="width: 25%;"> <!-- 各要素の幅を25%に設定 -->
                    <a href="/home/{{ $categorylist->id}}" class="btn bgleft"><span>{{$categorylist->name}}</span></a> 
                </div>
                @if(($index + 1) % 4 == 0) <!-- インデックスが4の倍数の時に改行 -->
                    <div style="flex-basis: 100%; height: 0;"></div>
                @endif
            @endforeach
        </div>
    </div>
</x-app-layout>