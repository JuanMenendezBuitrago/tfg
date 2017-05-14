@extends ('layouts.dashboard')

@section('content')
  <h1>Nou nivel</h1>
  <form method="POST" action="/level">
    @include('level._form')
  </form>

@endsection
