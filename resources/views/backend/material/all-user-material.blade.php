@extends('backend.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        

        <div class="card">
          <div class="card-header">
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
            @endif
            <h3 class="card-title">All User</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Directeur Email</th>
                <th>Etablissement</th>
                <th>description</th>
                <th>dateLivrison</th>
                <th>etat</th>
                <th>lieu</th>
                <th>probleme</th>
                <th>type</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    
                  
                    <td></td>
                </tr>
                
              {{-- @foreach ($all as $key=>$row)
              <tr>
                <td>{{$key + 1 }}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->ppr}}</td>
                <td>{{$row->role}}</td>
                <td><a href="{{URL::to('/edit-user/'.$row->id)}}" class="btn btn-sm btn-info">edit</a>
                <a href="{{URL::to('/delete-user/'.$row->id)}}" class="btn btn-sm btn-danger">supprimer</a> </td>
              </tr>
              @endforeach --}}
              
              
             
              
              </tbody>
            
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
</div> 
  @endsection