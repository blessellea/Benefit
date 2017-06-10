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
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $bene->name) }}">
</div>

<div class="form-group">
    <label for="about">About:</label>
    <input rows="4" cols="50" name="about" id="about" class="form-control" value="{{ old('about', $bene->about) }}"></input>

    {{--<input type="text" name="about" id="about" class="form-control" value="{{ old('about', $bene->about) }}">--}}
</div>

<div class="form-group">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $bene->email) }}">
</div>

<div class="form-group">
    <label for="aoi_id">Category:</label>
    <select name="aoi_id" id="aoi_id" class="form-control">
        <option value=""></option>
        @foreach($aoi as $aoi)

            @if($aoi->aoi_id === $bene->aoi_id)
                <option value="{{ $aoi->aoi_id }}" selected="">{{ ucfirst($aoi->type) }}</option>
            @else
                <option value="{{ $aoi->aoi_id }}" >{{ ucfirst($aoi->type) }}</option>
            @endif

        @endforeach
    </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
