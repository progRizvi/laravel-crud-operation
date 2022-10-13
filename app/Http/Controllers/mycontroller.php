<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;

class mycontroller extends Controller
{
    function insert(Request $req){
        $ProductName = $req->get("ProductName");
        $productPrice = $req->get("ProductPrice");
        $ProductDescription = $req->get("ProductDescription");
        $ProductImage = $req->file("ProductImage")->getClientOriginalName();
        
        $req->ProductImage->move(public_path('/images'),$ProductImage);
        $prod = new product();

        $prod->ProductName = $ProductName;
        $prod->ProductPrice = $productPrice;
        $prod->ProductDescription = $ProductDescription;
        $prod->ProductImage = $ProductImage;
        $prod->save();
        return redirect("/");
    }
    
    function readData(){
        $productData = product::all();

        return view("insertRead",compact('productData'));
    }
}