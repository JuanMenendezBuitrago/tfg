@extends('layouts.dashboard')

@section('content')
  <h1>Edita permís</h1>
  <form method="POST" action="/permission/{{ $permission->id }}">
    {{ method_field('PUT') }}
    @include('permission._form')
  </form>
@stop