<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Edit") }}
                    <br>
                    {{ __("Search") }}
                    <br>
                    {{ __("Create") }}
                    <br>
                    <a href="https://www.wsl.waseda.jp/syllabus/JAA101.php"target="_blank"><font color="blue">早稲田大学 シラバス検索システム</font></a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
