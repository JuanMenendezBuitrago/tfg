    {{ csrf_field() }}
    <div class="form-group form-group-lg {{ ($errors->first('amount'))?'has-error':'' }}">
      <label class="control-label" for="amount">nom</label>
      <input type="text" class="form-control" name="amount" id="amount" placeholder="quantitat" value="{{ $point->amount?:''}}"/>
    @include('partials.field-error', ['field' => 'amount'])
    </div>
    <div class="form-group form-group-lg {{ ($errors->first('category_id'))?'has-error':'' }}">
      <label class="control-label" for="category_id">categoria</label>
      <select class="form-control" name="category_id" id="category_id">
        @foreach($categories as $category)
        <option value="{{ $category->id }}" {{ ($point->category_id == $category->id)?'selected':'' }}>{{ $category->name }}</option>
        @endforeach
      </select>
      @include('partials.field-error', ['field' => 'category_id'])
    </div>
    <div class="form-group form-group-lg {{ ($errors->first('user_id'))?'has-error':'' }}">
      <label class="control-label" for="user_id">usuari</label>
      <select class="form-control" name="user_id" id="user_id">
        @foreach($users as $user)
        <option value="{{ $user->id }}" {{ ($point->user_id == $user->id)?'selected':'' }}>{{ $user->name }}</option>
        @endforeach
      </select>
      @include('partials.field-error', ['field' => 'user_id'])
    </div>
    <div class="form-group form-group-lg {{ ($errors->first('activity_id'))?'has-error':'' }}">
      <label class="control-label" for="activity_id">activitat</label>
      <select class="form-control" name="activity_id" id="activity_id">
        @foreach($activities as $activity)
        <option value="{{ $activity->id }}" {{ ($point->activity_id == $activity->id)?'selected':'' }}>{{ $activity->name }}</option>
        @endforeach
      </select>
      @include('partials.field-error', ['field' => 'activity_id'])
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> desa</button>
    </div>
