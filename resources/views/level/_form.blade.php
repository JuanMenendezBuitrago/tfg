  {{ csrf_field() }}
  <div class="form-group form-group-lg {{ ($errors->first('name'))?'has-error':'' }}">
    <label class="control-label" for="name">nom</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="nom" value="{{ $level->name?:'' }}"/>
    @include('partials.field-error', ['field' => 'name'])
  </div>
  <div class="form-group form-group-lg {{ ($errors->first('course_id'))?'has-error':'' }}">
    <label class="control-label" for="course_id">asignatura</label>
    <select class="form-control" name="course_id" id="course_id">
      @foreach($courses as $course)
      <option value="{{ $course->id }}" {{ (isset($activity->course) && $activity->course->id == $course->id)?'selected':'' }}>{{ $course->code }} - {{ $course->name }}</option>
      @endforeach
    </select>
    @include('partials.field-error', ['field' => 'course_id'])
  </div>
  <div class="form-group form-group-lg {{ ($errors->first('description'))?'has-error':'' }}">
    <label class="control-label" for="description">descripció</label>
    <textarea class="form-control" name="description" id="description" placeholder="descripció">{{ $level->description?:'' }}</textarea>
    @include('partials.field-error', ['field' => 'description'])
  </div>  
  <div class="form-group form-group-lg {{ ($errors->first('min'))?'has-error':'' }}">
    <label class="control-label" for="min">minim</label>
    <input type="number" class="form-control" name="min" id="min" value="{{ $level->min?:0 }}" />
    @include('partials.field-error', ['field' => 'min'])
  </div>
  <div class="form-group form-group-lg {{ ($errors->first('max'))?'has-error':'' }}">
    <label class="control-label" for="max">maxim</label>
    <input type="number" class="form-control" name="max" id="max" value="{{ $level->max?:100 }}" />
    @include('partials.field-error', ['field' => 'max'])
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> desa</button>
  </div>
