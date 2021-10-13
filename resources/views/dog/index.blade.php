<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            スキル
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
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
