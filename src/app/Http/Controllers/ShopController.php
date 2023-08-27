<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function shopAll()
    {
        $shops=Shop::all();
        return view('ShopAll',['shops'=> $shops]);
        
    }

    public function showDetail($shop_id)
    {
        $shop = Shop::find($shop_id);
        return view('ShopDetail', compact('shop'));
    }
    
}
