@extends ('layouts.dashboard')

@section('content')
  <h1>Nou merit</h1>
  <form method="POST" action="/merit">
    @include('merit._form')
  </form>

@endsection
