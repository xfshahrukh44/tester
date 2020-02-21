<?php

namespace App\Http\Controllers;

use App\Model\OrderMaster;
use App\Model\OrderItems;
use App\User;

use Illuminate\Http\Request;

class OrderMasterController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = OrderMaster::all();
        return view('admin.dashboard.order.order_list', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.order.order_create');
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
            'title' => 'required|string|max:250',
            'discount' => 'required|int',
            'status' => 'required',
        ]);
        OrderMaster::create($request->all());
        return redirect()->route('order.index')->with('success','Order Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = OrderMaster::find($id);
        return view('admin.dashboard.order.order_detail',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = OrderMaster::find($id);
        return view('admin.dashboard.order.order_update',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[  
            'title' => 'required|string|max:250',
            'discount' => 'required|int',
            'status' => 'required',
        ]);
        OrderMaster::find($id)->update($request->all());
        return redirect()->route('order.index')->with('success','Order Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OrderMaster::find($id)->delete();
        return redirect()->route('order.index')->with('success','Order Deleted Successfully');
    }
}
