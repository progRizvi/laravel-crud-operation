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
        $ProductImage = $req->file("ProductImage");
        

        if($req->hasFile("ProductImage")){
            $imgName = $ProductImage->getClientOriginalName();
            $destinationPath = public_path('/images');

            $ProductImage->move($destinationPath,$imgName);
        }else {
            dd('Request Has No File');
            }

        $prod = new product();

        $prod->ProductName = $ProductName;
        $prod->ProductPrice = $productPrice;
        $prod->ProductDescription = $ProductDescription;
        $prod->ProductImage = $ProductImage;
        $prod->save();
        return redirect("/index");
    }
}