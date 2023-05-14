@extends('backend.layouts.app')
@section('content')
<style>
    .div_center{
        text-align: center;
        padding-top: 40px;
    }
    .h2_font{
        font-size: 40px;
        padding-bottom: 40px;
    }
    .input_color{
        color: black;
    }
    .center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid black;
    }
</style>
<div class="content-wrapper">
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="div_center">
            <h2 class="card-title">All Types</h2>
            <form action="{{url('/add-type')}}" method="POST">
                @csrf
                <input type="text" class="input_color" name="type" placeholder="write type name">
                <input type="submit" name="submit" value="add type" class="btn btn-primary">

            </form>
        </div>
        <table class="center">
         <tr>
             <td>Type name</td>
             <td>Action</td>
         </tr>
         @foreach($data as $data)

         <tr>
             <td>{{$data->type_name}}</td>
             <td><a onclick="return confirm('are you sure to delete this')" class="btn btn-danger" href='{{url("/delete-type",$data->id)}}'>Delete</a></td>
         </tr>
         @endforeach
          </div>
        </div>
      </div>
      </section>
</div>
@endsection