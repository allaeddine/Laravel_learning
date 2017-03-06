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

    <h1>


        Post Page
        <ul>
        @if(count($people))
            @foreach($people as $person)
                <li>{{$person}}</li>
            @endforeach



        @endif
        </ul>
    </h1>


@endsection