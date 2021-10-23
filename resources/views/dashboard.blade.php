<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            日本のマッチョたち
        </h2>
    </x-slot>

    

    <!-- component -->
<div class="flex items-center justify-center w-screen min-h-screen p-10">
	<!-- Resice the preview panel to check the responsiveness -->

	<!-- Component Start -->
	<div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-2 max-w-6xl">
		<!-- Tile 1 -->
		<div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
			<div class="h-40 bg-gray-400 rounded-lg" style="
            background-image: url(https://img.jakpost.net/c/2017/01/26/2017_01_26_20163_1485417604._large.jpg);
            ackground-repeat: no-repeat;
            background-attachment: cover;
            background-position: center;"></div>
			<div class="flex flex-col items-start mt-4">
				<h4 class="text-xl font-semibold">マッスル北村</h4>
				<p class="text-sm">Some text about the thing that goes over a few lines.</p>
				<a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="#">Click Here</a>
			</div>
		</div>
		<!-- Tile 2 -->
		<div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
			<div class="h-40 bg-gray-400 rounded-lg" style="
            background-image: url(https://img.jakpost.net/c/2017/01/26/2017_01_26_20163_1485417604._large.jpg);
            ackground-repeat: no-repeat;
            background-attachment: cover;
            background-position: center;"></div>
			<div class="flex flex-col items-start mt-4">
				<h4 class="text-xl font-semibold">カネキン</h4>
				<p class="text-sm">Some text about the thing that goes over a few lines.</p>
				<a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="#">Click Here</a>
			</div>
		</div>
		<!-- Tile 3 -->
		<div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
			<div class="h-40 bg-gray-400 rounded-lg" style="
            background-image: url(https://img.jakpost.net/c/2017/01/26/2017_01_26_20163_1485417604._large.jpg);
            ackground-repeat: no-repeat;
            background-attachment: cover;
            background-position: center;"></div>
			<div class="flex flex-col items-start mt-4">
				<h4 class="text-xl font-semibold">Jin</h4>
				<p class="text-sm">Some text about the thing that goes over a few lines.</p>
				<a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="#">Click Here</a>
			</div>
		</div>
		<!-- Tile 4 -->
		<div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
			<div class="h-40 bg-gray-400 rounded-lg" style="
            background-image: url(https://img.jakpost.net/c/2017/01/26/2017_01_26_20163_1485417604._large.jpg);
            ackground-repeat: no-repeat;
            background-attachment: cover;
            background-position: center;"></div>
			<div class="flex flex-col items-start mt-4">
				<h4 class="text-xl font-semibold">山岸</h4>
				<p class="text-sm">Some text about the thing that goes over a few lines.</p>
				<a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="#">Click Here</a>
			</div>
		</div>
	</div>
	<!-- Component End  -->

</div>
</x-app-layout>
