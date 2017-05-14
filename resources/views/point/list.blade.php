@extends('layouts.dashboard')

@section('content')
  <table id="list" class="table table-bordered table-hover table-striped">
    <thead>
      <tr><th class="col-md-1">Quantitat</th><th class="col-md-3">Usuari</th><th class="col-md-4">Activitat</th><th class="col-md-3">Categoria</th><th id="actions" class="col-md-1"></th></tr>
    </thead>
    <tfoot>
      <tr><th>Quantitat</th><th>Usuari</th><th>Activitat</th><th>Categoria</th><th></th></tr>
    </tfoot>
    <tbody>
    @foreach ($points as $point)
      <tr>
        <td class="record-title">{{ $point->amount }}</td>
        <td>{{ $point->user->name }}</td>
        <td>{{ $point->activity->name }}</td>
        <td>{{ $point->category->name }}</td>
        <td>
          <a href="{{ route('point.show',['point'=> $point->id]) }}"><i class="fa fa-eye"></i></a>
          <a href="{{ route('point.edit',['point'=> $point->id]) }}"><i class="fa fa-edit"></i></a>
          <a href="{{ route('point.destroy',['point'=> $point->id]) }}" class="delete-resource"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <a href="{{ route('point.create') }}" class="btn btn-success btn-lg"><i class="fa fa-plus-circle"></i> Dòna punts</a>

@endsection

@section('dataTable-js')
  @include('partials.dataTable-js')
@stop

@section('dataTable-css')
  @include('partials.dataTable-css')
@stop