@extends ('layouts.dashboard')

@section('content')
  <h1>Edita Incentiu</h1>
  <form method="POST" action="/incentive/{{ $incentive->id }}">
    {{ method_field('PUT') }}
    @include('incentive._form')
  </form>
@endsection
