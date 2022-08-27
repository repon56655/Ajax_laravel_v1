<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product; 
class ProductController extends Controller
{
    public function home(){
        return view("frontend.home");
    }
    public function addproduct(){
        return view("frontend.addproduct");
    }
    public function productStore(Request $rqst)
    {
        $product = new Product();
        $product->pname = $rqst->pname;
        $product->pdes = $rqst->pdes;
        $product->cat = $rqst->cat;
        $product->scat = $rqst->scat;
        $product->price = $rqst->price;
        $product->status = $rqst->status;
        $product->save();
        return redirect()->route("showproduct");
    }
    public function showproduct(){
        $products = Product::all();
        return view("frontend.showproduct",compact("products"));
    }
    public function editproduct($productId){
        $product = Product::find($productId);
        return view("frontend.editproduct",compact("product"));
    }
    public function update(Request $rqst, $id){
        $product = Product::find($id);
        $product->pname = $rqst->pname;
        $product->pdes = $rqst->pdes;
        $product->cat = $rqst->cat;
        $product->scat = $rqst->scat;
        $product->price = $rqst->price;
        $product->status = $rqst->status;
        $product->update();
        return redirect()->route("showproduct");
    }
    
    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route("showproduct");
    }
    
    public function status($id){
        $product = Product::find($id);
        if($product->status==1){
            $product->status=2;
        }
        else{
            $product->status=1;
        }
        $product->update();
        return redirect()->route("showproduct");
    }
}
