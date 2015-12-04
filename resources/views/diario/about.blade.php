@extends('template')
@section('activep','')
@section('actives','active')

@section('autor',$autor)

@section('skills')
    Skills:
    <ul>
    @foreach( $skills as $s)
        <li>{{$s}}</li>
    @endforeach
    </ul>
@stop