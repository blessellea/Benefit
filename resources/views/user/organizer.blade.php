{{--Created by PhpStorm.--}}
{{--User: Bless--}}
{{--Date: 4/4/2017--}}
{{--Time: 10:00 PM--}}

@extends('layout')

@section('content')
    <hr>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center gtco-heading animate-box">
            <h2>List of Organizers</h2>

            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr class="bg-info">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th colspan="2">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)

                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td><a href="" class="btn btn-primary">Show</a></td>

                                @if($user->block === 0)
                                <td><form action="{{ URL('blockOrganizer',$user->id ) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="sumbit" id="delete-author-{{ $user->id }}" class="btn btn-danger">Block Organizer</button>
                                    </form>
                                </td>

                                @else <td><button type="sumbit" id="delete-author-{{ $user->id }}" class="btn btn-danger disabled">Block Organizer</button></td>
                                @endif
                            </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>

@endsection
