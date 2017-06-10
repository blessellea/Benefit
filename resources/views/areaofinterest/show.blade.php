@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <div class="form-group">
            <label for="aoi_id">ID:</label>
        <input type="text" name="aoi_id" id="aoi_id" class="form-control" value="{{ old('aoi_id', $areaofinterest->aoi_id) }}" readonly>
    </div>

    <div class="form-group">
        <label for="type">Type:</label>
        <input type="text" name="type" id="type" class="form-control" value="{{ old('type', $areaofinterest->type) }}" readonly>
    </div>

    <div class="form-group">
        <a href="{{ url('areaofinterest') }}" class="btn btn-primary">Back</a>
    </div>

    </div>
    <div class="col-md-4"></div>
</div>
