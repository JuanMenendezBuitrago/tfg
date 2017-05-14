@extends('layouts.dashboard')

@section('content')
  <table id="list" class="table table-bordered table-hover table-striped">
    <thead>
      <tr><th class="col-md-3">Nom</th><th class="col-md-3">Assignatura</th><th class="col-md-5">Descripció</th><th id="actions" class="col-md-1"></th></tr>
    </thead>
    <tfoot>
      <tr><th>Nom</th><th>Assignatura</th><th>Descripció</th><th></th></tr>
    </tfoot>
    <tbody>
    @foreach ($activities as $activity)
      <tr>
        <td class=" record-title">{{ $activity->name }}</td>
        <td>{{$activity->course->name}}</td>
        <td>{{ $activity->description }}</td>
        <td>
          <a href="{{ route('activity.show',['activity'=> $activity->id]) }}"><i class="fa fa-eye"></i></a>
          <a href="{{ route('activity.edit',['activity'=> $activity->id]) }}"><i class="fa fa-edit"></i></a>
          <a href="{{ route('activity.destroy',['activity'=> $activity->id]) }}" class="delete-resource"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <a href="{{ route('activity.create') }}" class="btn btn-success btn-lg"><i class="fa fa-plus-circle"></i> Crea una nova activitat</a>

@endsection

@section('dataTable-js')
  @include('partials.dataTable-js')
@stop

@section('dataTable-css')
  @include('partials.dataTable-css')
@stop