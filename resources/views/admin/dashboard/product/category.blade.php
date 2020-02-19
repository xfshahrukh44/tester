@extends('admin.layouts.app')

@section('content_header')
    <div class="row mb-2">
      <div class="col-sm-6">
          <h1 class="m-0 text-dark">Product</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add product</li>
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
                  Add Category
                </h3>
                
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content p-0">
                  
                  <!-- Main card content.. -->

                    <form class="">
                      <div class="row">                        
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="product_title">Category Title</label>
                                <input type="text" class="form-control" id="product_title" placeholder="Enter Product Name">
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="product_cost">Parent</label>
                                <input type="text" class="form-control" id="product_cost" placeholder="Enter Product Cost">
                              </div>
                          </div>

                          <div class="col-md-12">
                              <button type="submit" class="btn btn-primary">Add Category</button>
                          </div>   
                      </div>
                  </form>

                  <!-- /.Main card-content.. -->
       
                </div>
              </div><!-- /.card-body -->

        </div>
        <!-- /.card -->
      </section>
    </div>
    

@endsection('content_body')
