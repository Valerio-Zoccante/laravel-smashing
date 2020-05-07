@php
    $arrayArticoli = config('articoli');
@endphp

@extends('layout.user-layout')
@section('titolo')
    articoli
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($arrayArticoli as $key => $articolo)
                <div class="col-4">
                    <div class="articolo card">
                        <img src="{{$articolo['avatar']}}" alt="avatar">
                        <h3>nome autore: {{$articolo['nomeAutore']}}</h3>
                        <div class="articolo-info">
                            <h2><a href="{{route('articoli.show', $key)}}">{{$articolo['titolo']}}</a></h2>
                            <p>{{$articolo['descrizione']}}</p>
                            <small>{{$articolo['data']}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
