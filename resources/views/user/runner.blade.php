{{--Created by PhpStorm.--}}
{{--User: Bless--}}
{{--Date: 4/4/2017--}}
{{--Time: 10:00 PM--}}

@extends('layout')

@section('content')
    <hr>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center gtco-heading animate-box">
            <h2>List of Runners</h2>

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
                            <td>{{$user->fname}} {{$user->lname}} </td>
                            <td>{{$user->email}}</td>
                            {{--<td><a href="{{ route('user.show', $user->id) }}" class="btn btn-primary">Show</a></td>--}}
                            <td><a href="" class="btn btn-primary">Show Details</a></td>
                            @if($user->block === 0 )
                                <td><form action="{{ URL('blockRunner',$user->id ) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="sumbit" id="a" class="btn btn-danger">Block Runner</button>
                                    </form>
                                </td>
                            <script>
                                    $("a").click(function(){
                                        swal("Block it!", "{{ $user->fname }}'s account has been block.", "success");
                                        });
                            </script>
                            @else <td><button type="sumbit" id="delete-author-{{ $user->id }}" class="btn btn-danger disabled">Block Runner</button></td>
                            @endif

                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>
    <script src="/js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="/css/sweetalert.css">
@endsection
