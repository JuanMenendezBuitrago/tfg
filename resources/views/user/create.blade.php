@extends ('layouts.dashboard')

@section('content')
  <form method="POST" action="">
    @include('user._form')
  </form>

@endsection
