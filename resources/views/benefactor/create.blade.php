@extends('layout')

@section('content')
<h1>Create Benefactor</h1>

<hr>

<div class="row">
    <div class="col-md-4"></div>
    <form enctype="multipart/form-data" action="{{ url('benefactors') }}" method="POST" class="col-md-4">

    @include('benefactor.form')

    </form>
    <div class="col-md-4"></div>
</div>

@endsection
