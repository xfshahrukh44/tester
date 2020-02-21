@extends('admin.layouts.app')

@section('content_header')
    <div class="row mb-2">
      <div class="col-sm-6">
          <h1 class="m-0 text-dark">Role</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Role</a></li>
            <li class="breadcrumb-item">View Role</li>
            <li class="breadcrumb-item active">$role->title</li>
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
                  Role Details
                </h3>
                
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content p-0">
                  
                  <!-- Main card content.. -->
                  
                  <div class="">
                    <div class="container">
                        <div class="form-group">
                            <strong>Title: </strong>
                            {{ $role->name}}
                        </div>
                    </div>
                    <div class="container">
                        <div class="form-group">
                            <strong>Description: </strong>
                            {{ $role->guard_name}}
                        </div>
                    </div>
                  </div>
                  
                <div class="col-md-12">
                    <a class="btn btn-success" href="{{route('role.edit', $role->id)}}">Edit</a>

                    {{ Form::open(['method' => 'DELETE','route' => ['role.destroy', $role->id]]) }}
                      <button type="submit" class="btn btn-danger">Delete</button>
                    {{ Form::close() }}
                </div>


                  <!-- /.Main card-content.. -->
       
                </div>
              </div><!-- /.card-body -->

        </div>
        <!-- /.card -->
      </section>
    </div>
    

@endsection('content_body')