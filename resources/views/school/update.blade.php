@extends ('layouts.dashboard')

@section('content')
  <h1>Edita Escola/Facultat</h1>
  <form method="POST" action="/school/{{ $school->id }}">
    {{ method_field('PUT') }}
    @include('school._form')
  </form>

@endsection
