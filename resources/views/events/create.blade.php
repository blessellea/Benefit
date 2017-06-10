@extends('layout')
@section('content')
	<div class="content">
		<div class="container-fluid">

        {{--<div class="row">--}}
			{{--<h1>Create Event</h1>--}}
		{{--</div>--}}
		{{--<hr>--}}

		<div class="row">
		    <div class="col-md-4"></div>
		    <form enctype="multipart/form-data" action="{{ url('events') }}" method="POST" class="col-md-4">

		    @include('events.form')

		    </form>
		    <div class="col-md-4"></div>
		</div>
	</div>
</div>
@endsection