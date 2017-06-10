@extends('layouts.app')

@section('content')
<h1>Update Runner</h1>

<hr>

<div class="row">
    <div class="col-md-4"></div>
    <form enctype="multipart/form-data" action="{{ route('runners.update', $runner->id) }}" method="POST" class="col-md-4">
    {{ method_field('PATCH') }}

    @include('runners.update_form')

    </form>
    <div class="col-md-4"></div>
</div>

@endsection
