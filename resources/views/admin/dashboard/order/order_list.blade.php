@extends('admin.layouts.app')

@section('content_header')
    <div class="row mb-2">
      <div class="col-sm-6">
          <h1 class="m-0 text-dark">Order</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Order</a></li>
            <li class="breadcrumb-item active">View Order</li>
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
                  View Order
                </h3>
                
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content p-0">
                  
                  <!-- Main card content.. -->

                    <div class="container col-md-12">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>User ID</th>
                          <th>Title</th>
                          <th>Status</th>
                          <th>Payment</th>
                          <th>Discount</th>
                          <th>Discount Unit</th>
                          <th style = "text-align: center" ><a class="btn btn-success" href="{{route('order.create')}}">
                                <b class="" style="font-size: 20px">+</b>
                              </a></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1;?>
                          @foreach($order as $key => $value)
                          <tr>
                            <td >{{$no++}}</td>
                            <td >{{$value->user_id}}</td>
                            <td >{{$value->title}}</td>
                            <td >{{$value->status}}</td>
                            <td >{{$value->payment}}</td>
                            <td >{{$value->discount}}</td>
                            <td >{{$value->discount_unit}}</td>
                            <td style="text-align: center;">
                              <a class="btn btn-info btn-sm" href="{{route('order.show',$value->id)}}">
                                <i class="" style="font-size: 10px">Show</i>
                              </a>
                            </td>
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