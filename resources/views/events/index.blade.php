@extends('layout')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <button type="button" rel="tooltip" title="Add event" class="btn btn-info btn-simple btn-lg" onclick="{{url('/events/create')}}">
                    <i class="pe-7s-plus">Add Event</i>
                </button>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">List of Event</h4>
                            <p class="category">Here are list of events that are active.</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                            <tr class="bg-info">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Organizer</th>
                                <th>Time</th>
                                <th>Venue</th>
                                <th colspan="3">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td>{{$event->event_id}}</td>
                                    <td>{{$event->name}}</td>
                                    <td>{{$event->description}}</td>
                                    <td>{{$event->organizer}}</td>
                                    <td>{{$event->gunStart_time}}</td>
                                    <td>{{$event->venue}}</td>
                                    <td> <button type="button" rel="tooltip" title="Show" class="btn btn-info btn-simple btn-md">
                                            <a href="{{ route('events.show', $event->event_id) }}"><i class="pe-7s-look">Show</i></a>
                                        </button></td>
                                    <td> <button type="button" rel="tooltip" title="Update" class="btn btn-info btn-simple btn-md">
                                        <a href="{{ route('events.edit', $event->event_id) }}"><i class="fa fa-edit"></i></a>
                                    </button></td>
                                    <td>
                                        <form action="{{ route('events.destroy', $event->event_id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="sumbit" id="delete-author-{{ $event->event_id }}" title="Remove" class="btn btn-danger btn-simple btn-md">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
            </div>


@endsection
