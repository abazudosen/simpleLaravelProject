@extends('layouts.master')

@section ('body')
@foreach($users as $user)
    <li>{!! $user['fn'] !!} {!! $user['ln'] !!} from {!! $user['location'] !!}</li>
    
@endforeach

@endsection