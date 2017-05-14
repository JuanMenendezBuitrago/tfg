@extends('layouts.dashboard')

@section('content')
  <table id="list" class="table table-bordered table-hover table-striped">
    <thead>
      <tr><th class="col-md-4">Fitxer</th><th class="col-md-4">Propietari</th><th class="col-md-3">Data de creació</th><th class="col-md-1"></th></tr>
    </thead>
    <tfoot>
      <tr><th>Fitxer</th><th>Propietari</th><th>Data de creació</th><th></th></tr>
    </tfoot>
    <tbody>
    @foreach ($files as $file)
      <tr>
        <td>{{ $file->name }}</td><td>{{$file->user->name}}</td><td>{{ $file->created_at }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection

@section('dataTable-js')
  @include('partials.dataTable-js')
@stop

@section('dataTable-css')
  @include('partials.dataTable-css')
@stop