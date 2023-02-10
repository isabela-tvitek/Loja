<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Http\Resources\StoreResource;

class StoreController extends Controller {
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
    */
    public function index() {
        $stores = Store::with(['products'])->first();

        return response()->json(StoreResource::collection(Store::all()),200);
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function show($id) {
        $store = Store::find($id);
        return response()->json(new StoreResource($store),200);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function store(StoreRequest $request) {
        $request = $request->validated();
        
        $data = [
            'name' => $request['name'],
            'email' => $request['email']
        ];
    
        $store = Store::create($data);
        return response()->json(new StoreResource($store),201);
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function update(StoreRequest $request, $id) {
        $request = $request->validated();

        $store =  Store::find($id);

        $store->name = $request['name'];
        $store->email = $request['email'];
 
        $store->save();
        return response()->json(new StoreResource($store),204);
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function destroy($id) {
        $store = Store::where('id',$id)->first();

        //soft delete
        $store->deleted_at = date('Y-m-d');
        $store->save();

        //force delete
        //$products = Product::where('store_id',$id)->delete();
        //$store->delete();
        return response()->json(new StoreResource($store),204);
    }
}
