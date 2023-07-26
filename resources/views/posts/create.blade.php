<x-app-layout>

    <div class="p-6">
    
    <!--授業登録-->
    <h1>　授業を追加</h1>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <br>
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
        </div>
      </div>
    </div>
    
    <div class="footer" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="/posts/lectures">戻る</a>
        </div>
    </div>
    
    <!--教員登録-->
    <h1>教員を追加</h1>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
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
            </div>
        </div>
      </div>
    </div>

    <div class="footer" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="/posts/lectures">戻る</a>
        </div>
    </div>

</x-app-layout>