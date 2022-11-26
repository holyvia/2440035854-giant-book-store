@extends('navbar')

@section('content')

<div class="bg-warning">
    <h3 class="p-4 text-light">Book detail</h3>
</div>
<div class="row">
    <div class="col-md-6 offset-md-3">
        <img src="{{ $data['book']['image'] }}" alt="">
        <p>Title: {{ $data['book']['title'] }}</p>
        <p>Author: {{ $data['book']['author'] }}</p>
        <p>Publisher: {{ $data['book']['publisher']['name'] }}</p>
        <p>Year: {{ $data['book']['year'] }}</p>
        <p>Synopsis: </p>
        <p>{{$data['book']['synopsis']}}</p>
    </div>
</div>

@endsection
