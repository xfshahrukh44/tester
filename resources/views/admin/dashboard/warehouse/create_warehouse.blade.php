@extends('admin.layouts.app')

@section('content_body')

<h1 class="col-md-12" align="center">Add Warehouse</h1>
    <div class="Form">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back</button>
                    <a href="table.html"><button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i>View Warehouses</button></a>
                     <br><br>
                </div>

               <form class="form-inline">
             
                   
                   <div class="col-md-3">
                       <div class="form-group">
                           <label for="exampleInputAmount1">Title</label>
                           <label class="sr-only" for="exampleInputAmount">Warehouse title</label>
                           <div class="input-group">
                               <div class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></div>
                               <input type="text" class="form-control" id="exampleInputAmount1" placeholder="Title">
                           </div>
                       </div>
                   </div>
                   
					<div class="col-md-3">
                       <div class="form-group">
                           <label for="exampleInputAmount1">Location</label>
                           <label class="sr-only" for="exampleInputAmount">Warehouse Location</label>
                           <div class="input-group">
                               <div class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></div>
                               <input type="text" class="form-control" id="exampleInputAmount1" placeholder="Location">
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

               


            
             

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i>Add</button>
                </div>
               </form>
            </div>
        </div>
    </div>

@endsection