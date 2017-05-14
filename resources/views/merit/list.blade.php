@extends('layouts.dashboard')

@section('content')
  <table id="list" class="table table-bordered table-hover table-striped">
    <thead>
      <tr><th class="col-md-3">Merit</th><th class="col-md-3">Assignatura</th><th class="col-md-5">Descripció</th><th id="actions" class="col-md-1"></th></tr>
    </thead>
    <tfoot>
      <tr><th>Merit</th><th>Assignatura</th><th>Descripció</th><th></th></tr>
    </tfoot>
    <tbody>
    @foreach ($merits as $merit)
      <tr>
        <td class="record-title">{{ $merit->name }}</td>
        <td>{{$merit->course->code}} - {{ $merit->course->name }}</td>
        <td>{{ $merit->description }}</td>
        <td>
          <a href="{{ route('merit.show',['merit'=> $merit->id]) }}"><i class="fa fa-eye"></i></a>
          <a href="{{ route('merit.edit',['merit'=> $merit->id]) }}"><i class="fa fa-edit"></i></a>
          <a href="{{ route('merit.destroy',['merit'=> $merit->id]) }}" class="delete-resource"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <a href="{{ route('merit.create') }}" class="btn btn-success btn-lg"><i class="fa fa-plus-circle"></i> Crea un nou merit</a>

@endsection

@section('dataTable-js')
  @include('partials.dataTable-js')
@stop

@section('dataTable-css')
  @include('partials.dataTable-css')
@stop