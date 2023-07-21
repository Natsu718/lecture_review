<x-app-layout>

        <div>
          <h1>授業を選択</h1>
          <form action="/posts/lectures" method="GET">
            <input type="text" name="keyword" value="{{ $keyword }}">
            <input type="submit" value="検索">
          </form>
        </div>
        <br>
        <table>
          <tr>
            <th width="200" align="center">教科名</th>
            <th width="150" align="center">教員名</th>
            <th width="150" align="center">分野コード</th>
            <th width="80" align="center">学部</th>
          </tr>
          
          @forelse ($lectures as $lecture)
            <tr>
              </a><td align="center"><a href="/posts/{{ $lecture->id }}">{{ $lecture->name }}</a></td>
              <td align="center">{{ $lecture->teacher->name }}</a></td>
              <td align="center">{{ $lecture->field->name }}</a></td>
              <td align="center">{{ $lecture->department->name }}</a></td>
            </tr>
          @empty
            <td　align="center">講義が見つかりません</td>
          @endforelse
        </table>
        <br>
        <h4>見つからない時は<a href='/posts/create'>授業を作成</a></h4><br>
</x-app-layout>

