@extends('layouts.dashboard')

@section('content')
  <table id="list" class="table table-bordered table-hover table-striped">
    <thead>
      <tr><th class="col-md-2">Nom</th><th class="col-md-9">Nom lellible</th><th id="actions" class="col-md-1"></th></tr>
    </thead>
    <tfoot>
      <tr><th>Nom</th><th>Nom lellible</th><th></th></tr>
    </tfoot>
    <tbody>
    @foreach ($permissions as $permission)
      <tr>
        <td class="record-title">{{ $permission->name }}</td>
        <td>{{ $permission->readable_name }}</td>
        <td>
          <a href="{{ route('permission.show',['permission'=> $permission->id]) }}"><i class="fa fa-eye"></i></a>
          <a href="{{ route('permission.edit',['permission'=> $permission->id]) }}"><i class="fa fa-edit"></i></a>
          <a href="{{ route('permission.destroy',['permission'=> $permission->id]) }}" class="delete-resource"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <a href="{{ route('permission.create') }}" class="btn btn-success btn-lg"><i class="fa fa-plus-circle"></i> Crea un nou permís</a>
@endsection

@section('dataTable-js')
  @include('partials.dataTable-js')
@stop

@section('dataTable-css')
  @include('partials.dataTable-css')
@stop