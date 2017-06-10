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
        <input type="text" name="event_name" id="event_name" class="form-control" value="{{ old('event_name', $event->event_id) }}">
    </div>        

    <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" class="form-control" value="{{ old('description', $event->description) }}">
    </div>

    <div class="form-group">
        <label for="destination">Destination:</label>
        <input type="text" name="destination" id="destination" class="form-control" value="{{ old('destination', $event->destination) }}">
    </div>

    <div class="form-group">
        <label for="date">Date:</label>
        <input type="text" name="date" id="date" class="form-control" value="{{ old('date', $event->date) }}">
    </div>

    <div class="form-group">
        <label for="gun_start">Gun Start:</label>
        <input type="text" name="gun_start" id="gun_start" class="form-control" value="{{ old('gun_start', $event->gun_start) }}">
    </div>

    <div class="form-group">
        <label for="sponsors">Sponsors:</label>
        <input type="text" name="sponsors" id="sponsors" class="form-control" value="{{ old('sponsors', $event->sponsors) }}">
    </div>

    <div class="form-group">
        <label for="category">Category:</label>
        <input type="text" name="category" id="category" class="form-control" value="{{ old('category', $event->category) }}">
    </div>

    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" name="price" id="price" class="form-control" value="{{ old('price', $event->price) }}">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
