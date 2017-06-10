@extends('layout')

@section('content')

<hr>
<div class="row">
    <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
        <h2>List of benefactors</h2>
        <a href="{{url('/benefactors/create')}}" class="btn btn-success">Add benefactor</a>

    </div>
</div>

            <div class="row">
 @foreach($benefactors as $benefactor)
                <div class="col-lg-4 col-md-4 col-sm-6 animate-box" data-animate-effect="fadeIn">
                    <div class="gtco-staff">       
                   
                        <img src="images/person_1.jpg" alt="Free HTML5 Templates by gettemplates.co">
                        <h3>{{$benefactor->name}}</h3>
                        <strong class="role">{{$benefactor->email}}</strong>
                        <p>{{$benefactor->about}} Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
                        <ul class="gtco-social-icons">
                            <li><a href="{{ route('benefactors.show', $benefactor->id) }}" class="btn btn-primary">Show</a></li>
                            <li><a href="{{ route('benefactors.edit', $benefactor->id) }}" class="btn btn-warning">Update</a></li>
                            <li><form action="{{ route('benefactors.destroy', $benefactor->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="sumbit" id="delete-author-{{ $benefactor->id }}" class="btn btn-danger">Delete</button>
                                </form>
                            </li><br>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div> @endforeach
        </div>
    </div>

@endsection
