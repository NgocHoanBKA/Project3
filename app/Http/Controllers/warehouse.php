<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class warehouse extends Controller
{
    public function warehouse(){
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $warehouses=DB::table('tbl_product')
        ->leftjoin('tbl_warehouse','tbl_product.product_id','=','tbl_warehouse.product_id')
        ->where('ExpirationDate','>',$today)
        ->orderBy('tbl_product.product_id','desc')
        ->get();
//        dd($warehouses);
        return view('admin.warehouse')->with('warehouses',$warehouses)->with('today',$today);
    }
}
