<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($dogs as $dog)
                        {{ $dog }}
                    @endforeach

                    

                    <table class="table-auto">
                        <thead>
                            <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Views</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Intro to CSS</td>
                            <td>Adam</td>
                            <td>858</td>
                            </tr>
                            <tr class="bg-emerald-200">
                            <td>A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                            <td>Adam</td>
                            <td>112</td>
                            </tr>
                            <tr>
                            <td>Intro to JavaScript</td>
                            <td>Chris</td>
                            <td>1,280</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
