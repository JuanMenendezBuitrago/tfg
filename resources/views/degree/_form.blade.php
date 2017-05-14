
  {{ csrf_field() }}
  <div class="form-group form-group-lg {{ ($errors->first('name'))?'has-error':'' }}">
    <label class="control-label" for="name">nom</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="nom" value="{{ $degree->name?:''}}" />
    @include('partials.field-error', ['field' => 'name'])
  </div>  
  <div class="form-group form-group-lg {{ ($errors->first('school_id'))?'has-error':'' }}">
    <label class="control-label" for="school_id">escola/facultat</label>
    <select class="form-control" name="school_id" id="school_id">
      @foreach($schools as $school)
      <option value="{{ $school->id }}" {{ (isset($degree->school) && $degree->school->id == $school->id)?'selected':'' }}>{{ $school->name }}</option>
      @endforeach
    </select>
    @include('partials.field-error', ['field' => 'school_id'])
  </div>
  <div class="form-group form-group-lg {{ ($errors->first('description'))?'has-error':'' }}">
    <label class="control-label" for="description">descripció</label>
    <textarea class="form-control" name="description" id="description" placeholder="descripció">{{ $degree->description?:'' }}</textarea>
    @include('partials.field-error', ['field' => 'description'])
  </div>  

  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> desa</button>
  </div>
