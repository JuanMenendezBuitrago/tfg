    {{ csrf_field() }}
    <div class="form-group form-group-lg {{ ($errors->first('name'))?'has-error':'' }}">
      <label class="control-label" for="name">nom</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="nom" value="{{ $pointCategory->name?:''}}"/>
    @include('partials.field-error', ['field' => 'name'])
    </div>
    <div class="form-group form-group-lg {{ ($errors->first('description'))?'has-error':'' }}">
      <label class="control-label" for="description">descripció</label>
      <textarea class="form-control" name="description" id="description" placeholder="descripció">{{ $pointCategory->description?:'' }}</textarea>
    @include('partials.field-error', ['field' => 'description'])
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> desa</button>
    </div>
