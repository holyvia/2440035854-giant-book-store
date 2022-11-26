@extends('navbar')

@section('content')
<div class="card-deck row justify-content-center">
    @foreach ($data['publishers'] as $pb)
    <div class="card col-sm-4 w-25 m-3">
        <img class="card-img-top" src="{{$pb['image']}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $pb['name'] }}</h5>
            <a href="/publisher/{{ $pb['id'] }}" class="btn btn-primary bg-warning">Detail</a>
        </div>
      </div>
    @endforeach
</div>
@endsection
