@extends('admin.layouts.app')

@section('content')

<div class="Form">
        <div class="container">
            <h1 class="">Add Category </h1>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Back </button>
                    <a href="table.html"><button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i>View Categories</button></a>
                </div>
                <br><br><br>
               <form class="form-inline">
                   <div class="col-md-3">
                       <div class="form-group">
                           <label for="exampleInputAmount">Category Title</label>
                           <label class="sr-only" for="exampleInputAmount">Amount(in dollars)</label>
                           <div class="input-group">
                               <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                               <input type="text" class="form-control" id="exampleInputAmount" placeholder="Boker Name">
                           </div>
                       </div>
                   </div>

                   <div class="col-md-3">
                       <div class="form-group">
                           <label for="exampleInputAmount1">Parent</label>
                           <label class="sr-only" for="exampleInputAmount">Amount(in dollars)</label>
                           <div class="input-group">
                               <div class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></div>
                               <input type="text" class="form-control" id="exampleInputAmount1" placeholder="Account Number">
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