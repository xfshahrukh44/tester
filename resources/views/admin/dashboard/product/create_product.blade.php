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
                  Add Product
                </h3>
                
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content p-0">
                  
                  <!-- Main card content.. -->

                    <form class="">
                      <div class="row">
                        <div class="col-md-4">
                              <div class="form-group">
                                <label for="category">Category</label>
                                <select id="category" class="form-control">
                            <option selected="">Dairy</option>
                            <option>Meat</option>
                          </select>             
                              </div>
                          </div>    
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="product_title">Product Name</label>
                                <input type="text" class="form-control" id="product_title" placeholder="Enter Product Name">
                              </div>
                          </div>

                          <!-- short and long description textarea. -->
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="product_shortDesc">Short Description</label>
                                <input type="text" class="form-control" id="product_shortDesc" placeholder="Enter Product Description">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                <label for="product_longDesc">Long Description</label>
                                <textarea class="form-control" id="product_longDesc" rows="3" placeholder="Enter Product Description"></textarea>
                            </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="product_unit">Unit</label>
                                 <select id="product_unit" class="form-control">
                              <option selected>kg</option>
                              <option>lbs</option>
                              <option>gms</option>
                              <option>litre</option>       
                              <option>dozen</option>
                          </select>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="product_price">Price in Rs.</label>
                                <input type="text" class="form-control" id="product_price" placeholder="Enter Product Price">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="product_cost">Cost in Rs.</label>
                                <input type="text" class="form-control" id="product_cost" placeholder="Enter Product Cost">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="product_discount">Discount %</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Discount in %">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="product_status">Status</label>
                                <select id="product_status" class="form-control">
                              <option selected="">Pending</option>
                              <option>Completed</option>
                              <option>Draft</option>
                          </select>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="product_threshold">Threshold</label>
                                <input type="text" class="form-control" id="product_threshold" placeholder="Enter Product Threshold">
                              </div>
                          </div>
                          
                          <div class="col-md-12">
                              <button type="submit" class="btn btn-primary">Add Product</button>
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