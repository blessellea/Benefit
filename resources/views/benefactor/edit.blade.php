@extends('layout')

@section('content')
<h1>Update Benefactor</h1>

<hr>

<div class="row">
    <div class="col-md-4"></div>
    <form enctype="multipart/form-data" action="{{ route('benefactors.update', $benefactor->id) }}" method="POST" class="col-md-4">
    {{ method_field('PATCH') }}

    @include('benefactor.update_form')

    </form>
    <div class="col-md-4"></div>
</div>

@endsection
