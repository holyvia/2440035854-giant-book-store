@extends('navbar')

@section('content')
<div class="bg-warning">
    <h3 class="p-4 text-light">{{$data['category']['name']}}</h3>
</div>
<div class="card-deck row justify-content-center">
    @foreach ($data['category']->books as $bk)
    <div class="card col-sm-4 w-25 m-3">
        <img class="card-img-top" src="{{$bk['image']}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $bk['title'] }}</h5>
            <p class="card-text">{{ $bk['author'] }}</p>
            <a href="/book/{{ $bk['id'] }}" class="btn btn-primary ">Detail</a>
        </div>
      </div>
    @endforeach
</div>
@endsection
