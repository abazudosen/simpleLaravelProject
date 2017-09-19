@extends('layouts.master')

@section('body')
<form method="post" action="/users">
    {!! csrf_field() !!}
    <input type="text" name="name">    
    <input type="text" name="email">
    <input type="password" name="password">
    <input type="submit" name="Create">
</form>
@endsection