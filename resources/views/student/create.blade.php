@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <br/>
            <h2 class="center">Add Data</h2>
        <br/>
        <form action="{{url('student')}}" method="post">
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