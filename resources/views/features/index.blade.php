@extends('layouts.layout')


@section('content')

    @include('layouts._nav')
    @include('layouts._jumboTron')


    @if(isset($features))
        <h1> It's good </h1>
        @else
        <h1> It's bad</h1>
    @endif



@stop

@section('footer')
    @include('layouts._footer')
    @include('layouts._js')
@stop