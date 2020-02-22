@extends('admin.layouts.app')

@section('content_header')
    <div class="row mb-2">
      <div class="col-sm-6">
          <h1 class="m-0 text-dark">User</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item">View User</li>
            <li class="breadcrumb-item active">$user->title</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
@endsection('content_header')

@section('content_body')

    <div class="row">
      <section class="col-md-12 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas mr-1"></i>
                  User Details
                </h3>
                
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content p-0">
                  
                  <!-- Main card content.. -->
                  
                  <div class="">
                    <div class="container">
                        <div class="form-group">
                            <strong>Title: </strong>
                            {{ $user->name}}
                        </div>
                    </div>
                    <div class="container">
                        <div class="form-group">
                            <strong>Email: </strong>
                            {{ $user->email}}
                        </div>
                    </div>
                    <div class="container">
                        <div class="form-group">
                            <strong>Role id: </strong>
                            {{ $user->role_id}}
                        </div>
                    </div>
                    
                  </div>
                  
                @role('Admin')
                <div class="row">
                <div class="col-md-6" >
                    <a class="btn btn-success " style="padding: 1% 47%;" href="{{route('user.edit', $user->id)}}">Edit</a></div>
            <div class="col-md-6">
                    {{ Form::open(['method' => 'DELETE','route' => ['user.destroy', $user->id]]) }}
                      <button type="submit" class="btn btn-danger" style="padding: 1% 47%;">Delete</button>
                    {{ Form::close() }}
                    </div>
                </div>
                @endrole
                


                  <!-- /.Main card-content.. -->
       
                </div>
              </div><!-- /.card-body -->

        </div>
        <!-- /.card -->
      </section>
    </div>
    

@endsection('content_body')