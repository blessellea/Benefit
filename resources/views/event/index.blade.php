@extends('layouts.orglayout')

@section('menu')
    {{--<div class="col-md-5 hidden-xs">--}}
        {{--<div class="description">--}}
            {{--<h2>Dashboard</h2>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-6 col-md-offset-1">--}}

    {{--</div>--}}
<br><br>

<div class="container" style="color: #fff;">
    <br><br><br><br><br>
    <p><center><img src="img/run.jpg"></center></p>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Event Name</th>
            <th>Description</th>
            <th>Time</th>
            <th>Date </th>
            <th>Venue</th>
            <th>Registration Fee</th>
            <th>Online Registration Site</th>
            <th>Organizer</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $x)
            <tr>

                <td>{{$x -> event_name}}</td>
                <td>{{$x -> description}}</td>
                <td>{{$x -> time}}</td>
                <td>{{$x -> date}}</td>
                <td>{{$x -> venue}}</td>
                <td>{{$x -> regfee}}</td>
                <td>{{$x -> olregsite}}</td>
                <td>{{$x -> organizer}}</td>

                <td>
                    <a href="{{ url('/maps') }}" class="btn btn-warning">Set Map</a>
                    <button class="btn btn-info" data-toggle="modal" data-target="#viewModal" onclick="fun_view('{{$x -> id}}')">View</button>
                <!--  <button class="btn btn-warning" data-toggle="modal" data-target="#editModal" onclick="fun_edit('{{$x -> id}}')">Edit</button>
              --><!--  <button class="btn btn-danger" onclick="fun_delete('{{$x -> id}}')">Delete</button>
          --> </td>

            </tr>

        @endforeach

        </tbody>
    </table>

    <button type="button" class="btn btn-info pull-left" data-toggle="modal" data-target="#addModal">Add Event</button><br>


    <input type="hidden" name="hidden_view" id="hidden_view" value="{{url('product/view')}}">
    <input type="hidden" name="hidden_delete" id="hidden_delete" value="{{url('product/delete')}}">





    <!-- ADD Modal start -->
    <div class="modal fade" id="addModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Event</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ url('product') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">



                            <div class="form-group">
                                <label for="event_name">Event Name:</label>
                                <input type="text" class="form-control" id="event_name" name="event_name">
                            </div>
                            <div class="form-group">
                                <label for="Description">Description:</label>
                                <input type="textarea" class="form-control" id="description" name="description">
                            </div>
                            <div class="form-group">
                                <label for="time">Time:</label>
                                <input type="time" class="form-control" id="time" name="time">
                            </div>
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control" id="date" name="date">
                            </div>
                            <div class="form-group">
                                <label for="venue">Venue:</label>
                                <input type="text" class="form-control" id="venue" name="venue">
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label for="category">Category:</label>&nbsp--}}
                                {{--<input type="checkbox" name="vehicle" value="3k">3k--}}
                                {{--<input type="checkbox" name="vehicle" value="6k">6k--}}
                                {{--<input type="checkbox" name="vehicle" value="12k">12k--}}
                                {{--<input type="checkbox" name="vehicle" value="21k">21k--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label for="regfee">Registration Fee:</label>
                                <input type="text" class="form-control" id="regfee" name="regfee">
                            </div>
                            <div class="form-group">
                                <label for="olregsite">Online Site Registration:</label>
                                <input type="text" class="form-control" id="olregsite" name="olregsite">
                            </div>
                            <div class="form-group">
                                <label for="organizer">Organizer:</label>
                                <input type="text" class="form-control" id="organizer" name="organizer">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- add code ends -->




    <!-- VIEW Modal start -->
    <div class="modal fade" id="viewModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">View</h4>
                </div>
                <div class="modal-body">
                    <p><center><img src="img/rr.jpg"></center></p>
                    <p><b>Event Name : </b><span id="view_event_name" class="text-success"></span></p>
                    <p><b>Description : </b><span id="view_description" class="text-success"></span></p>
                    <p><b>Time : </b><span id="view_time" class="text-success"></span></p>
                    <p><b>Date : </b><span id="view_date" class="text-success"></span></p>
                    <p><b>Venue : </b><span id="view_venue" class="text-success"></span></p>
                    <p><b>Registration Fee : </b><span id="view_regfee" class="text-success"></span></p>
                    <p><b>Online Registration Site : </b><span id="view_olregsite" class="text-success"></span></p>
                    <p><b>Organizer : </b><span id="view_organizer" class="text-success"></span></p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
                </div>
            </div>

        </div>
    </div>
    <!-- view modal ends -->





    <!-- EDIT Modal start -->
    <div class="modal fade" id="editModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ url('product/update') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">


                            <div class="form-group">
                                <label for="edit_event_name">Event Name:</label>
                                <input type="text" class="form-control" id="edit_event_name" name="edit_event_name">
                            </div>
                            <div class="form-group">
                                <label for="edit_description">Description:</label>
                                <input type="text" class="form-control" id="edit_description" name="edit_description">
                            </div>
                            <div class="form-group">
                                <label for="edit_time">Time:</label>
                                <input type="time" class="form-control" id="edit_time" name="edit_time">
                            </div>
                            <div class="form-group">
                                <label for="edit_date">Date:</label>
                                <input type="date" class="form-control" id="edit_date" name="edit_date">
                            </div>
                            <div class="form-group">
                                <label for="edit_venue">Venue:</label>
                                <input type="text" class="form-control" id="edit_venue" name="edit_venue">
                            </div>
                            <div class="form-group">
                                <label for="edit_regfee">Registration Fee:</label>
                                <input type="text" class="form-control" id="edit_regfee" name="edit_regfee">
                            </div>
                            <div class="form-group">
                                <label for="edit_olregsite">Online Registration Site:</label>
                                <input type="text" class="form-control" id="edit_olregsite" name="edit_olregsite">
                            </div>
                            <div class="form-group">
                                <label for="edit_organizer">Organizer:</label>
                                <input type="text" class="form-control" id="edit_organizer" name="edit_organizer">
                            </div>

                        </div>

                        <button type="submit" class="btn btn-default">Update</button>
                        <input type="hidden" id="edit_id" name="edit_id">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>

        </div>
    </div>
    <!-- Edit code ends -->









</div>
<script type="text/javascript">
    function fun_view(id)
    {
        var view_url = $("#hidden_view").val();
        $.ajax({
            url: view_url,
            type:"GET",
            data: {"id":id},
            success: function(result){
                //console.log(result);

                $("#view_event_name").text(result.event_name);
                $("#view_description").text(result.description);
                $("#view_time").text(result.time);
                $("#view_date").text(result.date);
                $("#view_venue").text(result.venue);
                $("#view_regfee").text(result.regfee);
                $("#view_olregsite").text(result.olregsite );
                $("#view_olregsite").text(result.olregsite );
                $("#view_organizer").text(result.organizer );

            }
        });
    }

    function fun_edit(id)
    {
        var view_url = $("#hidden_view").val();
        $.ajax({
            url: view_url,
            type:"GET",
            data: {"id":id},
            success: function(result){
                //console.log(result);
                $("#edit_id").val(result.id);
                $("#edit_event_name").val(result.event_name);
                $("#edit_description").val(result.description);
                $("#edit_time").val(result.time);
                $("#edit_date").val(result.date);
                $("#edit_venue").val(result.venue);
                $("#edit_regfee").val(result.regfee);
                $("#edit_olregsite").val(result.olregsite);
                $("#edit_organizer").val(result.organizer);
            }
        });
    }

    function fun_delete(id)
    {
        var conf = confirm("Are you sure want to delete??");
        if(conf){
            var delete_url = $("#hidden_delete").val();
            $.ajax({
                url: delete_url,
                type:"POST",
                data: {"id":id,_token: "{{ csrf_token() }}"},
                success: function(response){
                    alert(response);
                    location.reload();
                }
            });
        }
        else{
            return false;
        }
    }
</script>
@endsection

@section('content')
@endsection