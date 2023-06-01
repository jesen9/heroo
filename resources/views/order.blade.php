@extends('navbar')
@section('title','page sample')

@section('content')
    <h1>Order</h1>
    <form enctype="multipart/form-data" action="/order" method="POST">
        <input type="text">
    </form>
@endsection
