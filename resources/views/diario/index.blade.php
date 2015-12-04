@extends('template')
@section('activep','active')



@section('actives','')



@section('post1')
    @foreach( $texto1 as $teste)
       {{$teste}} <br>
    @endforeach
@stop

@section('post2')
    @foreach( $texto2 as $teste)
        {{$teste}} <br>
    @endforeach
@stop

@section('post3')
    @foreach( $texto3 as $teste)
        {{$teste}} <br>
    @endforeach
@stop