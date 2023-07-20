<x-app-layout>

    <table>
          <tr>
            <th width="200" align="center">教科名</th>
            <th width="150" align="center">教員名</th>
            <th width="150" align="center">分野コード</th>
            <th width="80" align="center">学部</th>
            <th width="100" align="center">評価方法</th>
            <th width="300" align="center">コメント</th>
            <th width="80" align="center">おすすめ度</th>
          </tr>
    @forelse($posts as $post)
            <tr>
                <td><a href="/posts/{{ $post->id }}/edit">{{ $post->lecture->name }}</a></td>
                <td>{{ $post->lecture->teacher->name }}</td>
                <td>{{ $post->lecture->field->name }}</td>
                <td>{{ $post->lecture->department->name }}</td>
                <td>{{ $post->grade->name}}</td>
                <td>{{ $post->comment }}</td>
                <td>{{ $post->review }}</td>
            </tr>
            <div class="edit"><a href="/posts/{{ $post->id }}/edit">編集</a></div>
            
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
            </form>
        @empty
        <td>講義が見つかりません</td>
    @endforelse
        <a href="/dashboard">戻る</a>       
</x-app-layout>