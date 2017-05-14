@extends('layouts.dashboard')

@section('content')
  <table id="list" class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th class="col-md-3">nom</th>
        <th class="col-md-1">NIU</th>
        <th class="col-md-3">nickname</th>
        <th class="col-md-4">email</th>
        <th class="col-md-1" id="actions"></th></tr>
    </thead>
    <tfoot>
      <tr>
        <th>nom</th>
        <th>NIU</th>
        <th>nickname</th>
        <th>email</th>
        <th></th></tr>
    </tfoot>
    <tbody>
    @foreach ($users as $user)
      <tr>
        <td class="record-title">{{ $user->name }}</td>
        <td>{{ $user->niu }}</td>
        <td>{{ $user->nickname }}</td>
        <td>{{ $user->email }}</td>
        <td>
          <a href="{{ route('user.show',['user'=> $user->id]) }}"><i class="fa fa-eye"></i></a>
          <a href="{{ route('user.edit',['user'=> $user->id]) }}"><i class="fa fa-edit"></i></a>
          <a href="{{ route('user.destroy',['user'=> $user->id]) }}" class="delete-resource"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <a href="{{ route('user.create') }}" class="btn btn-success btn-lg"><i class="fa fa-plus-circle"></i> Crea un nou usuari</a>

@endsection

@section('dataTable-js')
  @include('partials.dataTable-js')
@stop

@section('dataTable-css')
  @include('partials.dataTable-css')
@stop