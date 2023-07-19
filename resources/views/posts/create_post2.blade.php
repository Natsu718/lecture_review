<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create_Post') }} 
        </h2>
    </x-slot>
        
        <!--レビュー登録-->
        <form action="/posts/{{$lecture->id}}" method="POST">
          @csrf
          <table>
            <tr>
              
              <th>教科名</th>
              <td>{{ $lecture->name }}</td>
            </tr>
            <tr>
              <th>教員名</th>
              <td>{{ $lecture->teacher->name }}</td>
            </tr>
            <tr>
              
              <th>分野コード</th>
              <td>{{ $lecture->field->name }}</td>
            </tr>
            <tr>
              <th>学部</th>
              <td>{{ $lecture->department->name }}</td>
            </tr>
            <th><x-input-label for="grade" :value="__('成績評価方法')" /></th>
                <td>
                  @foreach($grades as $grade)
                  <label>{{ $grade->name }}
                    <input type='checkbox' name='post[grade_id]' value='{{ $grade->id }}'/>
                  </label>
                  @endforeach
                </td>
            </tr>
            
            <tr>
              <th>コメント</th>
              <td><textarea name="post[comment]"  cols="80" rows="8"></textarea></td>
            </tr>
            <tr>
              <th>おすすめ度</th>
              <td><input name="post[review]"  type="number" min="1" max="5"/></td>
            </tr>
            
            <tr>
              <td>
                <input type="submit" value="登録"/>
              </td>
            </tr>
          </table>
        </form>
        
        <div class="footer">
            <a href="/dashboard"> <button type="button" name="name" value="value">戻る</button></a>
        </div>

</x-app-layout>
