<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            トレーニングメニュー
        </h2>
    </x-slot>
    
    <div id="app">
        <flash-message-component></flash-message-component>

    <div class="py-12 bg-red-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                <button onclick="location.href='/dog/new'" class="shadow bg-green-600 hover:bg-green-300 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                    新規作成
                                </button>
                    <table class="table-auto">
                        <thead>
                            <tr>
                            <th class="px-4 py-2">ジム回数</th>
                            <th class="px-4 py-2">部位</th>
                            <th class="px-4 py-2">追い込めたか</th>
                            <th class="px-4 py-2">体重[kg]</th>
                            <th class="px-4 py-2">今日のトレーニングの感想</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        @foreach($dogs as $dog)
                          <tr>
                            <td class="border px-4 py-2">{{ $dog->id }}</td>
                            <td class="border px-4 py-2">{{ $dog->dog_name }}</td>
                            <td class="border px-4 py-2">{{ \App\Models\Dog::DOG_STATUS_OBJECT[$dog->dog_status ] }}</td>
                            <td class="border px-4 py-2">{{ $dog->experience_year }}</td>
                            <td class="border px-4 py-2"><a href="//dog/detail/{{ $dog->id }}">{{ Str::limit($dog->remarks, 20, $end='....') }}</a></td>
                            <td class="border px-4 py-2">
                                <button onclick="location.href='/dog/detail/{{ $dog->id }}'" class="shadow bg-yellow-600 hover:bg-yellow-300 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                    詳細ページへ
                                </button>
                            </td>
                            <td class="border px-4 py-2">
                                <button onclick="location.href='/dog/edit/{{ $dog->id }}'" class="shadow bg-blue-600 hover:bg-blue-300 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                    編集
                                </button>
                            </td>
                            <td class="border px-4 py-2">
                                <form action="/dog/remove/{{ $dog->id }}" method="POST">
                                @csrf
                                @method('delete')
                                    <button type="submit" class="shadow bg-pink-600 hover:bg-pink-300 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                                    削除
                                    </button>
                                </form>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <div class="flex justify-center mt-3">
                        {{ $dogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
