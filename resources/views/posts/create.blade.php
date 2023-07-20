<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('授業作成') }} 
        </h2>
    </x-slot>
    
    <!--授業登録-->
    <h1>授業を追加</h1>
        <form action="/lectures/store" method="POST">
            <table>
                @csrf
                <div class="lecturer">
                    <!--科目名-->
                    <tr>
                        <th>科目名（シラバス通りに入力　スペース/英数は半角）</th>
                        <td><input type="text" name="lecture[name]" placeholder="早稲田の歴史"/></td>
                    </tr>
                    
                    <!--分野コード-->
                    <tr>
                        <th><x-input-label for="field" :value="__('分野コードを選択')" /></th>
                        <td><select class="block mt-1 w-full" name="lecture[field_id]">
                            @foreach($fields as $field)
                                <option value="{{ $field->id }}">{{ $field->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('field')" class="mt-2" /></td>
                    </tr>
                    
                    <!--教員名検索-->
                    <tr>
                        <th><x-input-label for="teacher" :value="__('教員を選択')" /></th>
                        <td><select class="block mt-1 w-full" name="lecture[teacher_id]">
                            @foreach($teacheres as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('teacher')" class="mt-2" /></td>
                    </th>
                    <!--学部-->
                    </tr>
                        <th><x-input-label for="department" :value="__('学部を選択')" /></th>
                        <td><select class="block mt-1 w-full" name="lecture[department_id]">
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('department')" class="mt-2" /></td>
                    </tr>
                </div>
            </table>
            <input type="submit" value="登録" />
        </form>
    <br>
    
    <!--教員登録-->
    <h1>教員を追加</h1>
    <form action="/teachers/store" method="POST">
        <table>
            @csrf
            <tr>
            <div class="teacher">
                <th>教員名（スペースなし）</th>
                <td><input type="text" name="teacher[name]" placeholder="早稲田太郎"/></td>
            </div>
            </tr>
            <tr><td><input type="submit" value="登録"/></td>
        </tr>
        </table>
    </form>
    
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>
</x-app-layout>