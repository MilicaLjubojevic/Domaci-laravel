@extends('layouts.app')
@section('content')
<div style="background-color:Violet;">
    <h1> Rezervacije za elektricne tortinete </h1>
     @if(count($rez)>0)
    @foreach ($rez as $r)
        <div class="well">
            <h3> <a href = "/trotinet/public/rezervacije/{{$r->id}}">Prikazi nosioca rezervacije: {{$r->ime}}{{$r->prezime}}</a> </h3>
            <p> Datum preuzimanja: {{$r->datum_preuzimanja}}</p>
</div>
    @endforeach
    @endif
@endsection
</div>
