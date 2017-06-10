@extends('layouts.app')

@section('content')
<h1>Add Runner</h1>

<hr>

<div class="row">
    <div class="col-md-4"></div>
    <form enctype="multipart/form-data" action="{{ url('runners') }}" method="POST" class="col-md-4">

    @include('runners.form')

    </form>
    <div class="col-md-4"></div>
</div>

@endsection
