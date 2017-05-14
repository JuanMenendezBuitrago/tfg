@extends('layouts.dashboard')

@section('content')
  <div class="clearfix">
    <div class="head col-sm-12 col-md-offset-5 col-md-2">
    @if ($user->avatar)
      <div class="avatar fixed" style="background-image: {{ $user->avatar }}"></div>
    @else
      <div class="avatar fixed"></div>
    @endif
    </div>
  </div>
  <h1 class="user-data">{{ $user->name }}</h1>
  <h3 class="user-data">{{ $user->niu }}</h3>
  <div class="col-md-6">
    <div class="form-horizontal">
      <div class="form-group">
        <label class="control-label col-sm-12 col-md-4">Estudis</label>
        <div class="col-sm-12 col-md-8">
          <div class="form-control-static"> 
            @foreach ($groupedDegrees as $school)
            <div class="section-heading">{{ $school->name }}</div>
              @foreach ($school->degrees as $degree)
            <div class="section-item">{{ $degree->name}}</div>
              @endforeach
            @endforeach
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-12 col-md-4">Assignatures</label>
        <div class="col-sm-12 col-md-8">
          <div class="form-control-static">
            @foreach ($groupedDegrees as $school)
            @foreach ($school->degrees as $degree)
              @if (count($school->degrees) > 1 || count($groupedDegrees)>1)
            <div class="section-heading">{{ $degree->name }}</div>
              @endif
              @foreach ($degree->courses as $course)
            <div class="section-item">{{ $course->name}}</div>
              @endforeach
            @endforeach
            @endforeach 
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="col-md-6">
    <div class="form-horizontal">
      <div class="form-group">
        <div class="col-sm-12 col-md-4">
          <label class="control-label">merits</label>
        </div>
        <div class="col-md-12 col-md-8"></div>
      </div>
      <div class="form-group">
        <div class="col-sm-12 col-md-4">
          <label class="control-label">incentius</label>
        </div>
        <div class="col-md-12 col-md-8"></div>
      </div>
      <div class="form-group">
          <div class="col-sm-12 col-md-4">
            <label class="control-label">activitats i punts</label>
          </div>
          <div class="col-sm-12 col-md-8">
            <div class="form-control-static">
               @foreach ($userCoursesWithPoints as $course)
              <div class="section-heading">{{ $course->name }}
              <span class="badge pull-right">{{
                $course->activities->sum(function($activity){
                  return $activity->pointsSum->sum('sum');
                })
            }}</span>
            <span class="badge badge-karma pull-right">{{
                $course->activities->sum(function($activity){
                  return $activity->pointsSum()->where('name','karma')->get()->sum('sum');
                })
            }}</span>
            <span class="badge badge-salut pull-right">{{
                $course->activities->sum(function($activity){
                  return $activity->pointsSum()->where('name','salut')->get()->sum('sum');
                })
            }}</span>
            <span class="badge badge-experiencia pull-right">{{
                $course->activities->sum(function($activity){
                  return $activity->pointsSum()->where('name','experiencia')->get()->sum('sum');
                })
            }}</span>
              </div>
                @foreach ($course->activities as $activity)
              <div class="section-item">{{ $activity->name}} </div>
              <div class="section-item">
                  @foreach ($activity->pointsSum as $point)
              {{-- {{var_dump($point)}} --}}
                  <a href=""><span class="badge badge-{{$point->name}}">{{$point->name}} {{$point->sum}}</span></a>
                  @endforeach
                </div>
                @endforeach
                </div>
              @endforeach 
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection