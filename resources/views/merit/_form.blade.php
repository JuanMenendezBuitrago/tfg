
  {{ csrf_field() }}
  <div class="form-group form-group-lg {{ ($errors->first('name'))?'has-error':'' }}">
    <label class="control-label" for="name">nom</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="nom" value="{{ $merit->name?:'' }}"/>
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
    <textarea class="form-control" name="description" id="description" placeholder="descripció">{{ $merit->description?:'' }}</textarea>
    @include('partials.field-error', ['field' => 'description'])
  </div>  
  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> desa</button>
  </div>
