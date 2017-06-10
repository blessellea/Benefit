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
    <label for="event_name">Event Name:</label>
    <input type="text" name="event_name" id="event_name" class="form-control" value="{{ old('event_name') }}">
</div>

<div class="form-group">
    <label for="description">Event Description:</label>
    <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}">
</div>

<div class="form-group">
    <label for="destination">Where:</label>
    <input type="text" name="destination" id="destination" class="form-control" value="{{ old('destination') }}">
</div>

<div class="form-group">
    <label for="gun_start">Gun Start:</label>
    <input type="text" name="gun_start" id="gun_start" class="form-control" value="{{ old('gun_start') }}">
</div>

<div class="form-group">
    <label for="date">When:</label>
    <input type="text" name="date" id="date" class="form-control" value="{{ old('date') }}">
</div>

<div class="form-group">
    <label for="sponsors">Sponsor :</label>
    <input type="text" name="sponsors" id="sponsors" class="form-control" value="{{ old('sponsors') }}">
</div>

<div class="form-group">
    <label for="category">Category :</label>
    <input type="text" name="category" id="category" class="form-control" value="{{ old('category') }}">
</div>

<div class="form-group">
    <label for="price">Price :</label>
    <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
