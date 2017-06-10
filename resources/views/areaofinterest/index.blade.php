@extends('layout')

@section('content')

    <h1>List of Area of Interest</h1>

<a href="{{url('/areaofinterest/create')}}" class="btn btn-success">Create Area Of Interest</a>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Type</th>
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($aoi as $aoi)
        <tr>
            <td>{{$aoi->aoi_id}}</td>
            <td>{{$aoi->type}}</td>
            <td><a href="{{ route('areaofinterest.show', $aoi->aoi_id) }}" class="btn btn-primary">Show</a></td>
            <td><a href="{{ route('areaofinterest.edit', $aoi->aoi_id) }}" class="btn btn-warning">Update</a></td>
            <td>
                <form action="{{ route('areaofinterest.destroy', $aoi->aoi_id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="sumbit" id="delete-author-{{ $aoi->aoi_id }}" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
