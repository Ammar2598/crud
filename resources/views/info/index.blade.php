@extends('layouts.app')

@section('content')


<div class="container">
   <div class="row">
     <div class="col-md-10">
       <h3>List Of Student Infomation</h3>

       </div>
     <div class="col-sm-2">
       <a class="btn btn-sm btn-success" href="{{route('info.create')}}">Create New Information</a>

     </div>
   </div>


   @if($message = Session::get('success'))
     <div class="alert alert-success">
       <p>{{$message}}</p>
     </div>
   @endif

   <table class ="table table-hover table-sm">
     <tr>
         <th width=50px> <b>No.</b>  </th>
         <th width=300px> Student Name  </th>
         <th> Student Address </th>
         <th width=180px> Action  </th>


     </tr>
     @foreach ($infos as $info)
      <td> <b> {{ ++$i }} </b> </td>
      <td> {{ $info->std_name }} </td>
      <td> {{ $info->std_address }} </td>
      <td>
          <form action=" {{ route('info.destroy',$info->id) }} " method="post">
              <a class="btn btn-sm btn-primary" href=" {{ route('info.show',$info->id) }} "> Show </a>
              <a class="btn btn-sm btn-warning" href=" {{ route('info.edit',$info->id) }} "> Edit </a>


              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
              {!! csrf_field() !!}
              {!! method_field('delete') !!}
          </form>
          <tr>
      </td>

     @endforeach
   </table>
 {!! $infos->links() !!}
</div>

@endsection
