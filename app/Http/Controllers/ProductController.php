<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller {

    public function index() {
        $products = Product::all();
        return response()->json(ProductResource::collection($products),200);
    }

    public function show($id) {
        $product = Product::find($id);
        return response()->json(new ProductResource($product),200);
    }

    public function store(ProductRequest $request) {
        $request = $request->validated();
        
        $data = [
            'name' => $request['name'],
            'price' => $request['price'],
            'store_id' => $request['store_id'],
            'active' => $request['active'],
            'stock' => $request['stock']
        ];
    
        $product = Product::create($data);
        return response()->json(new ProductResource($product),201);

    }

    public function update(ProductRequest $request, $id) {
        $request = $request->validated();
        $product =  Product::find($id);
 
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->store_id = $request['store_id'];
        $product->active = $request['active'];
        $product->stock = $request['stock'];
 
        $product->save();
        return response()->json(new ProductResource($product),204);
    }

    public function destroy($id) {
        $product =Product::where('id',$id)->first();

        //soft delete
        $product->deleted_at = date('Y-m-d');
        $product->save();

        //force delete
        //$product->delete();
        return response()->json(new ProductResource($product),204);
    }
}
