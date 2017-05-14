@extends('layouts.dashboard')

@section('content')
  <table id="list" class="table table-bordered table-hover table-striped">
    <thead>
      <tr><th class="col-md-3">Nivel</th><th class="col-md-3">Assignatura</th><th class="col-md-5">Descripció</th><th id="actions" class="col-md-1"></th></tr>
    </thead>
    <tfoot>
      <tr><th>Nivel</th><th>Assignatura</th><th>Descripció</th><th></th></tr>
    </tfoot>
    <tbody>
    @foreach ($levels as $level)
      <tr>
        <td class="record-title">{{ $level->name }}</td>
        <td>{{$level->course->code}} - {{ $level->course->name }}</td>
        <td>{{ $level->description }}</td>
        <td>
          <a href="{{ route('level.show',['level'=> $level->id]) }}"><i class="fa fa-eye"></i></a>
          <a href="{{ route('level.edit',['level'=> $level->id]) }}"><i class="fa fa-edit"></i></a>
          <a href="{{ route('level.destroy',['level'=> $level->id]) }}" class="delete-resource"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <a href="{{ route('level.create') }}" class="btn btn-success btn-lg"><i class="fa fa-plus-circle"></i> Crea un nou nivel</a>

@endsection

@section('dataTable-js')
  @include('partials.dataTable-js')
@stop

@section('dataTable-css')
  @include('partials.dataTable-css')
@stop