@extends ('layouts.dashboard')
@section('content')
  <form method="POST" action="/user/{{ $user->id }}" enctype="multipart/form-data">
    {{ method_field('PUT') }}
    @include('user._form')
  </form>
@endsection

@section('dropzone-javascript')
  @include('partials.dropzone-js')
@stop
@section('dropzone-styles')
  @include('partials.dropzone-css')
@stop
