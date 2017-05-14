@extends ('layouts.dashboard')

@section('content')
    <form method="POST" class="dropzone" id="dropzone" action="/user">
    @include('user._form')
    </form>
@endsection

@section('dropzone-javascript')
  @include('partials.dropzone-js')
@endsection

@section('dropzone-styles')
  @include('partials.dropzone-css')
@endsection

