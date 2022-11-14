@extends('layouts.default')

@section('main')
{{-- ********* header ********* --}}
@include('layouts.header')



<main class="main_dashboard">
    @include('layouts.profil')

    <h1>{{$item->name}}</h1>

</main>

{{-- ********* footer ********* --}}
@include('layouts.footer')
    
@endsection