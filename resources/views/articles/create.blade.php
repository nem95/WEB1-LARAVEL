@extends('layouts.app')

@section('content')
    <form action="{{route('articles.store')}}" method="POST">
        {{csrf_field()}}
        <input type="text" name="title">
        <input type="submit">
    </form>    
@endsection