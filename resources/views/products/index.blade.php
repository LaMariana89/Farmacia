
@extends('layouts.designIndex')

@section('title', 'Products')

@section('content')

<body class="text-gray-600 work-sans leading-normal text-base tracking-normal">

    <!--Design of Carousel-->
                        <div class="carousel relative container mx-auto" style="max-width:1600px;">
                            <div class="carousel-inner relative overflow-hidden w-full">
                                <!--Slide 1-->
                                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                                <div class="carousel-item absolute opacity-0" style="height:50vh;">
                                    <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://img.freepik.com/foto-gratis/resumen-borroso-defocused-farmacia-farmacia_1203-9459.jpg');">
                                    </div>
                                </div>
                                <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                                <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                                <!--Slide 2-->
                                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                                <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
                                    <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://img.freepik.com/fotos-premium/gabinete-medicina-borrosa-tienda-farmacia-farmacia-farmacia-fondo_33718-1303.jpg?w=2000');">
                                    </div>
                                </div>
                                <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                                <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                                <!--Slide 3-->
                                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                                <div class="carousel-item absolute opacity-0" style="height:50vh;">
                                    <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom" style="background-image: url('https://img.freepik.com/fotos-premium/farmacia-drogueria-estantes-interior-fondo-abstracto-borroso_293060-11963.jpg?w=2000');">
                                    </div>
                                </div>
                                <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                                <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                                <!-- Add additional indicators for each slide-->
                                <ol class="carousel-indicators">
                                    <li class="inline-block mr-3">
                                        <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                                    </li>
                                    <li class="inline-block mr-3">
                                        <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                                    </li>
                                    <li class="inline-block mr-3">
                                        <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                                    </li>
                                </ol>
                            </div>
                        </div>
            <section class="bg-white py-8"> 
                        <!--Section of Icons-->
                        <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                                <a class="text-3xl text-gray-900 text-center tracking-widest font-bold">
                                Products
                                </a>
                            </div>
                        </nav>
            </section>
              
            <div class="container mx-auto flex items-center flex-wrap pt-4 pb-10">
                <br>
                @foreach ($products as $product)
                    <section class="bg-white py-8">                
                            <!--Img-->
                                    <div class="xl:w-2/3 p-3 flex flex-col">
                                        <a href="{{route('products.show', $product->id)}}">
                                            <img class="imagen hover:grow hover:shadow-lg" src="{{$product->image}}">
                                            <p class="pt-1 text-gray-900">{{$product->title}}</p>
                                            <p class="pt-1 text-gray-900">${{$product->price}}</p>
                                        </a>
                                    </div>   
                    </section>
                @endforeach
            </div>
</body>
@endsection