@extends('admin.layouts.app')

@section('content_header')
    <div class="row mb-2">
      <div class="col-sm-6">
          <h1 class="m-0 text-dark">Product</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('product.index') }}">Product</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
@endsection('content_header')

@section('content_body')
    
    <div class="row">
      <section class="col-md-12">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card card-dark">
              <div class="card-header">
                <h4 class="card-title">
                  <strong>Product List</strong>
                </h4>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#AddProduct">Add</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content p-0">
                  
                  <!-- Main card content.. -->
                  <div class="container">
                    <div class="row">
                   
                    </div>

                    <table class="table table-bordered table-responsive-lg table-hover">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Product Name</th>
                          <th>Category Name</th>
                          <th>Price</th>
                          <th>Unit</th>
                          <th>Discount %</th>
                          <th>Description</th>
                          <th>Thersold</th>
                          <th>Status</th>
                          <th>Actions</th>
                          <!-- <th style="text-align: center;"><a class="btn btn-success" style="font-size: 10px" href="{{route('product.create')}}">Add</a></th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1;?>
                          @foreach($product as $key => $value)
                          <tr>
                            <td >{{$no++}}</td>
                            <td >{{$value->title }}</td>
                            <td >{{$value->product_category->title}}</td>                            
                            <td >{{$value->price }}</td>                                                 
                            <td >{{$value->unit->name}}</td>
                            <td >{{$value->discount }}</td>
                            <td >{{$value->short_desc }}</td> 
                            <td >{{$value->threshold }}</td>
                            <td >{{$value->status }}</td>                          
                            <td style="text-align: center;">
                              <a class="btn btn-info btn-sm" href="{{route('product.show', $value->id)}}"  style="font-size: 10px">View</a>
                              @role('admin')
                              <a class="btn btn-warning btn-sm" href="{{route('product.edit', $value->id)}}"  style="font-size: 10px">Edit</a>
                              {{ Form::open(['method' => 'DELETE','route' => ['product.destroy', $value->id]]) }}
                                <button type="submit" class="btn btn-danger btn-sm" style="font-size: 10px">Delete</button>
                              {{ Form::close() }}
                              @endrole
                            </td>

                          </tr>
                          @endforeach 
                      </tbody>
                    </table>
                  </div>

                  <!-- /.Main card-content.. -->

                  <!-- /Add Product Area -->
                  <div class="modal fade" id="AddProduct" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Add Product</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- /Add Form Content -->
                          
                          {{Form::open(['route' => 'product.store', 'method' => 'POST'])}}
                            @include('admin.product.product_master')
                          {{ Form::close() }}

                          <!-- /.Add Form Content -->
                        </div>
                        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>                          
                        </div> -->
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
      
                </div>
              </div><!-- /.card-body -->

        </div>
        <!-- /.card -->
      </section>
    </div>

    <!-- <script>
      $(documnet).ready(function (){

        /* When click edit user */
        $('body').on('click', '#EditProduct', function () {
          var p_id = $(this).data('id');
          $.get('http://127.0.0.1:8000/product/' + p_id +'/edit', function (data) {
              
          });
      });

      })
    </script> -->
    

@endsection('content_body')
