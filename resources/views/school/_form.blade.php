  
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">nom</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="nom" value="{{ $school->name?:''}}"/>
    </div>
    <div class="form-group">
      <label for="description">descripció</label>
      <textarea class="form-control" name="description" id="description" placeholder="descripció">{{ $school->description?:'' }}</textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-default">desa</button>
    </div>
