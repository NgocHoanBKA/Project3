<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Slider;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Cart;
use App\Coupon;
session_start();
class CartController extends Controller
{
    public function check_coupon(Request $request){
        $data = $request->all();
        $cart = Session::get('cart');
        $coupon = Coupon::where('coupon_code',$data['coupon'])->first();
        if($coupon){
            if (!empty($coupon->product_id) ){
                $isProduct = 0;
                foreach ($cart as $product){
                    if ($product['product_id'] == $coupon->product_id){
                        $isProduct=1;
                        break;
                    }
                }
                if ($isProduct == 1){
                    $count_coupon = $coupon->count();
                    if($count_coupon>0){
                        $coupon_session = Session::get('coupon');
                        if($coupon_session==true){
                            $is_avaiable = 0;
                            if($is_avaiable==0){
                                $cou[] = array(
                                    'coupon_code' => $coupon->coupon_code,
                                    'coupon_condition' => $coupon->coupon_condition,
                                    'coupon_number' => $coupon->coupon_number,
                                    'coupon_time' => $coupon->coupon_time,
                                    'product_id' => $coupon->product_id,

                                );
                                Session::put('coupon',$cou);
                            }
                        }else{
                            $cou[] = array(
                                'coupon_code' => $coupon->coupon_code,
                                'coupon_condition' => $coupon->coupon_condition,
                                'coupon_number' => $coupon->coupon_number,
                                'coupon_time' => $coupon->coupon_time,
                                'product_id' => $coupon->product_id,
                            );
                            Session::put('coupon',$cou);
                        }
                        Session::save();
                        return redirect()->back()->with('message','Th??m m?? gi???m gi?? th??nh c??ng');
                    }
                }
                else{
                    return redirect()->back()->with('message','S???n ph???m n??y kh??ng c?? khuy???n m??i');
                }
            }
        }else{
            return redirect()->back()->with('error','M?? gi???m gi?? kh??ng ????ng');
        }
    }
    public function gio_hang(Request $request){
         //seo
         //slide

        $meta_desc = "Gi??? h??ng c???a b???n";
        $meta_keywords = "Gi??? h??ng ";
        $meta_title = "Gi??? h??ng ";
        $url_canonical = $request->url();
        //--seo
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        return view('pages.cart.cart_ajax')->with('category',$cate_product)->with('brand',$brand_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    public function add_cart_ajax(Request $request){
        // Session::forget('cart');
        $data = $request->all();
        $session_id = substr(md5(microtime()),rand(0,26),5); //M???t m?? cart ng???u nhi??n
        $cart = Session::get('cart',[]);
        if($cart==true){ // Kiem tra san pham co trong gia hang chua
            $is_avaiable = 0;
            foreach($cart as &$val){
                if($val['product_id']== $data['cart_product_id']){
                    $is_avaiable++; //neu co sp roi thi tang len 1
                    $val['product_qty']++;
                }
            }
            if($is_avaiable == 0){ //neu sp add v??o gi??? ko trung th?? t???o ra sp m???i trong cart
                $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_quantity' => $data['cart_product_quantity'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
                );
                Session::put('cart',$cart);
            }
            Session::put('cart', $cart);
        }
        else{
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_quantity' => $data['cart_product_quantity'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],

            );
            Session::put('cart',$cart);
        }

        Session::save();

    }
    /* L???y theo session id ????? x??? l?? */
    public function delete_product($session_id){
        $cart = Session::get('cart');
        if($cart==true){
            foreach($cart as $key => $val){
                if($val['session_id']==$session_id){
                    unset($cart[$key]);
                }
            }
            Session::put('cart',$cart); //C???p nh???t l???i cart gi?? tr??? m???i
            return redirect()->back()->with('message','X??a s???n ph???m th??nh c??ng');

        }else{
            return redirect()->back()->with('message','X??a s???n ph???m th???t b???i');
        }

    }
    /* L???y theo th??? name c???a s??? l?????ng ????? x??? l?? */
    public function update_cart(Request $request){
        $data = $request->all();
        $cart = Session::get('cart');
        if($cart==true){
            $message = '';

            foreach($data['cart_qty'] as $key => $qty){
                $i = 0;
                foreach($cart as $session => $val){
                    $i++;

                    if($val['session_id']==$key && $qty<$cart[$session]['product_quantity']){

                        $cart[$session]['product_qty'] = $qty;
                        $message.='<p style="color:blue">'.$i.') C???p nh???t s??? l?????ng :'.$cart[$session]['product_name'].' th??nh c??ng</p>';

                    }elseif($val['session_id']==$key && $qty>$cart[$session]['product_quantity']){
                        $message.='<p style="color:red">'.$i.') C???p nh???t s??? l?????ng :'.$cart[$session]['product_name'].' th???t b???i</p>';
                    }

                }

            }

            Session::put('cart',$cart);
            return redirect()->back()->with('message',$message);
        }else{
            return redirect()->back()->with('message','C???p nh???t s??? l?????ng th???t b???i');
        }
    }
    public function delete_all_product(){
        $cart = Session::get('cart');
        if($cart==true){
            // Session::destroy();
            Session::forget('cart');
            Session::forget('coupon');
            return redirect()->back()->with('message','X??a h???t gi??? th??nh c??ng');
        }
    }
    public function save_cart(Request $request){
        $productId = $request->productid_hidden;
        $quantity = $request->qty;
        $product_info = DB::table('tbl_product')->where('product_id',$productId)->first();


        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        // Cart::destroy();
        $data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = $product_info->product_price;
        $data['options']['image'] = $product_info->product_image;
        Cart::add($data);
        // Cart::destroy();
        return Redirect::to('/show-cart');
     //Cart::destroy();

    }
    public function show_cart(Request $request){
        //seo
        $meta_desc = "Gi??? h??ng c???a b???n";
        $meta_keywords = "Gi??? h??ng";
        $meta_title = "Gi??? h??ng";
        $url_canonical = $request->url();
        //--seo
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.cart.show_cart')->with('category',$cate_product)->with('brand',$brand_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    public function delete_to_cart($rowId){
        Cart::update($rowId,0);
        return Redirect::to('/show-cart');
    }
    public function update_cart_quantity(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId,$qty);
        return Redirect::to('/show-cart');
    }

}
