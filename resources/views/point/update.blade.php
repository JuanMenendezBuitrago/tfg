@extends ('layouts.dashboard')

@section('content')
  <h1>Edita Punt</h1>
  <form method="POST" action="/merit/{{ $point->id }}">
    {{ method_field('PUT') }}
    @include('merit._form')
  </form>

@endsection
