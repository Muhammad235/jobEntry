@extends('layout')

@section('content')
    <form method="POST" action="/users" class="form">
        @csrf

        <input type="text" name="" id="" class="form-control" >
    </form>
@endsection