@extends ('layouts.dashboard')

@section('content')
  <h1>Nova titulació</h1>
  <form method="POST" action="/degree">
    @include('degree._form')
  </form>
@endsection
