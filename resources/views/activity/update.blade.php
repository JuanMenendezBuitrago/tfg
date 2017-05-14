@extends ('layouts.dashboard')

@section('content')
  <h1>Edita activitat</h1>
  <form method="POST" action="/activity/{{ $activity->id }}">
    {{ method_field('PUT') }}
    @include('activity._form')
  </form>

@endsection
