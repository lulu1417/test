@extends('board.layout')
@section('content')
    <h1>Cusomers</h1>

    <ul>
        @foreach ($customers as $customer)
            <li>{{$customer}}</li>
        @endforeach
    </ul>
@endsection
