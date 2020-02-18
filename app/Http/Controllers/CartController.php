<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
 
class CartController extends Controller
{
    //  public function add_to_cart(Request $request){
    //         $quantity = $request->qty;
    //         $product_id = $request->product_id;
    //         $product_info = DB::table('tbl_products')
    //                         ->where('product_id',$product_id)
    //                         ->first();

    //         //$data['qty']=$qty;
    //         $id=$product_info->product_id;
    //         $name =$product_info->product_name;
    //         $price =$product_info->product_price; 
    //         //$data['options']['image']=$product_info->product_image;

             
           


    //         $cartItem = Cart::add($id, $name, $price, $quantity);
    //         // $cartItem = Cart::add($id, $name, $price, $quantity, [
    //         //     'color' => 'white',
    //         // ]);
    //          return Redirect::to('/show-cart');




    // }

    // public function show_cart(){
    //     $all_published_category = DB::table('tbl_category')
    //                             ->where('publication_status',1)
    //                             ->get();
    //     $manage_published_category = view('pages.add_to_cart')
    //                     ->with('all_published_category',$all_published_category);

    //     return view('layout')
    //             ->with('pages.add_to_cart',$manage_published_category);
    // }
}
