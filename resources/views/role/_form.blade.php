    {{ csrf_field() }}
    <div class="form-group form-group-lg {{ ($errors->first('name')) ? 'has-error'  :''}}">
      <label class="control-label" for="name">nom</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="nom" value="{{ $role->name?:''}}"/>
      @include('partials.field-error', ['field' => 'name'])
    </div>
    <div class="form-group form-group-lg {{ ($errors->first('readable_name')) ? 'has-error'  :''}}">
      <label class="control-label" for="readable_name">nom lellgible</label>
      <textarea class="form-control" name="readable_name" id="readable_name" placeholder="descripció">{{ $role->readable_name?:'' }}</textarea>
      @include('partials.field-error', ['field' => 'readable_name'])
    </div>
    <div class="form-group form-group-lg {{ ($errors->first('description')) ? 'has-error'  :''}}">
      <label class="control-label" for="description">descripció</label>
      <textarea class="form-control" name="description" id="description" placeholder="descripció">{{ $role->description?:'' }}</textarea>
      @include('partials.field-error', ['field' => 'description'])
    </div>    
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> desa</button>
    </div>
