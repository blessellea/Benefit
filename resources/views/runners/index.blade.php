@extends('layouts.app')

@section('content')

<hr>
<div class="row">
    <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
        <h2>List of Runners</h2>
        <a href="{{url('/runners/create')}}" class="btn btn-success">Add runner</a>

    </div>
</div>

            <div class="row">
 @foreach($runners as $runner)
                <div class="col-lg-4 col-md-4 col-sm-6 animate-box" data-animate-effect="fadeIn">
                    <div class="gtco-staff">       
                   
                        <img src="images/person_1.jpg" alt="Free HTML5 Templates by gettemplates.co">
                        <h3>{{$runner->name}}</h3>
                        <strong class="role">{{$runner->email}}</strong>
                        <p>{{$runner->about}} Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
                        {{--<ul class="gtco-social-icons">--}}
                            {{--<li><a href="{{ route('runners.show', $runner->id) }}" class="btn btn-primary">Show</a></li>--}}
                            {{--<li><a href="{{ route('runners.edit', $runner->id) }}" class="btn btn-warning">Update</a></li>--}}
                            {{--<li><form action="{{ route('runners.destroy', $runner->id) }}" method="POST">--}}
                                    {{--{{ csrf_field() }}--}}
                                    {{--{{ method_field('DELETE') }}--}}
                                    {{--<button type="sumbit" id="delete-author-{{ $runner->id }}" class="btn btn-danger">Delete</button>--}}
                                {{--</form>--}}
                            {{--</li><br>--}}
                            {{--<li><a href="#"><i class="icon-facebook"></i></a></li>--}}
                            {{--<li><a href="#"><i class="icon-twitter"></i></a></li>--}}
                            {{--<li><a href="#"><i class="icon-dribbble"></i></a></li>--}}
                            {{--<li><a href="#"><i class="icon-github"></i></a></li>--}}
                        {{--</ul>--}}
                    </div>
                </div> @endforeach
        </div>
    </div>

@endsection
