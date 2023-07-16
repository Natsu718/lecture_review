<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }} 
        </h2>
    </x-slot>
    <h1>授業を追加</h1>
        <form action="/lectures/store" method="POST">
            @csrf
            <div class="lecturer">
                <!--科目名-->
                <h2>科目名（シラバス通りに入力　スペース/英数は半角）</h2>
                <input type="text" name="lecture[name]" placeholder="早稲田の歴史"/>
                
                <!--分野コード-->
                <x-input-label for="field" :value="__('分野コードを選択')" />
                <select class="block mt-1 w-full" name="lecture[field_id]">
                    @foreach($fields as $field)
                        <option value="{{ $field->id }}">{{ $field->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('field')" class="mt-2" />
                
                <!--教員名検索-->
                <x-input-label for="teacher" :value="__('教員を選択')" />
                <select class="block mt-1 w-full" name="lecture[teacher_id]">
                    @foreach($teacheres as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('teacher')" class="mt-2" />
                
                <!--学部-->
                <x-input-label for="department" :value="__('学部を選択')" />
                <select class="block mt-1 w-full" name="lecture[department_id]">
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('department')" class="mt-2" />
            </div>
            <input type="submit" value="登録"/>
        </form>
    <br>
    <h1>教員を追加</h1>
        <form action="/teachers/store" method="POST">
            @csrf
            <div class="teacher">
                <h2>教員名（スペースなし）</h2>
                <input type="text" name="teacher[name]" placeholder="早稲田太郎"/>
            </div>
            <input type="submit" value="登録"/>
        </form>
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>
</x-app-layout>