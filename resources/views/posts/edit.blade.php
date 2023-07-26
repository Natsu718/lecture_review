<x-app-layout>
  <div class="p-6">
    <h1>　編集</h1>
    <div class="content">
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            
            <table>
            <tr>
              <th>教科名</th>
              <td>{{ $post->lecture->name }}</td>
            </tr>
            <tr>
              <th>教員名</th>
              <td>{{ $post->lecture->teacher->name }}</td>
            </tr>
            <tr>
              
              <th>分野コード</th>
              <td>{{ $post->lecture->field->name }}</td>
            </tr>
            <tr>
              <th>学部</th>
              <td>{{ $post->lecture->department->name }}</td>
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
                <input type="submit" value="更新"/>
              </td>
            </tr>
          </table>
        </form>
    </div>
    <div class="footer">
      <a href="/user/posts">戻る</a>
    </div>
  </div>
</x-app-layout>