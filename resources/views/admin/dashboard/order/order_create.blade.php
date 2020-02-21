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
            <li class="breadcrumb-item active">Add Order</li>
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
                  Add Order
                </h3>
                
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content p-0">
                  
                  <!-- Main card content.. -->

                    {{Form::open(['route' => 'order.store', 'method' => 'POST'])}}
                      @include('admin.dashboard.order.order_master')                
                    {{ Form::close() }}
                    
                  

                  <!-- /.Main card-content.. -->
       
                </div>
              </div><!-- /.card-body -->

        </div>
        <!-- /.card -->
      </section>
    </div>

    <div class="row">
      <section class="col-md-12 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas mr-1"></i>
                  Cart
                </h3>
                
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content p-0">
                  
                  <!-- Main card content.. -->

                  <select style="width: 320px; height: 40px;" name="product_id" id="product_id">
                    @foreach($product as $products)
                      <option value="{{ $products->title }}">{{$products->title}}</option>
                    @endforeach
                  </select>

                  <button onclick="add();">Add</button>
                      
                  <!-- <p id="text1"> </p> -->
                  <table class="table" id="table">
                    <thead>
                      <th>Item</th>
                    </thead>
                    <tbody>
                      <td id="text1"> </td>
                    </tbody>
                  </table>

                      <script>
                       
                        var table=document.getElementById("table");

                        function add()
                        {
                          var newRow=table.insertRow(table.length),
                          cell1=newRow.insertCell(0),
                          orderI = document.getElementById("product_id").value,
                          cell1 = document.getElementById("text1");
                          cell1.innerHTML = orderI;
                        }
                      </script>

                  <!-- /.Main card-content.. -->
       
                </div>
              </div><!-- /.card-body -->

        </div>
        <!-- /.card -->
      </section>
    </div>
    

@endsection('content_body')
