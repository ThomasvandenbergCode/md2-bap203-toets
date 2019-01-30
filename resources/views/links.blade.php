@extends('layouts.master')

@section('content')

@foreach($links as $link)
    <p>{{$link->title}}</p>
    @endforeach
@endsection