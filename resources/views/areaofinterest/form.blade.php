{{ csrf_field() }}

    <div class="form-group">
        <label for="aoi_id">ID:</label>
        <input type="text" name="aoi_id" id="aoi_id" class="form-control" value="{{ old('aoi_id') }}">
    </div>

    <div class="form-group">
        <label for="type">Type:</label>
        <input type="text" name="type" id="type" class="form-control" value="{{ old('type') }}">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
