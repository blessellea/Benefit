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
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $benefactor->name) }}">
</div>

<div class="form-group">
    <label for="about">About:</label>
    <input type="text" name="about" id="about" class="form-control" value="{{ old('about', $benefactor->about) }}">
</div>

<div class="form-group">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $benefactor->email) }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
