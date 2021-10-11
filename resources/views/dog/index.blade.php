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
                            <td class="border px-4 py-2">{{ $dog->dog_status }}</td>
                          </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
