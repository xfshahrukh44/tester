@extends('admin.layouts.app')

@section('content_header')
    <div class="row mb-2">
      <div class="col-sm-6">
          <h1 class="m-0 text-dark">Product</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item activr"><a href="{{ route('product.index') }}">Product</a></li>
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
                <h4 class="card-title">
                  <i class="fas mr-1"></i>
                  Product List
                </h4>
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
                          <th>Category Name</th>
                          <th>Product Name</th>
                          <th>Product Description</th>
                          <th>Unit</th>
                          <th>Cost</th>
                          <th>Price</th>
                          <th>Discount %</th>
                          <th>Status</th>
                          <th>Thersold</th>
                          <th>Created By</th>
                          <th>Modified By</th>
                          <th style="text-align: center;"><a class="btn btn-success" style="font-size: 10px" href="{{route('product.create')}}">Add</a></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1;?>
                          @foreach($product as $key => $value)
                          <tr>
                            <td >{{$no++}}</td>
                            <td >{{$value->product_category_id}}</td>
                            <td >{{$value->title }}</td>
                            <td >{{$value->short_desc }}</td>
                            <!-- <td >{{$value->long_desc }}</td> -->
                            <td >{{$value->unit }}</td>
                            <td >{{$value->cost }}</td>
                            <td >{{$value->price }}</td>
                            <td >{{$value->discount }}</td>
                            <td >{{$value->status }}</td>
                            <td >{{$value->threshold }}</td>
                            <td >{{$value->created_by }}</td>
                            <td >{{$value->modified_by }}</td>
                            
                            <td style="text-align: center;">
                              <a class="btn btn-info btn-sm" href="{{route('product.show',$value->id)}}" style="font-size: 10px">Show
                              </a>
                            </td>
                            <!-- <td style="font-size: 10px; text-align: center;">
                              <a class="btn btn-primary btn-sm" href="{{route('product.edit',$value->id)}}">
                                <i class="glyphicon gylphicon-pencil" style="font-size: 10px">Edit</i>    
                              </a>
                            </td>
                            <td style="font-size: 10px; text-align: center;">
                              {!! Form::open(['method' => 'DELETE','route' => ['product.destroy',$value->id],'style'=>'display']) !!}
                              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm">
                                <i class="glyphicon glyphicon-th-large" style="font-size: 10px">Delete</i>
                              </button>
                              {!! Form::close() !!}
                            </td> -->
                          </tr>
                          @endforeach 
                      </tbody>
                    </table>
                  </div>
                  


                  <!-- /.Main card-content.. -->
       
                </div>
              </div><!-- /.card-body -->

        </div>
        <!-- /.card -->
      </section>
    </div>
    

@endsection('content_body')
