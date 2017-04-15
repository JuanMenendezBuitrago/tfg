
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name">nom</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="nom" value="{{ $degree->nom?:''}}" />
  </div>  
  <div class="form-group">
    <label for="school_id">escola/facultat</label>
    <select class="form-control" name="school_id" id="school_id">
      @foreach($schools as $school)
      <option value="{{ $school->id }}">{{ $school->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="description">descripció</label>
    <textarea class="form-control" name="description" id="description" placeholder="descripció">{{ $degree->description?:'' }}</textarea>
  </div>  

  <div class="form-group">
    <button type="submit" class="btn btn-default">desa</button>
  </div>
