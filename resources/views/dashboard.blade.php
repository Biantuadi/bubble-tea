{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


{{--                         --}}

@extends('layouts.default')

@section('main')
{{-- ********* header ********* --}}
@include('layouts.header')



<main class="main_dashboard">
    @include('layouts.profil', ['user' => $user])

    @foreach ($items as $item)
        <div class="container_itm">
        
            <div class="container_itm_img_prix">

                @if (file_exists('img/'.$item->imgUrl))
                    <img src="{{ "img/".$item->imgUrl }}" alt="image" width="100" height="100">
                @else
                    <img src="{{ $item->imgUrl }}" alt="image" width="100" height="100">
                @endif
                <span class="prix">{{$item->price}}€</span>

            </div>

            <div class="container_itm_txt">
                <h2>{{$item->name}}</h2>

                @for ($j = 1; $j <= 5; $j++)
                        @if($item->id == 1 && $j <= 3)
                            <i class="fas fa-star"></i>
                        @elseif($item->id == 1 && $j > 3)
                            <i class="far fa-star"></i>
                        @elseif($item->id == 2 && $j <= 5)
                            <i class="fas fa-star"></i>
                        @elseif($item->id == 2 && $j > 5)
                            <i class="far fa-star"></i>
                        @else
                            @if($j <= rand(1,5))
                                <i class="fas fa-star"></i>
                            @else
                                <i class="far fa-star"></i>
                            @endif
                        @endif
                @endfor

                <p>{{$item->description}}</p>

                {{-- creer un button qui ajoute l'item au panier --}}
                <script>
                    function panier(){
                        event.preventDefault();
                        console.log('panier');
                    }
                </script>

                <button class="btn_panier" onclick="panier()">Ajouter au panier</button>

                    
            </div>
        </div>

    @endforeach

</main>

{{-- ********* footer ********* --}}
@include('layouts.footer')
    
@endsection