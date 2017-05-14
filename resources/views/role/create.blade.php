@extends('layouts.dashboard')

@section('content')
  <h1>Nou grup</h1>
  <form method="POST" action="/role">
    @include('role._form')
  </form>
@stop