@extends('layouts.dashboard')

@section('content')
  
  <table id="list" class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th class="col-md-4">Nom</th>
        <th class="col-md-1">Codi</th>
        <th class="col-md-1">Any</th>
        <th class="col-md-5">Grau/Titulació</th>
        <th id="actions" class="col-md-1"></th></tr>
    </thead>
    <tfoot>
      <tr>
      <th>Nom</th>
      <th>Codi</th>
      <th>Any</th>
      <th>Grau/Titulació</th>
      <th></th></tr>
    </tfoot>
    <tbody>
    @foreach ($courses as $course)
      <tr>
        <td class="record-title">{{ $course->name }}</td>
        <td>{{ $course->code }}</td>
        <td>{{ $course->year }}</td>
        <td>{{ $course->degree->name }}</td>
        <td>
          <a href="{{ route('course.show',['course'=> $course->id]) }}"><i class="fa fa-eye"></i></a>
          <a href="{{ route('course.edit',['course'=> $course->id]) }}"><i class="fa fa-edit"></i></a>
          <a href="{{ route('course.destroy',['course'=> $course->id]) }}" class="delete-resource"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <a href="{{ route('course.create') }}" class="btn btn-success btn-lg"><i class="fa fa-plus-circle"></i> Crea una nova assignatura</a>

@endsection

@section('dataTable-js')
  @include('partials.dataTable-js')
@stop

@section('dataTable-css')
  @include('partials.dataTable-css')
@stop