<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            スキル新規登録
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex justify-center">

                <form class="w-full max-w-sm" action="/dog/create" method="POST">
                    @csrf
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-full-name">
                              部位
                            </label>
                        </div>
                        <div class="md:w-2/3">
                        <!-- ここのname属性はformから値を取るという意味 -->
                          <input  required name="dog_name" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="">
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                          <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-password">
                            追い込めたか
                        </label>
                        </div>
                        <div class="md:w-2/3">
                          <select  name="dog_status" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name">
                              @foreach(\App\Models\Dog::DOG_STATUS_OBJECT as $key => $skillName)
                                <option value="{{ $key }}">{{ $skillName }}</option>
                              @endforeach
                              
                          </select>
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="experience_year">
                                体重[kg]
                            </label>
                        </div>
                        <div class="md:w-2/3">
                          <input  value="" required name="experience_year" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="experience_year" type="text">
                        </div>
                    </div>

                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="remarks">
                                今日の感想
                            </label>
                        </div>
                        <div class="md:w-2/3">
                          <textarea name="remarks" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="remarks" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    
                    <div class="md:flex md:items-center">
                        <div class="md:w-2/3">
                            <button onclick="location.href='/dog'" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                戻る
                            </button>
                            <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                                登録
                            </button>
                        </div>
                        <div class="md:w-2/3">

                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
