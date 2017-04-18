@extends ('layouts.dashboard')

@section('content')
  <form method="POST" action="">
    @include('activity._form')
  </form>

@endsection
