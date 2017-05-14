@extends ('layouts.dashboard')

@section('content')
  <h1>Dòna punts</h1>
  <form method="POST" action="/point">
    @include('point._form')
  </form>

@endsection