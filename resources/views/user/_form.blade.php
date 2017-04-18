  {{ csrf_field() }}
  <img src="{{ $user->avatar?:'http://lorempixel.com/150/150/'}}" class="rounded-circle mx-auto d-block" alt="avatar">
  <div class="form-group text-center">
    <label class="custom-file">
      <input type="file" id="file" class="custom-file-input">
      <span class="custom-file-control"></span>
    </label>
  </div>
  <div class="form-group">
    <label for="name">nom</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="nom" value="{{ $user->name?:''}}" />
  </div>  

  <div class="form-group">
    <label for="nickname">nickname</label>
    <input type="text" class="form-control" name="nickname" id="nickname" placeholder="nickname" value="{{ $user->nickname?:''}}" />
  </div>  

  <div class="form-group">
    <label for="niu">niu</label>
    <input type="text" class="form-control" name="niu" id="n  iu" placeholder="niu" value="{{ $user->niu?:''}}" />
  </div>  

  <div class="form-group">
    <label for="description">descripció</label>
    <textarea class="form-control" name="description" id="description" placeholder="descripció">{{ $user->description?:'' }}</textarea>
  </div>  

  <div class="form-group">
    <button type="submit" class="btn btn-default">desa</button>
  </div>
