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
    <input type="text" name="about" id="about" class="form-control" value="{{ old('about') }}">
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
