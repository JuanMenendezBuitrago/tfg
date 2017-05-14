@extends('layouts.dashboard')

@section('content')
  <table id="list" class="table table-bordered table-hover table-striped">
    <thead>
      <tr><th class="col-md-3">incentiu</th><th class="col-md-3">assignatura</th><th class="col-md-5">preu</th><th id="actions" class="col-md-1"></th></tr>
    </thead>
    <tfoot>
      <tr><th>incentiu</th><th>assignatura</th><th>preu</th><th></th></tr>
    </tfoot>
    <tbody>
    @foreach ($incentives as $incentive)
      <tr>
        <td class="record-title">{{ $incentive->name }}</td>
        <td>{{ $incentive->course->code }} - {{ $incentive->course->name }}</td>
        <td>{{ $incentive->price }}</td>
        <td>
          <a href="{{ route('incentive.show',['incentive'=> $incentive->id]) }}"><i class="fa fa-eye"></i></a>
          <a href="{{ route('incentive.edit',['incentive'=> $incentive->id]) }}"><i class="fa fa-edit"></i></a>
          <a href="{{ route('incentive.destroy',['incentive'=> $incentive->id]) }}" class="delete-resource"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <a href="{{ route('incentive.create') }}" class="btn btn-success btn-lg"><i class="fa fa-plus-circle"></i> Crea un nou incentiu</a>

@endsection

@section('dataTable-js')
  @include('partials.dataTable-js')
@stop

@section('dataTable-css')
  @include('partials.dataTable-css')
@stop