<x-app-layout>

        <div>
          <p>授業検索</p>
          <form action="/posts/lectures" method="GET">
            <input type="text" name="keyword" value="{{ $keyword }}">
            <input type="submit" value="検索">
          </form>
        </div>
        <br>
        <table>
          <tr>
            <th>教科名</th><th>教員名</th><th>分野コード</th><th>学部</th>
          </tr>
          
          @forelse ($lectures as $lecture)
            <tr>
              </a>
              <td width="200" align="center"><a href="/posts/{{ $lecture->id }}">{{ $lecture->name }}</a></td>
              <td width="150" align="center">{{ $lecture->teacher->name }}</a></td>
              <td width="150" align="center">{{ $lecture->field->name }}</a></td>
              <td width="80"  align="center">{{ $lecture->department->name }}</a></td>
            </tr>
          @empty
            <td>講義が見つかりません</td>
          @endforelse
        </table>
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>

</x-app-layout>        