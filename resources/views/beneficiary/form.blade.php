{{ csrf_field() }}

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
</div>


<div class="form-group">
    <label for="about">About:</label>
    <textarea rows="4" cols="50" name="about" id="about" class="form-control" value="{{ old('about') }}"></textarea>
    {{--<input type="textarea" name="about" id="about" class="form-control" value="{{ old('about') }}">--}}
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
    {{--<label for="email">E-mail Address:</label>--}}
    <div>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <label for="aoi_id">Category:</label>
    <select name="aoi_id" id="aoi_id" class="form-control">
        <option value=""></option>
        @foreach($aoi as $cat)
            <option value="{{ $cat->aoi_id }}">{{ ucfirst( $cat->type ) }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
