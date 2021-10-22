<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            スキル
        </h2>
    </x-slot>
    
    <div id="app">
        <flash-message-component></flash-message-component>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <button onclick="location.href='/dog/new'" class="shadow bg-gray-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                    新規作成
                                </button>
                    <table class="table-auto">
                        <thead>
                            <tr>
                            <th class="px-4 py-2">Title</th>
                            <th class="px-4 py-2">Author</th>
                            <th class="px-4 py-2">Views</th>
                            <th class="px-4 py-2">経験年数</th>
                            <th class="px-4 py-2">特記事項</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        @foreach($dogs as $dog)
                          <tr>
                            <td class="border px-4 py-2">{{ $dog->id }}</td>
                            <td class="border px-4 py-2">{{ $dog->dog_name }}</td>
                            <td class="border px-4 py-2">{{ \App\Models\Dog::DOG_STATUS_OBJECT[$dog->dog_status ] }}</td>
                            <td class="border px-4 py-2">{{ $dog->experience_year }}</td>
                            <td class="border px-4 py-2">{{ $dog->remarks }}</td>
                            <td class="border px-4 py-2">
                            <td class="border px-4 py-2">
                                <button onclick="location.href='/dog/detail/{{ $dog->id }}'" class="shadow bg-gray-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                    詳細ページへ
                                </button>
                            </td>
                            <td class="border px-4 py-2">
                                <button onclick="location.href='/dog/edit/{{ $dog->id }}'" class="shadow bg-gray-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                    編集
                                </button>
                            </td>
                            <td class="border px-4 py-2">
                                <form action="/dog/remove/{{ $dog->id }}" method="POST">
                                @csrf
                                @method('delete')
                                    <button type="submit" class="shadow bg-gray-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
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
