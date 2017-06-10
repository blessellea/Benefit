@extends('layouts.app')

@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {{ csrf_field() }}
<!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

    <div class="wizard-header text-center">
        <h3 class="wizard-title">Create your profile</h3>
        <p class="category">This information will let us know more about you.</p>
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
                    About
                </a>
            </li>
            <li>
                <a href="#account" data-toggle="tab">
                    <div class="icon-circle">
                        <i class="ti-settings"></i>
                    </div>
                    More
                </a>
            </li>
            <li>
                <a href="#address" data-toggle="tab">
                    <div class="icon-circle">
                        <i class="ti-map"></i>
                    </div>
                    Account
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane" id="about">
            <div class="row">
                <h5 class="info-text"> Please tell us more about yourself.</h5>
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="picture-container">
                        <div class="picture">
                            <img src="/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
                            <input type="file" id="wizard-picture">
                        </div>
                        <h6>Choose Picture</h6>
                    </div>
                </div>
                <div class="col-sm-6">
                    {{--<div class="form-group">--}}
                        {{--<label>First Name <small>(required)</small></label>--}}
                        {{--<input name="firstname" type="text" class="form-control" placeholder="Andrew...">--}}
                    {{--</div>--}}
                    <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                        <label>First Name <small>(required)</small></label>
                        <input class="form-control" type="text" name="fname" value="{{ old('fname') }}">
                        @if ($errors->has('fname'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('fname') }}</strong>
                                </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                        <label>Last Name <small>(required)</small></label>
                        <input class="form-control" type="text" name="lname" value="{{ old('lname') }}">
                        @if ($errors->has('lname'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('lname') }}</strong>
                                </span>
                        @endif
                    </div>

                </div> {{--.col-sm-6--}}

                <div class="col-sm-10 col-sm-offset-1">
                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                        <div class="col-sm-4"><br><br><br><br>
                            <label>Gender</label>
                        </div>
                        {{--<input class="form-control" type="text" name="gender" value="{{ old('gender') }}">--}}

                        <div class="col-sm-4">
                            <div class="choice" data-toggle="wizard-checkbox">
                                <input type="checkbox" name="gender" value="Female">
                                <div class="card card-checkboxes card-hover-effect">
                                    <i class="pe-7s-female"></i>
                                    <p>Female</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="choice" data-toggle="wizard-checkbox">
                                <input type="checkbox" name="gender" value="Male">
                                <div class="card card-checkboxes card-hover-effect">
                                    <i class="pe-7s-male"></i>
                                    <p>Male</p>
                                </div>
                            </div>
                        </div>
                        @if ($errors->has('gender'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gender') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="account">
            <h5 class="info-text"> More info about yourself.</h5>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                        <label>Birthdate<small>(required)</small></label>
                        <input class="form-control" type="date" name="birthdate" value="{{ old('birthdate') }}">
                        @if ($errors->has('birthdate'))
                            <span class="help-block">
                                <strong>{{ $errors->first('birthdate') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label>Address <small>(required)</small></label>
                        <input class="form-control" type="text" name="address" value="{{ old('address') }}">
                        @if ($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="address">
            <div class="row">
                <div class="col-sm-12">
                    <h5 class="info-text"> Create your account. </h5>
                </div>
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>Email<small>(required)</small></label>
                        <input type="email" class="form-control" name="email" placeholder="andrew@email.com">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>Password<small>(required)</small></label>
                        <input type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>


                <div class="col-sm-10 col-sm-offset-1">
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label>Confirm Password<small>(required)</small></label>
                            <input type="password" class="form-control" name="password_confirmation">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wizard-footer">
        <div class="pull-right">
            <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
            {{--<input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />--}}
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-finish btn-fill btn-warning btn-wd">
                        <i class="fa fa-btn fa-user"></i>Register
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
