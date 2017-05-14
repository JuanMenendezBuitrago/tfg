@extends ('layouts.dashboard')

@section('content')
  <h1>Edita Titulació</h1>
  <form method="POST" action="/degree/{{ $degree->id }}">
    {{ method_field('PUT') }}
    @include('degree._form')
  </form>

@endsection
