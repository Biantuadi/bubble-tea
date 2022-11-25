
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

                

                <form action="{{ route('ajouter.panier') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <input type="hidden" name="name" value="{{$item->name}}">
                    <input type="hidden" name="price" value="{{$item->price}}">
                    <input type="hidden" name="imgUrl" value="{{$item->imgUrl}}">
                <button type="submit" class="btn_panier">Ajouter au panier</button>
                </form>

                    
            </div>
        </div>

    @endforeach

</main>

{{-- ********* footer ********* --}}
@include('layouts.footer')
    
@endsection