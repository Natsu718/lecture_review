<x-app-layout>
  <div class="p-6">
    <h1>　投稿一覧</h1>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table>
                      <tr>
                         <th width="50" align="center">　</th>
                        <th width="200" align="center">科目名</th>
                        <th width="150" align="center">教員名</th>
                        <th width="150" align="center">分野コード</th>
                        <th width="80" align="center">学部</th>
                        <th width="100" align="center">評価方法</th>
                        <th width="300" align="center">コメント</th>
                        <th width="80" align="center">おすすめ度</th>
                      </tr>
                @forelse($posts as $post)
                    @if(Auth::id() == $post->user_id)
                        <tr>
                            <td width="50" align="center"><img src="{{ asset('/img/my_show.jpg') }}" style="width:70px; height:auto;"></td>
                            </a><td width="200" align="center">{{ $post->lecture->name }}</td>
                            <td width="150" align="center">{{ $post->lecture->teacher->name }}</td>
                            <td width="150" align="center">{{ $post->lecture->field->name }}</td>
                            <td width="80"  align="center">{{ $post->lecture->department->name }}</td>
                            
                            <td width="100"  align="center">
                                @foreach($post->grades as $grade)
                                    <p>{{ $grade->name }}</p>
                                @endforeach
                                
                            </td>
                            <td width="300"  align="left">{{ $post->comment }}</td>
                            <td width="80"  align="center">{{ $post->review }}</td>
                            <td width="80"  align="center">
                            <a href="/posts/{{ $post->id }}/edit" class=edit>編集</a></td>
                            <td width="80"  align="center">
                            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deletePost({{ $post->id }})">削除</button> 
                            </form>
                            </td>
                        </tr>
                    @endif
                    @empty
                    <td>講義が見つかりません</td>
                @endforelse 
                    <script>
                        function deletePost(id) {
                            'use strict'
                    
                            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                                document.getElementById(`form_${id}`).submit();
                            }
                        }
                    </script>
                </table>
            </div>
        </div>
    </div>
 </div>
</x-app-layout>