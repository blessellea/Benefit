@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="id">ID: </label>
            <input type="text" name="id" id="id" class="form-control" value="{{ old('id', $benefactor->id) }}" readonly>
        </div>

        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $benefactor->name) }}" readonly>
        </div>

        <div class="form-group">
            <label for="about">About: </label>
            <input type="text" name="about" id="about" class="form-control" value="{{ old('about', $benefactor->about) }}" readonly>
        </div>

        <div class="form-group">
            <label for="email">email:</label>
            <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $benefactor->email) }}" readonly>
        </div>

    </div>
    <div class="col-md-4"></div>
</div>

@endsection
