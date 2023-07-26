<x-app-layout>
  <div class="p-6">
    <h1> {{ $lecture->name }}</h1>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <br>
            <div>
              <table>
                  <tr>
                    <th width="100" align="center">評価方法</th>
                    <th width="300" align="center">コメント</th>
                    <th width="80" align="center">おすすめ度</th>
                  </tr>
              </table>
            </div>
            <br>
            @forelse($posts as $post)
              <tr>
                  <td width="100" align="center">{{ $post->grade->name}}</td>
                  <td width="300" align="left">{{ $post->comment }}</td>
                  <td width="80" align="center">{{ $post->review }}</td>
                  
              </tr>
            @empty
              <td>講義が見つかりません</td>
            @endforelse
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>  
</x-app-layout>