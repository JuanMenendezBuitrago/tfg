@extends('layouts.dashboard')

@section('content')
  
  <table id="list" class="table table-bordered table-hover table-striped">
    <thead>
      <tr><th class="col-md-4">Nom</th><th class="col-md-7">Descripció</th><th id="actions"></th></tr>
    </thead>
    <tfoot>
      <tr><th>Nom</th><th>Descripció</th><th></th></tr>
    </tfoot>
    <tbody>
    @foreach ($schools as $school)
      <tr>
        <td class="record-title">{{ $school->name }}</td>
        <td>{{ $school->description }}</td>
        <td>
          <a href="{{ route('school.show',['school'=> $school->id]) }}"><i class="fa fa-eye"></i></a>
          <a href="{{ route('school.edit',['school'=> $school->id]) }}"><i class="fa fa-edit"></i></a>
          <a href="{{ route('school.destroy',['school'=> $school->id]) }}" class="delete-resource"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <a href="{{ route('school.create') }}" class="btn btn-success btn-lg"><i class="fa fa-plus-circle"></i> Agraga una nova facultat/escola</a>

@endsection

@section('dataTable-js')
  @include('partials.dataTable-js')
@stop

@section('dataTable-css')
  @include('partials.dataTable-css')
@stop