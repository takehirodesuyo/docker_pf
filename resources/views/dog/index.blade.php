<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            スキル
        </h2>
    </x-slot>
    
    @if(session('status'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">スキルを作成しました</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
    </div>
    @endif

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
                            </tr>
                        </thead>
                        <tbody>
                            
                        @foreach($dogs as $dog)
                          <tr>
                            <td class="border px-4 py-2">{{ $dog->id }}</td>
                            <td class="border px-4 py-2">{{ $dog->dog_name }}</td>
                            <td class="border px-4 py-2">{{ \App\Models\Dog::DOG_STATUS_OBJECT[$dog->dog_status ] }}</td>
                            <td class="border px-4 py-2">
                                <button onclick="location.href='/dog/detail/{{ $dog->id }}'" class="shadow bg-gray-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                    詳細ページへ
                                </button>
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
</x-app-layout>
