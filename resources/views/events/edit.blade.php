@extends('layout')

@section('content')

<h1>Update Event</h1>

<hr>

<div class="row">
    <div class="col-md-4"></div>
    <form enctype="multipart/form-data" action="{{ route('events.update', $event->event_id) }}" method="POST" class="col-md-4">
    {{ method_field('PATCH') }}

    @include('events.update_form')

    </form>
    <div class="col-md-4"></div>
</div>

@endsection
