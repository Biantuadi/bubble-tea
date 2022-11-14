@extends('layouts.default')

@section('main')
<div class="main_welcom">

    
    @include('layouts.header')


<section class="welcome">
    <div class="kevin_div">
        <img src={{ asset('img/all_fruit.jpg') }} alt="">
    </div>
    <div class="container-Steven">
        <h2>Bienvenue</h2>
        {{-- <br> --}}
     
     <p>C'est en 2013 que nous avons ouvert notre première boutique de Bubble Tea. N'étant pas satisfaits des produits sur le marché français proposés par les quelques distributeurs de Bubble Tea pas forcément spécialisés sur ces produits, nous avons rapidement commencé à chercher ce qui se faisait de mieux et de plus traditionnel directement à Taïwan. Après 2 ans de recherches et de comparaisons, nous avons pu sourcer les meilleurs produits qui ont fait le succès de nos boutiques pour Bubble Tea ❤️</p>
     <br>
     <br>
         
         <div class="btns">
            @if (Route::has('login'))
                    <div class="" style="">
                        @auth
                            <a href="{{ url('/home') }}" class="">Home</a>
                        @else
                            
                        
                            <a href="{{ route('login') }}" class="">Log in</a>
                          
                            @if (Route::has('register'))
                            
                                <a href="{{ route('register') }}" class="">Register</a>
                            
                            @endif
                        @endauth
                    </div>
                @endif

             
             
         </div>
     
</section>
    
</div>
@endsection