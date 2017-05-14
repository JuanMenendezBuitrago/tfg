
  {{ csrf_field() }}
  <div class="form-group form-group-lg {{ ($errors->has('name'))?'has-error':'' }}">
    <label for="name" class="control-label">nom</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="nom" value="{{ $course->name?:''}}" />
    @include('partials.field-error', ['field' => 'name'])
  </div>  

  <div class="form-group form-group-lg {{ ($errors->has('code'))?'has-errors':'' }}">
    <label class="control-label" for="code">codi</label>
    <input type="text" class="form-control" name="code" id="code" placeholder="codi" value="{{ $course->code?:''}}" />
    @include('partials.field-error', ['field' => 'code'])
  </div>  

  <div class="form-group form-group-lg {{ ($errors->has('year'))?'has-errors':'' }}">
    <label class="control-label" for="year">any</label>
    <input type="text" class="form-control" name="year" id="year" placeholder="codi" value="{{ $course->year?:''}}" />
    @include('partials.field-error', ['field' => 'year'])
  </div>  

  <div class="form-group form-group-lg {{ ($errors->has('degree-id'))?'has-errors':'' }}">
    <label class="control-label" for="degree_id">titulació</label>
    <select class="form-control" name="degree_id" id="degree_id">
      @foreach($degrees as $degree)
      <option value="{{ $degree->id }}" {{ (isset($course->degree) && $course->degree->id == $degree->id)?'selected':'' }}>{{ $degree->name }}</option>
      @endforeach
    </select>
    @include('partials.field-error', ['field' => 'degree_id'])
  </div>

  <div class="form-group form-group-lg {{ ($errors->has('description'))?'has-error':'' }}">
    <label class="control-label" for="description">descripció</label>
    <textarea class="form-control" name="description" id="description" placeholder="descripció">{{ $course->description?:'' }}</textarea>
    @include('partials.field-error', ['field' => 'description'])
  </div>  

  <div class="form-group form-group-lg {{ ($errors->has('semester'))?'has-error':'' }}">
    <label class="control-label">Semestre</label>
    <label class="radio-inline control-label">
      <input type="radio" name="semester" id="semester" value="1" {{ $course->semester==1?"checked":""}}> 1er
    </label>

    <label class="radio-inline control-label">
      <input type="radio" name="semester" id="semester" value="2" {{ $course->semester==2?"checked":""}}> 2on
    </label>

    <label class="radio-inline control-label">
      <input type="radio" name="semester" id="semester" value="3" {{ $course->semester==3?"checked":""}}> anual
    </label>
    @include('partials.field-error', ['field' => 'semester'])
  </div>  
  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> desa</button>
  </div>
