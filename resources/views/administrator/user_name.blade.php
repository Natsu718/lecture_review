<x-app-layout>
  <div class="p-6">
    <h1>　登録者一覧</h1>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table align="left">
                      <tr>
                        <th width="50" align="center">　</th>
                        <th width="200" align="center">ユーザー名</th>
                      </tr>
                @forelse($users as $user)
                        <tr>
                            <td width="50" align="center"><img src="{{ asset('/img/hito.jpg') }}" style="width:70px; height:auto;"></td>
                            <td width="200" align="center">{{ $user->name }}</td>
                        </tr>
                @empty
                    <td width="50" align="center"><img src="{{ asset('/img/hito.jpg') }}" style="width:70px; height:auto;"></td>
                    <td width="200">ユーザーが見つかりません</td>
                @endforelse 
                </table>
            </div>
        </div>
    </div>
 </div>
</x-app-layout>