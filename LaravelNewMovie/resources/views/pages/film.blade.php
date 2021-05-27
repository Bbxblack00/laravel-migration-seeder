
{{-- come detto a lezione sara'
 da rifare la parte di migration+model+factory+seeder
 per una nuova tabella in nuovo progetto;
 la tabella sara' quella dei movies vista venerdi';
 andrete quindi a ricrearla in un nuovo db
 (attraverso le migration)
 e poi a popolarla di dati fake --}}

@extends('layouts.main-layout')

@section('principal')

<div class="container">


    <h1>{{ $movie -> title }}</h1>


</div>
    
@endsection