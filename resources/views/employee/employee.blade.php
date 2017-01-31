@extends('layout')

@section('content')
<h1>Hi ! I am rockey ahmed</h1>

    @foreach($Employee_data as $data_info)
    <li>{{$data_info->name}}</li>
    <li>{{$data_info->email}}</li>
    @endforeach
@stop

@section('footeer')

@stop