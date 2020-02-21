<?php

namespace App\Http\Controllers;

use App\Model\ProductMaster;
use App\Model\ProductCategory;
use Illuminate\Http\Request;

class ProductMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = ProductMaster::all();
        return view('admin.dashboard.product.product_list', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = ProductCategory::with('product_master')->get();
        $category_name = [];
        foreach($category as $categories){
            $category_name[$categories->id] = $categories->title;
        }
        return view('admin.dashboard.product.product_create', compact('category_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 
            'product_category_id' => 'required', 
            'title' => 'required|string|max:250',
            'short_desc' => 'required|string|max:250',
            'long_desc' => 'required|string',
            'price' => 'required|int',
            'cost' => 'required|int',
            'discount' => 'required|int',
            'status' => 'required',
            // 'created_by' => 'required',
            'threshold' => 'required',
        ]);

        ProductMaster::create($request->all());
        return redirect()->route('product.index')->with('success','Record Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ProductMaster  $productMaster
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = ProductMaster::find($id);
        return view('admin.dashboard.product.product_detail',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ProductMaster  $productMaster
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = ProductCategory::with('product_master')->get();
        
        $category_name = [];
        foreach($category as $categories){
            $category_name[$categories->id] = $categories->title;
        }

        $product = ProductMaster::find($id);
        return view('admin.dashboard.product.product_update',compact('product', 'category_name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ProductMaster  $productMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'product_category_id' => 'required', 
            'title' => 'required|string|max:250',
            'short_desc' => 'required|string|max:250',
            'long_desc' => 'required|string',
            'price' => 'required|int',
            'cost' => 'required|int',
            'discount' => 'required|int',
            'status' => 'required',
            // 'created_by' => 'required',
            'threshold' => 'required',
        ]);
        ProductMaster::find($id)->update($request->all());
        return redirect()->route('product.index')->with('success','Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ProductMaster  $productMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductMaster::find($id)->delete();
        return redirect()->route('product.index')->with('success','Record Deleted Successfully');
    }

    // public function test()
    // {
        
    // }
}
