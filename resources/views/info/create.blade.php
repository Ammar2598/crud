@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h3>new student name</h3>
    </div>
  </div>
  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>
          {{ $error }}
        </li>
        @endforeach

      </ul>
    </div>
  @endif

  <form  action="{{route('info.store')}}" method="post">
{!! csrf_field() !!}
    <div class="row">
      <div class="col-md-12">
        <strong>student Name :</strong>
        <input type="text" name="std_name" class="form-control" placeholder="student name">
      </div>
      <div class="col-md-12">
        <strong>student address :</strong>

        <textarea  class="form-control" placeholder="student Address" name="std_address" rows="8" cols="80"></textarea>
      </div>
      <div class="col-md-12">
        <a href="{{ route('info.index') }}" class="btn btn-sm btn-success">Back</a>
        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>
@endsection
