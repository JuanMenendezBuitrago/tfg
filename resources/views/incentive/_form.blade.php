
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name">nom</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="nom" value="{{ $incentive->name?:'' }}" />
  </div>
  <div class="form-group">
    <label for="course_id">asignatura</label>
    <select class="form-control" name="course_id" id="course_id">
      @foreach($courses as $course)
      <option value="{{ $course->id }}">{{ $course->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="description">descripció</label>
    <textarea class="form-control" name="description" id="description" placeholder="descripció">{{ $incentive->description?:'' }}</textarea>
  </div>  
  <div class="form-group">
    <button type="submit" class="btn btn-default">desa</button>
  </div>
