<x-app-layout>
    
    <div>
      <h1>授業を検索</h1>
      <form action="/search/post" method="GET">
        <input type="text" name="keyword" value="{{ $keyword }}">
        <input type="submit" value="検索">
      </form>
    </div>
    <br>
        
    <table>
          <tr>
            <th width="200" align="center">科目名</th>
            <th width="150" align="center">教員名</th>
            <th width="150" align="center">分野コード</th>
            <th width="80" align="center">学部</th>
            <th width="100" align="center">評価方法</th>
            <th width="300" align="center">コメント</th>
            <th width="80" align="center">おすすめ度</th>
          </tr>
    
    @forelse($posts as $post)
            <tr>
                <td width="200" align="center">{{ $post->lecture->name }}</td>
                <td width="150" align="center">{{ $post->lecture->teacher->name }}</td>
                <td width="150" align="center">{{ $post->lecture->field->name }}</td>
                <td width="80" align="center">{{ $post->lecture->department->name }}</td>
                <td width="100" align="center">{{ $post->grade->name}}</td>
                <td width="300" align="left">{{ $post->comment }}</td>
                <td width="80" align="center">{{ $post->review }}</td>
                
            </tr>
        @empty
        <td>講義が見つかりません</td>
    @endforelse
      
</x-app-layout>