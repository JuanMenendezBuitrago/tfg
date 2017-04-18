
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name">nom</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="nom" value="{{ $course->name?:''}}" />
  </div>  

  <div class="form-group">
    <label for="code">codi</label>
    <input type="text" class="form-control" name="code" id="code" placeholder="codi" value="{{ $course->code?:''}}" />
  </div>  

  <div class="form-group">
    <label for="degree_id">titulació</label>
    <select class="form-control" name="degree_id" id="degree_id">
      @foreach($degrees as $degree)
      <option value="{{ $degree->id }}">{{ $degree->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="description">descripció</label>
    <textarea class="form-control" name="description" id="description" placeholder="descripció">{{ $course->description?:'' }}</textarea>
  </div>  

  <fieldset class="form-group row">
    <legend class="col-form-legend col-sm-2">Semestre</legend>
    <div class="form-group">

      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="semester" id="semester" value="1" {{ $course->semester==1?"checked":""}}> 1er
        </label>
      </div>

      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="semester" id="semester" value="2" {{ $course->semester==2?"checked":""}}> 2on
        </label>
      </div>

      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="semester" id="semester" value="3" {{ $course->semester==3?"checked":""}}> anual
        </label>
      </div>
    </div>
  </fieldset>  
  <div class="form-group">
    <button type="submit" class="btn btn-default">desa</button>
  </div>
