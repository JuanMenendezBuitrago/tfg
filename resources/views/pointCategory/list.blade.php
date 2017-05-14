@extends('layouts.dashboard')

@section('content')
  <table id="list" class="table table-bordered table-hover table-striped">
    <thead>
      <tr><th class="col-md-5">Nom</th><th class="col-md-6">Descripció</th><th class="col-md-1" id="actions"></th></tr>
    </thead>
    <tfoot>
      <tr><th>Nom</th><th>Descripció</th><th></th></tr>
    </tfoot>
    <tbody>
    @foreach ($categories as $category)
      <tr>
        <td class="record-title">{{ $category->name }}</td>
        <td>{{ $category->description }}</td>
        <td>
          <a href="{{ route('pointCategory.show',['pointCategory'=> $category->id]) }}"><i class="fa fa-eye"></i></a>
          <a href="{{ route('pointCategory.edit',['pointCategory'=> $category->id]) }}"><i class="fa fa-edit"></i></a>
          <a href="{{ route('pointCategory.destroy',['pointCategory'=> $category->id]) }}" class="delete-resource"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <a href="{{ route('pointCategory.create') }}" class="btn btn-success btn-lg"><i class="fa fa-plus-circle"></i> Crea una nova categoria de punts</a>

@endsection

@section('dataTable-js')
  @include('partials.dataTable-js')
@stop

@section('dataTable-css')
  @include('partials.dataTable-css')
@stop