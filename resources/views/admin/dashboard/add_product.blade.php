@extends('admin.layouts.app')

@section('content')

<h1 class="col-md-12" align="center">Add Products</h1>
    <div class="Form">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button>
                    <a href="table.html"><button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i>View Products</button></a>
                     <br><br>
                </div>

               <form class="form-inline">
             
                   <div class="form-group col-md-3">
                    <div class="input-group">
      <label for="inputState">Category</label>
      <select id="inputState" class="form-control">
        <option selected></option>
        <option selected="">Dairy</option>
        <option>Meat</option>
      
      </select>
    </div>
    </div>
                   <div class="col-md-3">
                       <div class="form-group">
                           <label for="exampleInputAmount1">Title</label>
                           <label class="sr-only" for="exampleInputAmount">Product title</label>
                           <div class="input-group">
                               <div class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></div>
                               <input type="text" class="form-control" id="exampleInputAmount1" placeholder="Title">
                           </div>
                       </div>
                   </div>
                   <div class="col-md-3">
                       <div class="form-group">
                           <label for="exampleInputAmount2">Short Description</label>
                           <label class="sr-only" for="exampleInputAmount">Short Description</label>
                           <div class="input-group">
                               <div class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></div>
                               <textarea class="form-control" placeholder="Short description" >
                                 
                               </textarea>
                            <!--    <input type="textarea" class="form-control" id="exampleInputAmount2" placeholder="NTN NO"> -->
                           </div>
                       </div>
                   </div>
                   <div class="col-md-3">
                       <div class="from-group">
                           <label for="exampleInputAmount3">Long Description</label>
                           <label class="sr-only" for="exampleInputAmount">Long Description</label>
                           <div class="input-group">
                               <div class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></div>
                               <textarea class="form-control" placeholder="Short description" >
                                 
                               </textarea>
                              <!--  <input type="text" class="form-control" id="exampleInputAmount3" placeholder="GST NO"> --> 
                           </div>
                       </div>
                   </div>
                  <!--  <div class="col-md-3">
                       <div class="from-group">
                           <label for="exampleInputAmount4">Unit</label>
                           <label class="sr-only" for="exampleInputAmount">Amount(in dollars)</label>
                           <div class="input-group">
                               <div class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></div>
                               <input type="text" class="form-control" id="exampleInputAmount4" placeholder="Contact Person">
                           </div>
                       </div> -->
   
                    <div class="form-group col-md-3">
 <div class="input-group">
      <label for="inputState">Unit</label>
      <select id="inputState" class="form-control">
        <option selected></option>
        <option selected>kg</option>
        <option>lbs</option>
      <option>gms</option>
        <option>litre</option>       
         <option>dozen</option>
      
      </select>
</div>
    </div>
                 

                   <div class="col-md-3">
                       <div class="from-group">
                           <label for="exampleInputAmount5">Price</label>
                           <label class="sr-only" for="exampleInputAmount">Amount(in Rupees)</label>
                           <div class="input-group">
                               <div class="input-group-addon">$</div>
                               <input type="text" class="form-control" id="exampleInputAmount5" placeholder="Price">
                           </div>
                       </div>
                   </div>
                   <div class="col-md-3">
                       <div class="from-group">
                           <label for="exampleInputAmount6">Cost</label>
                           <label class="sr-only" for="exampleInputAmount">Amount(in Rupees)</label>
                           <div class="input-group">
                               <div class="input-group-addon">$</div>
                               <input type="text" class="form-control" id="exampleInputAmount6" placeholder="Cost">
                           </div>
                       </div>
                   </div>
                   <div class="col-md-3">
                       <div class="form-group">
                           <label for="exampleInputAmount7">Discount</label>
                           <label class="sr-only" for="exampleInputAmount">Amount(in percent)</label>
                           <div class="input-group">
                               <div class="input-group-addon">$</div>
                               <input type="text" class="form-control" id="exampleInputAmount7" placeholder="Discount">
                           </div>
                       </div>
                   </div>
           <div class="form-group col-md-3">
 <div class="input-group">
      <label for="inputState">Status</label>
      <select id="inputState" class="form-control">
        <option selected></option>
        <option>Pending</option>
        <option>Completed</option>
      <option>Draft</option>
       
      
      </select>
</div>
    </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleInputAmount9">Threshold</label>
                        <label class="sr-only" for="exaampleInputAmount">Quantity</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></div>
                            <input type="text" class="form-control" id="exampleInputAmount9" placeholder="Threshold">
                        </div>
                    </div>
                </div>
                

             

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i>Add</button>
                </div>
               </form>
            </div>
        </div>
    </div>

@endsection