<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create_Post') }} 
        </h2>
    </x-slot>
        <div>
          <form action="/posts/lectures" method="GET">
            <input type="text" name="keyword" value="{{ $keyword }}">
            <input type="submit" value="検索">
          </form>
        </div>
        
        <table>
          <tr>
            <th>教科名</th><th>教員名</th><th>分野コード</th><th>学部</th>
          </tr>
        
          @forelse ($lectures as $lecture)
            <tr>
              <td><a href="/posts/lectures">{{ $lecture->name }}</td></a>
              <td>{{ $lecture->teacher->name }}</td><td>{{ $lecture->field->name }}</td><td>{{ $lecture->department->name }}</td>
            </tr>
          @empty
            <td>講義が見つかりません</td>
          @endforelse
        </table>
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>

</x-app-layout>

