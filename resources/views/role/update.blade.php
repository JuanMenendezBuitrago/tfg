@extends('layouts.dashboard')

@section('content')
  <h1>Edita rol</h1>
  <form method="POST" action="/role/{{ $role->id }}">
    {{ method_field('PUT') }}
    @include('role._form')
  </form>
@stop