  {{ csrf_field() }}
  <div class="row">
    <div class="col-md-2">
    @if ($user->avatar)
      <div class="avatar" style="background-image: url({{ $user->avatar }});"></div>
    @else
      <div class="avatar"></div>
    @endif
    </div>
    <div class="col-md-10">
      <div class="form-group form-group-lg {{ ($errors->first('avatar'))?'has-error':'' }}">
            <label>avatar</label>
        <div class="input-group">
            <label class="input-group-btn">
                <span class="btn btn-default btn-lg">
                    Browse&hellip; <input id="avatar" name="avatar" type="file" style="display: none;">
                </span>
            </label>
            <input type="text" class="form-control" readonly>
            @include('partials.field-error', ['field' => 'avatar'])
        </div>
      </div>
      <span class="help-block">
          Solament imatges amb extensió jpg, gif o png y màxim de 500MB
      </span>
    </div>
  </div>

  <div class="form-group form-group-lg {{ ($errors->first('name'))?'has-error':'' }}">
    <label for="name">nom</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="nom" value="{{ $user->name?:''}}" />
    @include('partials.field-error', ['field' => 'name'])
  </div>  

  <div class="form-group form-group-lg {{ ($errors->first('nickname'))?'has-error':'' }}">
    <label for="nickname">nickname</label>
    <input type="text" class="form-control" name="nickname" id="nickname" placeholder="nickname" value="{{ $user->nickname?:''}}" />
    @include('partials.field-error', ['field' => 'nickname'])
  </div>  

  <div class="form-group form-group-lg {{ ($errors->first('niu'))?'has-error':'' }}">
    <label for="niu">niu</label>
    <input type="text" class="form-control" name="niu" id="niu" placeholder="niu" value="{{ $user->niu?:''}}" />
    @include('partials.field-error', ['field' => 'niu'])
  </div>  

  <div class="form-group form-group-lg {{ ($errors->first('description'))?'has-error':'' }}">
    <label for="description">descripció</label>
    <textarea class="form-control" name="description" id="description" placeholder="descripció">{{ $user->description?:'' }}</textarea>
    @include('partials.field-error', ['field' => 'description'])
  </div>  
  <div class="form-group form-group-lg">
    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> desa</button>
  </div>
