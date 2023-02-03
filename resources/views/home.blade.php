@extends('layouts.designHome')

@section('title', 'Home')

@section('content')

<!--<div class="bg-white w-1/3 p-4 border-fuchsia-100 shadow-x1 rounded-lg">
    <form action="{{route('products.index')}}" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">

    <h1 class="text-5xl text-center pt-24">Welcome to my Farmacy</h1>
    <p>
    <h1 class="text-6xl text-fuchsia-300 text-center">FARMA LIVE</h1>

    <button type="submit" class="my-3 w-full bg-red-500 p-2 font-semibold rounded text-white hover:bg-stone-300">Send</button>
</div>-->
<body class="font-sans leading-normal tracking-normal">

	<!--Header-->
	<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('farmacia.jpg'); height: 60vh; max-height:460px;">
			<div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
				<!--Title-->
					<p class="text-white font-extrabold text-3xl md:text-5xl">
						👩‍⚕️ Farma Live 💊
					</p>
					<p class="text-xl md:text-2xl text-gray-500">Family Pharmacy</p>
			</div>
		</div>
		
		<!--Container-->
		<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
			
			<div class="mx-0 sm:mx-6">

				<div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
					
                    <!--Lead Card-->
                    <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
                            <div class="w-full md:w-2/3 rounded-t">	
                                <img src="{!! asset('farmaLive.png') !!}" class="h-full w-full shadow">
                            </div>

                            <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                    <p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">DESCRIPTION</p>
                                    <br>
                                    <div class="w-full font-bold text-xl text-gray-900 px-6">👋 Welcome to the page Farma Live</div>
                                    <br>
                                    <p class="w-full font-bold text-xl text-gray-900 px-10">About Us</p>
                                    <br>
                                    <p class="text-gray-800 font-serif text-base px-10 mb-10">
                                        On this page you will find patent medicines as generics, we handle an extensive assortment of medicine, promoting good prices and excellent quality.
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    <a href="{{route('products.index')}}" class="w-30 inline-flex items-center py-2 px-6 text-sm font-medium text-center text-gray-900 bg-cyan-100 rounded-lg hover:bg-purple-300 focus:ring-4 focus:outline-none focus:ring-purple-50 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Click to buy
                                        <svg aria-hidden="true" class="ml-3 mr-2 w-6 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </a>   
                                    </p> 
                                </div>
                            </div>
                    </div>
                    <!--/Lead Card-->


                    <!--Posts Container-->
                    <div class="flex flex-wrap justify-between pt-12 -mx-6">

                        <!--1/3 col -->
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <a class="flex flex-wrap no-underline hover:no-underline">
                                    <img src="https://media.justo.mx/products/0750227604038L1.jpg" class="h-64 w-full rounded-t pb-6">
                                    <div class="w-full font-bold text-xl text-gray-900 px-6">Descenfriol D Paq.24 Capsules</div>
                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                        Clorfenamina, Fenilefrina, Paracetamol
                                    </p>
                                </a>
                            </div>
                            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                <div class="flex items-center justify-between">
                                    <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="{!! asset('farmaLive.png') !!}" alt="Avatar of Author">
                                    <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                                </div>
                            </div>
                        </div>
                    
                        
                        <!--1/3 col -->
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <a class="flex flex-wrap no-underline hover:no-underline">
                                    <img src="https://habibdroguerias.com/wp-content/uploads/2021/05/100025010.jpg" class="h-64 w-full rounded-t pb-6">
                                    <div class="w-full font-bold text-xl text-gray-900 px-6">Next GL Paq.8 Capsules</div>
                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                        Paracetamol, Cafeina, Clorhidrato de fenilefrina
                                    </p>
                                </a>
                                </div>
                            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                <div class="flex items-center justify-between">
                                    <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="{!! asset('farmaLive.png') !!}" alt="Avatar of Author">
                                    <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                                </div>
                            </div>
                        </div>

                        <!--1/3 col -->
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <a class="flex flex-wrap no-underline hover:no-underline">
                                    <img src="https://farmaciasflemingbuap.com/pub/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/a/b/ab7a5227aa4576631327bceeb43188fb_1.jpeg" class="h-64 w-full rounded-t pb-6">
                                    <div class="w-full  font-bold text-xl text-gray-900 px-6">Tabcin Paq.12 Capsules</div>
                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                        Paracetamol, Dextrometorfano, Fenilefrina 
                                    </p>
                                </a>
                            </div>
                            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                <div class="flex items-center justify-between">
                                    <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="{!! asset('farmaLive.png') !!}" alt="Avatar of Author">
                                    <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                                </div>
                            </div>
                        </div>
                            
                            <!--1/2 col -->
                            <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                    <a class="flex flex-wrap no-underline hover:no-underline">
                                        <img src="https://regiofarma.mx/wp-content/uploads/2021/09/genoprasol.png" class="h-full w-full rounded-t pb-6">
                                        <div class="w-full font-bold text-xl text-gray-900 px-6">Genoprazol Paq.14 Capsules</div>
                                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                            Omeprazol 
                                        </p>
                                    </a>
                                </div>
                                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                    <div class="flex items-center justify-between">
                                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="{!! asset('farmaLive.png') !!}" alt="Avatar of Author">
                                        <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                                    </div>
                                </div>
                            </div>

                            <!--1/2 col -->
                            <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                                <div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                    <a class="flex flex-wrap no-underline hover:no-underline">	
                                        <img src="https://quefarmacia.com/wp-content/uploads/2017/11/650240011139.jpg" class="h-full w-full rounded-t pb-6">
                                        <div class="w-full font-bold text-xl text-gray-900 px-6">QG5 Paq.30 Capsules</div>
                                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                            Dry extract of leaves of Psidium Guajava
                                        </p>
                                    </a>
                                </div>
                                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                    <div class="flex items-center justify-between">
                                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="{!! asset('farmaLive.png') !!}" alt="Avatar of Author">
                                        <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                                    </div>
                                </div>
                            </div>

                        <!--2/3 col -->
                        <div class="w-full md:w-2/3 p-6 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <a class="flex flex-wrap no-underline hover:no-underline">	
                                    <img src="https://m.media-amazon.com/images/I/71I146YnnHL._AC_SL1500_.jpg" class="h-full w-full rounded-t pb-6">
                                </a>
                            </div>
                        </div>

                        <!--1/3 col -->
                        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <a class="flex flex-wrap no-underline hover:no-underline">
                                    <img src="https://www.farmalisto.com.mx/93643-large_default/syncol-500-mg-25-mg-15-mg-caja-con-24-comprimidos.jpg" class="h-full w-full rounded-t pb-6">
                                    <div class="w-full font-bold text-xl text-gray-900 px-6">Syncol Paq.24 Capsules</div>
                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                        Paracetamol, Pamabron, Pirilamina
                                    </p>
                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                        Relieves the symptoms of Premenstrual Syndrome and Menstrual Cramps.
                                    </p>
                                </a>
                            </div>
                            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                <div class="flex items-center justify-between">
                                    <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="{!! asset('farmaLive.png') !!}" alt="Avatar of Author">
                                    <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                                </div>
                            </div>
                        </div>

                    </div>	
                </div>					
			</div>		
		</div>
	</div>
</body>

@endsection
