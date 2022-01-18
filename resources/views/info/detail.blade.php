@extends('layouts.app')

@section('content')


<div class="container">
   <div class="row">
     <div class="col-md-12">
       <h3>Student Infomation</h3>
         <hr>
       </div>
     </div>
    <div class="row">
       <div class="col-md-12">
         <div class="form-group">
           <strong>student name :</strong> {{$info->std_name }}
         </div>
       </div>
       <div class="col-md-12">
         <div class="form-group">
           <strong>student address :</strong> {{$info->std_address }}
         </div>
       </div>
       <div class="col-md-12">
         <div class="form-group">
           <a href="{{route('info.index')}}" class="btn btn-primary"> Back</a>
         </div>
       </div>
    </div>

   </div>


@endsection
