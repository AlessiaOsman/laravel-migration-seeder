@extends('layouts.main')

@section('title', 'home')


@section('main-content')

<h1 class='text-center mb-5'>Tabellone Orari</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Azienda</th>
      <th scope="col">Stazione di partenza</th>
      <th scope="col">Stazione di arrivo</th>
      <th scope="col">Orario di partenza</th>
      <th scope="col">Orario di arrivo</th>
      <th scope="col">Codice treno</th>
      <th scope="col">Numero carrozze</th>
      <th scope="col">Stato</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($trains as $train )
      <tr>
      <th scope="row">{{$train->id}}</th>
      <td>{{$train->company}}</td>
      <td>{{$train->departure_station}}</td>
      <td>{{$train->arrival_station}}</td>
      <td>{{$train->departure_time}}</td>
      <td>{{$train->arrival_time}}</td>
      <td>{{$train->train_code}}</td>
      <td>{{$train->cabs_number}}</td>
      <td>{{$train->getStatus()}}</td>
    </tr>
  @endforeach
    
  </tbody>
</table>

@endsection