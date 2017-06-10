@extends('layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center gtco-heading animate-box">
                    {{--<h2>Events</h2>--}}
                    <a href="{{url('/events')}}" class="btn btn-success"> <i class="pe-7s-plus">All Events</i></a>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#active">Active Events</a></li>
                        <li><a data-toggle="tab" href="#pending">Pending Events</a></li>
                        <li><a data-toggle="tab" href="#decline">Decline Events</a></li>
                        <li><a data-toggle="tab" href="#done">Done / Finish Events</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="active" class="tab-pane fade in active">
                            <br>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr class="bg-info">
                                    <th>Event ID</th>
                                    <th>Event Name</th>
                                    <th>Description</th>
                                    <th>Organizer</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $event)

                                    @if ($event->status === 'Active')
                                        <tr>
                                            <td>{{$event->event_id}}</td>
                                            <td>{{$event->name}}</td>
                                            <td>{{$event->description}}</td>
                                            <td>{{$event->organizer}}</td>
                                            <td>{{$event->status}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div id="pending" class="tab-pane fade">
                            <br>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr class="bg-info">
                                    <th>Event ID</th>
                                    <th>Event Name</th>
                                    <th>Description</th>
                                    <th>Organizer</th>
                                    <th>Status</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $event)
                                    @if ($event->status === 'Pending')
                                    <tr>
                                        <td>{{$event->event_id}}</td>
                                        <td>{{$event->name}}</td>
                                        <td>{{$event->description}}</td>
                                        <td>{{$event->organizer}}</td>
                                        <td>{{ $event->status }}</td>
                                        <td><form action="{{ URL('approve',$event->event_id ) }}" method="POST">
                                                {{ csrf_field() }}
                                                <button type="sumbit" id="delete-author-{{ $event->event_id }}" class="btn btn-primary">Approve</button>
                                            </form>
                                        </td>
                                        <td><form action="{{ URL('decline',$event->event_id ) }}" method="POST">
                                                {{ csrf_field() }}
                                                <button type="sumbit" id="delete-author-{{ $event->event_id }}" class="btn btn-danger">Decline</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div id="decline" class="tab-pane fade">
                            <br>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr class="bg-info">
                                    <th>Event ID</th>
                                    <th>Event Name</th>
                                    <th>Description</th>
                                    <th>Organizer</th>
                                    <th>Status</th>
                                    {{--<th colspan="3">Actions</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $event)

                                    @if ($event->status === 'Decline')
                                        <tr>
                                            <td>{{$event->event_id}}</td>
                                            <td>{{$event->name}}</td>
                                            <td>{{$event->description}}</td>
                                            <td>{{$event->organizer}}</td>
                                            <td>{{$event->status}}</td>
                                        </tr>
                                    @endif

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div id="done" class="tab-pane fade">
                            <br>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr class="bg-info">
                                    <th>Event ID</th>
                                    <th>Event Name</th>
                                    <th>Description</th>
                                    <th>Organizer</th>
                                    <th>Status</th>
                                    <th colspan="3">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $event)
                                    @if ($event->status === 'Finish')
                                        <tr>
                                            <td>{{$event->event_id}}</td>
                                            <td>{{$event->name}}</td>
                                            <td>{{$event->description}}</td>
                                            <td>{{$event->organizer}}</td>
                                            <td>{{$event->status}}</td>
                                            <td><a href="{{ route('events.show', $event->event_id) }}" class="btn btn-primary btn-xs">Approve</a></td>
                                            <td><a href="{{ route('events.edit', $event->event_id) }}" class="btn btn-danger btn-xs">Decline</a></td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>





@endsection