<x-app-layout>

        <div>
          <h1>授業を選択</h1>
          <form action="/posts/lectures" method="GET">
            <table>
              @csrf
              <tr><input type="text" name="keyword" value="{{ $keyword }}" placeholder="科目名入力"></tr>
              <tr>
                <th><x-input-label for="department"/></th>
                <td><select class="block mt-1 w-full" name="department_id">
                    @foreach($departments as $department)
                      <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('department')" class="mt-2" /></td>
              </tr>
              <input type="submit" value="検索">
            </table>
      
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

