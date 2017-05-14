@extends ('layouts.dashboard')

@section('content')
  <h1>Edita Merit</h1>
  <form method="POST" action="/merit/{{ $merit->id }}">
    {{ method_field('PUT') }}
    @include('merit._form')
  </form>

@endsection
