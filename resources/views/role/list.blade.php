@extends('layouts.dashboard')

@section('content')
  <table id="list" class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th class="col-md-2">nom</th>
        <th class="col-md-2">nom lellible</th>
        <th class="col-md-7">descripció</th>
        <th id="actions" class="col-md-1"></th></tr>
    </thead>
    <tfoot>
      <tr>
        <th>nom</th>
        <th>nom lellible</th>
        <th>descripción</th>
        <th></th></tr>
    </tfoot>
    <tbody>
    @foreach ($roles as $role)
      <tr>
        <td class="record-title">{{ $role->name }}</td>
        <td>{{ $role->readable_name }}</td>
        <td>{{ $role->descripti }}</td>
        <td>
          <a href="{{ route('role.show',['role'=> $role->id]) }}"><i class="fa fa-eye"></i></a>
          <a href="{{ route('role.edit',['role'=> $role->id]) }}"><i class="fa fa-edit"></i></a>
          <a href="{{ route('role.destroy',['role'=> $role->id]) }}" class="delete-resource"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <a href="{{ route('role.create') }}" class="btn btn-success btn-lg"><i class="fa fa-plus-circle"></i> Crea un nou rol</a>
@endsection

@section('dataTable-js')
  @include('partials.dataTable-js')
@stop

@section('dataTable-css')
  @include('partials.dataTable-css')
@stop