@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <br/>
            <h2 class="center">Add Data</h2>
        <br/>
        @if( count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li class="alert alert-warning">{{$error}}</li>
                @endforeach
            </ul>
        @endif
        @if(\Session::has('success'))
            <p class="alert alert-success">{{\Session::get('success')}}</p>
        @endif
        <form action="{{url('student')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" name="first_name" class="form-control" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <input type="text" name="last_name" class="form-control" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>  
            
            </div>
        </form>
    </div>
</div>
@endsection