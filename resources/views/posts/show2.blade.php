<x-app-layout>
  <x-slot name="show2">
    Header
  </x-slot>
  <div class="p-6">
    <h1> {{ $lecture->name }}</h1>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <br>
            <div>
              <table>

                  <tr>
                    <th width="50" align="center">　</th>
                    <th width="100" align="center">評価方法</th>
                    <th width="300" align="center">コメント</th>
                    <th width="80" align="center">おすすめ度</th>
                  </tr>
            <br>
            @forelse($posts as $post)
              @if($lecture->id == $post->lecture_id)
              <tr>
                  <td width="50" align="center"><img src="{{ asset('/img/search.jpg') }}" style="width:70px; height:auto;"></td>
                  <td width="100"  align="center">
                      @foreach($post->grades as $grade)
                          <p>{{ $grade->name }}</p>
                      @endforeach
                  </td>
                  <td width="300" align="left">{{ $post->comment }}</td>
                  <td width="80" align="center">{{ $post->review }}</td>
              </tr>
              @endif
            @empty
            <td width="50" align="center"><img src="{{ asset('/img/search.jpg') }}" style="width:70px; height:auto;"></td>
            <td width="200">　レビューが見つかりません</td>
            @endforelse
            </table>
          </div>
          <br>
        </div>
      </div>
    </div>
    <div class="footer" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="/search/lecture">戻る</a>
        </div>
    </div>
  </div>  
</x-app-layout>