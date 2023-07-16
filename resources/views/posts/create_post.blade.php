<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create_Post') }} 
        </h2>
    </x-slot>
    <h1>授業を追加</h1>
            <form action="/posts/store2" method="POST">
                @csrf
                <div class="post">
                    <x-input-label for="post" :value="__('授業名を選択してください')" />
                    <select class="block mt-1 w-full" name="post[lecture_id]">
                        @foreach($lectures as $lecture)
                            <option value="{{ $lecture->id }}">{{ $lecture->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('post')" class="mt-2" />
                </div>
                <input type="submit" value="登録"/>
            </form>
        <br>
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>

</x-app-layout>