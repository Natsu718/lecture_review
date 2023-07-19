<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My_show') }} 
        </h2>
    </x-slot>
    
    @foreach($posts as $post)
        @if(Auth::id() == $post->user_id)
        {{ $post->lecture->name }}
        <div class="edit"><a href="/posts/{{ $post->id }}/edit">編集</a></div>
        
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
        </form>
        @endif
    @endforeach

            <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>