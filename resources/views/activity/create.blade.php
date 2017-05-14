@extends ('layouts.dashboard')

@section('content')
  <h1>Nova activitat</h1>
  <form method="POST" action="/activity">
    @include('activity._form')
  </form>

@endsection
