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
    <label for="name">Event Name:</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
</div>

<div class="form-group">
    <label for="description">Event Description:</label>
    <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}">
</div>

<div class="form-group">
    <label for="destination">Venue:</label>
    <input type="text" name="destination" id="destination" class="form-control" value="{{ old('destination') }}">
</div>

<div class="form-group">
    <label for="gunStart_time">Time:</label>
    <input type="time" name="gunStart_time" id="gunStart_time" class="form-control" value="{{ old('gunStart_time') }}">
</div>

<div class="form-group">
    <label for="date">Date:</label>
    <input type="date" name="gunStart_date" id="gunStart_date" class="form-control" value="{{ old('gunStart_date') }}">
</div>


<div class="form-group">
    <label for="file">image :</label>
    <input type="file" name="userfile" id="userfile" class="form-control" value="{{ old('userfile') }}">
</div>

<div class="form-group">
    <label for="organizer"></label>
    <input type="hidden" name="organizer" id="organizer" class="form-control" value="{{Auth::guard('organizer')->user()->name}}">
</div>


<div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
