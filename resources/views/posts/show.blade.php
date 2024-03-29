<x-app-layout>
  <div class="p-6">
    <h1>　授業を検索</h1>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <br>
          <div>
            <form action="/search/lecture" method="GET">
              <table>
                @csrf
                <tr><input type="text" name="keyword" value="{{ $keyword }}" placeholder="科目名入力"></tr>
                <tr>
                  <th><x-input-label for="department"/></th>
                  <td><select class="block mt-1 w-full" name="department_id">
                    <option>-学部を選択-</option>
                      @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                      @endforeach
                  </select>
                  <x-input-error :messages="$errors->get('department')" class="mt-2"/></td>
                </tr>
                <input type="submit" value="検索">
              </table>
            </form>
          </div>
          <br>
            <table>      
                <tr>
                  <th width="50" align="center"></th>
                  <th width="300" align="center" >科目名</th>
                  <th width="150" align="center">教員名</th>
                  <th width="250" align="center">分野コード</th>
                  <th width="80" align="center">学部</th>
                  <th width="100" align="center">おすすめ度</th>
                </tr>
                  
              @forelse($lectures as $lecture)
                  <tr>
                      <td width="50" align="center"><img src="{{ asset('/img/lecture.jpg') }}" style="width:70px; height:auto;"></td>
                      <td width="300" align="center"><a href="/search/{{ $lecture->id }}">{{ $lecture->name }}</td>
                      <td width="150" align="center">{{ $lecture->teacher->name }}</td>
                      <td width="250" align="center">{{ $lecture->field->name }}</td>
                      <td width="80" align="center">{{ $lecture->department->name }}</td>
                      <td width="100" align="center">{{ $lecture->review }}</td>
                  </tr>
              @empty
                  <td width="50" align="center"><img src="{{ asset('/img/lecture.jpg') }}" style="width:70px; height:auto;"></td>
                  <td width="300" align="center">講義が見つかりません</td>
              @endforelse
            </table>
      </div>
    </div>
    
  </div>
</div>
</x-app-layout>