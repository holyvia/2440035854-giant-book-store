@extends('navbar')
@section('content')

<div class="bg-warning">
    <h3 class="p-4 text-light">Publisher Detail</h3>
</div>
<div class="row">
    <div class="col-md-6 offset-md-3">
        <img src="{{$data['publisher']['image']}}" alt="">
        <h3>{{ $data['publisher']['name'] }}</h3>
        <h3>Address:</h3>
        <p>{{ $data['publisher']['address']}}</p>
        <h3>Phone:</h3>
        <p>{{ $data['publisher']['phone']}}</p>
        <h3>Email:</h3>
        <p>{{ $data['publisher']['email']}}</p>
        <div class="card-deck row justify-content-center">
            @foreach ($data['publisher']->books as $bk)
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
    </div>
</div>

@endsection
