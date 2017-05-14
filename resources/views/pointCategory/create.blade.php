@extends ('layouts.dashboard')

@section('content')
  <h1>Nova categoria</h1>
  <form method="POST" action="/pointCategory">
    @include('pointCategory._form')
  </form>

@endsection