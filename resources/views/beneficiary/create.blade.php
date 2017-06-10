@extends('layout')
@section('content')
    <div class="content">
        <div class="container-fluid">

                <h4>Add Beneficiary</h4>

                <hr>

                <div class="row">
                    <div class="col-md-4"></div>
                    <form id="beneform" enctype="multipart/form-data" action="{{ url('beneficiary') }}" method="POST" class="col-md-4">
                        @include('beneficiary.form')
                    </form>
                </div>
                    <div class="col-md-4"></div>

        </div>
    </div>
@endsection
