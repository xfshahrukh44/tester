<?php

namespace App\Http\Controllers;

use App\Model\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouse = Warehouse::all();
        return view('admin.dashboard.warehouse.warehouse_list', compact('warehouse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.warehouse.warehouse_create');
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
            'location' => 'required|string|max:250',
        ]);

        Warehouse::create($request->all());
        return redirect()->route('warehouse.index')->with('success','Record Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $warehouse = Warehouse::find($id);
        return view('admin.dashboard.warehouse.warehouse_detail',compact('warehouse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $warehouse = Warehouse::find($id);
        return view('admin.dashboard.warehouse.warehouse_update',compact('warehouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[ 
            'title' => 'required|string|max:250',
            'location' => 'required|string|max:250',
        ]);
        Warehouse::find($id)->update($request->all());
        return redirect()->route('warehouse.index')->with('success','Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Warehouse::find($id)->delete();
        return redirect()->route('warehouse.index')->with('success','Record Deleted Successfully');
    }
}
