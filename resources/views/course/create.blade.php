@extends ('layouts.dashboard')

@section('content')
  <h1>Nou Curs</h1>
  <form method="POST" action="/course">
    @include('course._form')
  </form>

@endsection
