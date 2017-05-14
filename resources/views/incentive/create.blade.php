@extends ('layouts.dashboard')

@section('content')
  <h1>Nou incentiu</h1>
  <form method="POST" action="/incentive">
    @include('incentive._form')
  </form>
@endsection
