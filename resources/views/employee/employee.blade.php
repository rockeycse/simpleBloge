@extends('layout')

@section('content')
<h1>Hi ! I am rockey ahmed</h1>

    @foreach($data as $data_info)
    <li>{{$data_info->name}}</li>
    @endforeach
@stop

@section('footeer')

@stop