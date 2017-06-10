@extends('layouts.app')

@section('content')
<form enctype="multipart/form-data" action="{{ url('activeEvent') }}" method="POST" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {{ csrf_field() }}
    <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

        <div class="wizard-header text-center">
            <h3 class="wizard-title">{{ old('event_name', $event->name) }}</h3>
            <p class="category">Join Event</p>
        </div>

        <div class="wizard-navigation">
            <div class="progress-with-circle">
                <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
            </div>
            <ul>
                <li>
                    <a href="#about" data-toggle="tab">
                        <div class="icon-circle">
                            <i class="ti-user"></i>
                        </div>
                        Info
                    </a>
                </li>
                <li>
                    <a href="#account" data-toggle="tab">
                        <div class="icon-circle">
                            <i class="ti-settings"></i>
                        </div>
                        Category
                    </a>
                </li>
                {{--<li>--}}
                    {{--<a href="#address" data-toggle="tab">--}}
                        {{--<div class="icon-circle">--}}
                            {{--<i class="ti-map"></i>--}}
                        {{--</div>--}}
                        {{--Account--}}
                    {{--</a>--}}
                {{--</li>--}}
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane" id="about">
                <div class="row">
                    <h5 class="info-text">{{ old('description', $event->description) }} <br><br> Time : {{ old('description', $event->gunStart_time) }} <br><br>Venue: {{ old('description', $event->venue) }}</h5>

                    <div class="col-sm-10 col-sm-offset-1" >
                            <label>Organizer : </label><small>  {{ old('organizer', $event->organizer) }}</small>
                    </div>


                </div>
            </div>
            <div class="tab-pane" id="account">
                <h5 class="info-text"> Choose category to join.</h5>
                <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                          <input type="hidden" class="form-control" name="user_id" value="{{  Auth::guard('user')->user()->id }}">
                            @foreach($category as $cat)
                                <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-checkbox">
                                        <input type="checkbox" name="event_cat" value="{{ $cat->eventkm_id,old($cat->eventkm_id) }}">
                                        <div class="card card-checkboxes card-hover-effect">
                                            <i class="pe-7s-map"></i><br>
                                            <label>{{$cat->km}} KM</label>
                                            <label>Registration Fee :</label><p>PHP {{$cat->registration_fee}} </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                </div>
            </div>
            {{--<div class="tab-pane" id="address">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-12">--}}
                        {{--<h5 class="info-text"> Create your account. </h5>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-10 col-sm-offset-1">--}}
                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label>Email<small>(required)</small></label>--}}
                            {{--<input type="email" class="form-control" name="email" placeholder="andrew@email.com">--}}
                            {{--@if ($errors->has('email'))--}}
                                {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-10 col-sm-offset-1">--}}
                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label>Password<small>(required)</small></label>--}}
                            {{--<input type="password" class="form-control" name="password">--}}
                            {{--@if ($errors->has('password'))--}}
                                {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    {{--<div class="col-sm-10 col-sm-offset-1">--}}
                        {{--<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
                            {{--<label>Confirm Password<small>(required)</small></label>--}}
                            {{--<input type="password" class="form-control" name="password_confirmation">--}}
                            {{--@if ($errors->has('password_confirmation'))--}}
                                {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
                                {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="wizard-footer">
            <div class="pull-right">
                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
                {{--<input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />--}}
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        {{--<button type="button" rel="tooltip" title="Update" class="btn btn-info btn-simple btn-md">--}}
                            {{--<a href="{{ route('events.show', $event->event_c at)}}"><i class="fa fa-edit"></i></a>--}}
                        {{--</button>--}}
                        <button type="submit" class="btn btn-finish btn-fill btn-warning btn-wd">
                            <i class="fa fa-btn fa-user"></i>Join
                        </button>
                    </div>
                </div>
            </div>

            <div class="pull-left">
                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
            </div>
            <div class="clearfix"></div>
        </div>

</form>

@endsection
