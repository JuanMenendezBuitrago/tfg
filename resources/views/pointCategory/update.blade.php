@extends ('layouts.dashboard')

@section('content')
  <h1>Edita Categoria</h1>
  <form method="POST" action="/pointCategory/{{ $category->id }}">
    {{ method_field('PUT') }}
    @include('pointCategory._form')
  </form>

@endsection