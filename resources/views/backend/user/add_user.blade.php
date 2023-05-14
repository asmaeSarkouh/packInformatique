@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                
                <div class="card">
                    <div class="card-header">
                        <div class="div_center">
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                <button class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                {{session()->get('message')}}
                            </div>
                            @endif
                         <h5 class="card-title">
                                Add User
                         </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{URL::to('/insert-user')}}" method="post" role="form">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">User name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">User email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" placeholder="Enter your email" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ppr" class="col-sm-2 col-form-label">User ppr</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="ppr" placeholder="Enter your ppr" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">User password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">User role type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="role" required>
                                        <option value="Admin">
                                            Admin
                                        </option>
                                        <option value="directeur">
                                            Directeur
                                        </option>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
 
    </section>
</div>
@endsection