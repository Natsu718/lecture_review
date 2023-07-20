<x-app-layout>

    <table>
          <tr>
            <th>教科名</th><th>教員名</th><th>分野コード</th><th>学部</th><th>評価方法</th><th>コメント</th><th>おすすめ度</th>
          </tr>
    @forelse($posts as $post)
            <tr>
                </a><td width="200" align="center"><a href="/posts/{{ $post->id }}/edit">{{ $post->lecture->name }}</a></td>
                <td width="150" align="center">{{ $post->lecture->teacher->name }}</td>
                <td width="150" align="center">{{ $post->lecture->field->name }}</td>
                <td width="80"  align="center">{{ $post->lecture->department->name }}</td>
                <td width="100"  align="center">{{ $post->grade->name}}</td>
                <td width="300"  align="center">{{ $post->comment }}</td>
                <td width="80"  align="center">{{ $post->review }}</td>
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