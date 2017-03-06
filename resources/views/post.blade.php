<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2/26/17
 * Time: 10:44 PM
 */



?>

@extends('layouts.app')

@section('content')
    <ul>
    @foreach($result as $row)
        <li>{{$row->title}}</li>
        <li>{{$row->content}}</li>
    @endforeach

    </ul>
@endsection



@section('footer')


@stop
