
@extends('layouts.app-master')

@section('content-3')
    <form action="{{ route('tienda-login') }}" method="post">
        @csrf
        username/email
        <input type="text" name="username" id="">
        password
        <input type="password" name="password" id="">
        
        <input type="submit" value="Login">
@endsection