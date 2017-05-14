@extends ('layouts.dashboard')

@section('content')
  <h1>Edita Nivel</h1>
  <form method="POST" action="/level/{{ $incentive->id }}">
    {{ method_field('PUT') }}
    @include('level._form')
  </form>

@endsection
