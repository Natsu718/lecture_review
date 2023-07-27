<x-app-layout>
  <div class="p-6">
    <h1>　授業一覧</h1>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table align="left">
                      <tr>
                        <th width="50" align="center">　</th>
                        <th width="200" align="center">科目名</th>
                        <th width="80" align="center">学部</th>
                      </tr>
                @forelse($lectures as $lecture)
                        <tr>
                            <td width="50" align="center"><img src="{{ asset('/img/lecture.jpg') }}" style="width:70px; height:auto;"></td>
                            </a><td width="200" align="center">{{ $lecture->name }}</td>
                            <td width="80"  align="center">{{ $lecture->department->name }}</td>
                            <td width="80"  align="center">
                            <form action="/{{ $lecture->id }}" id="form_{{ $lecture->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deleteLecture({{ $lecture->id }})">削除</button> 
                            </form>
                            </td>
                        </tr>
                    @empty
                    <td width="50" align="center"><img src="{{ asset('/img/lecture.jpg') }}" style="width:70px; height:auto;"></td>
                    <td width="200">講義が見つかりません</td>
                @endforelse 
                    <script>
                        function deleteLecture(id) {
                            'use strict'
                    
                            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                                document.getElementById(`form_${id}`).submit();
                            }
                        }
                    </script>
                </table>
                
                <table>
                      <tr>
                        <th width="200">　</th>
                        <th width="50" align="center">　</th>
                        <th width="200" align="center">教員名</th>
                      </tr>
                @forelse($teachers as $teacher)
                        <tr>
                            <td width="200"></td>
                            <td width="50" align="center"><img src="{{ asset('/img/hito.jpg') }}" style="width:70px; height:auto;"></td>
                            <td width="200" align="center">{{ $teacher->name }}</td>
                            <td width="80"  align="center">
                            <form action="/{{ $teacher->id }}" id="form_{{ $teacher->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deleteTeacher({{ $teacher->id }})">削除</button> 
                            </form>
                            </td>
                        </tr>
                    @empty
                    <td width="50" align="center"><img src="{{ asset('/img/my_show.jpg') }}" style="width:70px; height:auto;"></td>
                    <td width="200">講義が見つかりません</td>
                @endforelse 
                    <script>
                        function deleteTeacher(id) {
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