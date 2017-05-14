@extends('layouts.dashboard')

@section('content')
  <h1>Nou grup</h1>
  <form method="POST" action="/permission">
    @include('permission._form')
  </form>
@stop