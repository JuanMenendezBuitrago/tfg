@extends ('layouts.dashboard')

@section('content')
  <h1>Edita Curs</h1>
  <form method="POST" action="/course/{{ $course->id }}">
    {{ method_field('PUT') }}
    @include('course._form')
  </form>

@endsection
