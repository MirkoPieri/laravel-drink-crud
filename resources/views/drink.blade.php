@extends('layoute.layoute')

@section('content')
    @foreach ($values as $value)
      <div class="box">
        <p>{{$value -> nome}}</p>
        <p>{{$value -> marca}}</p>
        <p>{{$value -> prezzo}} euro</p>
        <p>{{$value -> scadenza}}</p>
      </div>
    @endforeach

    <div class="box">
      <p>Prezzo più alto: <br>
          {{$max}} euro</p>
    </div>

    <div class="box">
      <p>Prezzo più basso: <br>
          {{$min}} euro</p>
    </div>

    <div class="box">
      <p>Prezzo medio: <br>
          {{$avg}} euro</p>
    </div>
@endsection
