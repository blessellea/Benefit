@extends('layouts.runnerlayout')

@section('menu')
<div class="col-md-5 hidden-xs">
    <div class="description">
        <h2>Dashboard</h2>
    </div>
</div>
<div class="col-md-6 col-md-offset-1">

</div>

@endsection

@section('content')
    <div class="section section-features">
        <div class="container">
            <h4 class="header-text text-center">Events</h4>
            <div class="row">
                <div class="col-md-4">
{{--                    @foreach($events as $event)--}}
                    <div class="card card-blue">
                        <div class="icon">
                            <i class="pe-7s-note2"></i>
                        </div>
                        <div class="text">
                            <h4>Online Customers Management</h4>
                            <p>All appointments sync with your Google calendar so your availability is always up to date. See your schedule at a glance from any device.</p>
                        </div>
                    </div>
                    {{--@endforeach--}}
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection
