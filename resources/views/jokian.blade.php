@extends('layouts.main')


@section('container')

@foreach ($paket as $listpaket)
    <div class="row">
        <div class="card-group">
            <div class="card" >
                <h4>{{ $listpaket["paket"] }}</h4>
                <h6>{{ $listpaket["price"] }}</h6>
                <p class="fw-bolder">{{ $listpaket["penjoki"] }}</p>
            </div>
        </div>
    </div>
@endforeach

@endsection
