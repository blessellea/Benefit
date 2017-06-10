@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="id">ID: </label>
                <input type="text" name="id" id="id" class="form-control" value="{{ old('id', $bene->bene_id) }}" readonly>
            </div>

            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $bene->name) }}" readonly>
            </div>

            <div class="form-group">
                <label for="about">About: </label>
                {{--<textarea rows="4" cols="50" name="about" id="about" class="form-control" value="{{ old('about', $bene->about) }}" readonly }}"></textarea>--}}
                <input type="text" name="about" id="about" class="form-control" cols="40" rows="5" value="{{ old('about', $bene->about) }}" readonly >
            </div>

            <div class="form-group">
                <label for="aoi_id">Category:</label>
                <select name="aoi_id" id="aoi_id" class="form-control" readonly>
                    @foreach($aoi as $aoi)

                        @if($aoi->aoi_id === $bene->aoi_id)
                            <option value="{{ $aoi->aoi_id }}" selected="">{{ ucfirst($aoi->type) }}</option>
                        @endif

                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $bene->email) }}" readonly>
            </div>

        </div>
        <div class="col-md-4"></div>
    </div>

@endsection
