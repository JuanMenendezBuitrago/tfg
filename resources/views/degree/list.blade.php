@extends('layouts.dashboard')

@section('content')
  <table id="list" class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th class="col-md-4">Nom</th>
      <th class="col-md-2">Escola</th>
        <th class="col-md-5">Descripció</th>
        <th id="actions" class="col-md-1"></th>
        </tr>
    </thead>
    <tfoot>
      <tr>
        <th>Nom</th>
        <th>Escola</th>
        <th>Descripció</th>
        <th></th>
        </tr>
    </tfoot>
    <tbody>
    @foreach ($degrees as $degree)
      <tr>
        <td class="record-title">{{ $degree->name }}</td>
        <td>{{ $degree->school->name }}</td>
        <td>{{ $degree->description }}</td>
        <td>
          <a href="{{ route('degree.show',['degree'=> $degree->id]) }}"><i class="fa fa-eye"></i></a>
          <a href="{{ route('degree.edit',['degree'=> $degree->id]) }}"><i class="fa fa-edit"></i></a>
          <a href="{{ route('degree.destroy',['degree'=> $degree->id]) }}" class="delete-resource"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <a href="{{ route('degree.create') }}" class="btn btn-success btn-lg"><i class="fa fa-plus-circle"></i> Crea un nou grau/estudi</a>

@endsection

@section('dataTable-js')
  @include('partials.dataTable-js')
@stop

@section('dataTable-css')
  @include('partials.dataTable-css')
@stop