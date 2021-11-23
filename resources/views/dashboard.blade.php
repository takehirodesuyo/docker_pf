<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            日本のマッチョたち
        </h2>
    </x-slot>

    

    <!-- component -->
<div class="flex items-center justify-center w-screen min-h-screen p-10 bg-blue-300">
	<!-- Resice the preview panel to check the responsiveness -->

	<!-- Component Start -->
	<div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-2 max-w-6xl bg-indigo-300">
		<!-- Tile 1 -->
		<div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2 ">
			<!-- <div class="h-40 bg-gray-400 rounded-lg" style="
            ackground-repeat: no-repeat;
            background-attachment: cover;
            background-position: center;"
			></div> -->
			<img src="{{ asset('img/sub_1 (2).jpeg') }}" alt="マッスル北村">

			<div class="flex flex-col items-start mt-4">
				<h4 class="text-xl font-semibold">マッスル北村</h4>
				<p class="text-sm">伝説のボディービルダー 高重量正義で日々血を吐くようなトレーニングをしていた。現在は亡くなられているが、彼を知らない人はいない。現在でもトレーニーの間で語り継がれている。</p>
				<a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="https://www.tokyo-np.co.jp/article/58915">Click Here</a>
			</div>
		</div>
		<!-- Tile 2 -->
		<div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
			<!-- <div class="h-40 bg-gray-400 rounded-lg" style="
            ackground-repeat: no-repeat;
            background-attachment: cover;
            background-position: center;"></div> -->
			<img src="{{ asset('img/sub_2.jpg') }}" alt="カネキン">

			<div class="flex flex-col items-start mt-4">
				<h4 class="text-xl font-semibold">カネキン</h4>
				<p class="text-sm">アメリカの国際的なフィットネス団体IFBBのメンズフィジークカテゴリーで日本人5人目となるプロ選手に登録。
フィットネスジム「Kanekin Fitness」やアパレルプランド「COR」の経営など幅広く活動。</p>
				<a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="https://www.instagram.com/kanekinfitness/">Click Here</a>
			</div>
		</div>
		<!-- Tile 3 -->
		<div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
			<!-- <div class="h-40 bg-gray-400 rounded-lg" style="
            ackground-repeat: no-repeat;
            background-attachment: cover;
            background-position: center;"></div> -->
			<img src="{{ asset('img/sub_3.jpg') }}" alt="Jin">
			<div class="flex flex-col items-start mt-4">
				<h4 class="text-xl font-semibold">Jin</h4>
				<p class="text-sm">日本最強の筋トレYouTuber。アパレルブランドXENOの経営をしている。プロフィジーカーで、NPCJという団体の大会では
優勝経験もあり、アジア大会や
世界大会でも入賞歴がある。</p>
				<a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="https://www.instagram.com/jin.xeno/">Click Here</a>
			</div>
		</div>
		<!-- Tile 4 -->
		<div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
			<!-- <div class="h-40 bg-gray-400 rounded-lg" style="
            ackground-repeat: no-repeat;
            background-attachment: cover;
            background-position: center;"></div> -->
			<img src="{{ asset('img/sub_5.jpg') }}" alt="山岸">
			<div class="flex flex-col items-start mt-4">
				<h4 class="text-xl font-semibold">山岸</h4>
				<p class="text-sm">「ボディビル世界チャンピオンが伝授する 筋トレは人生を変える哲学だ」という本を出版している。アーノルド・シュワルツェネッガーが主催する「IFBBアーノルド・クラシック212」に日本人で初めて優勝</p>
				<a class="p-2 leading-none rounded font-medium mt-3 bg-gray-400 text-xs uppercase" href="https://www.instagram.com/hideyamagishi/">Click Here</a>
			</div>
		</div>
	</div>
	<!-- Component End  -->

</div>
</x-app-layout>
