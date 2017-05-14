@extends ('layouts.dashboard')

@section('content')
  <h1>Nova escola/facultat</h1>
  <form method="POST" action="/school">
    @include('school._form')
  </form>

@endsection
