<?php

namespace BoxGrater\Products\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use BoxGrater\Products\Models\Product as Model;

class ProductsController extends Controller
{

    protected $handle = "product";

    public function __construct()
    {
        $this->layout = str_plural($this->handle);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Model::all();
        return view( $this->layout.'::product', ['view' => 'index'])->with($this->layout, $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->has('merchant_id')) {
            $merchant_id = $request->merchant_id;
        } else {
            $merchant_id = 0;
        }
        return view( $this->layout.'::product', ['view' => 'create' , 'merchant_id' => $merchant_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Model::find($id);
        return view( $this->layout.'::product', ['view' => 'show'])->with($this->handle, $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Model::find($id);
        return view( $this->layout.'::product', ['view' => 'edit'])->with($this->handle, $data);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
