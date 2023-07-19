<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create_Post') }} 
        </h2>
    </x-slot>
        <div>
          <p>授業名を検索</p>
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
              <td><a href="/posts/{{ $lecture->id }}">{{ $lecture->name }}</a></td>
              <td><a href="/posts/{{ $lecture->id }}">{{ $lecture->teacher->name }}</a></td>
              <td><a href="/posts/{{ $lecture->id }}">{{ $lecture->field->name }}</a></td>
              <td><a href="/posts/{{ $lecture->id }}">{{ $lecture->department->name }}</a></td>
            </tr>
          @empty
            <td>講義が見つかりません</td>
          @endforelse
        </table>
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>

</x-app-layout>

