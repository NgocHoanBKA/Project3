<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use App\Slider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function error_page(){
        return view('errors.404');
    }
    public function send_mail(){
         //send mail
                $to_name = "Hieu Tan Tutorial";
                $to_email = "hieuchance2018@gmail.com";//send to this email


                $data = array("name"=>"Mail từ tài khoản Khách hàng","body"=>'Mail gửi về vấn về hàng hóa'); //body of mail.blade.php

                Mail::send('pages.send_mail',$data,function($message) use ($to_name,$to_email){

                    $message->to($to_email)->subject('Test thử gửi mail google');//send this mail with subject
                    $message->from($to_email,$to_name);//send from this mail
                });
                // return redirect('/')->with('message','');
                //--send mail
    }

    public function index(Request $request){
        //slide
        $product_suggest = Session::get('product_suggest');
        $product_sg = [];
        if (empty($product_suggest)){
            $product_sg['material_name'] = 0;
        }else{
            $product_sg = $product_suggest;
        }
        $product_option = DB::table('tbl_product')->join('tbl_suppliers','tbl_product.product_id','=','tbl_suppliers.product_id')
            ->whereIn('material_name',$product_sg)->get();
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y/m/d');
//        $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();
        //seo
        $meta_desc = "Chuyên bán những bánh ngọt ,các loại bánh";
        $meta_keywords = "bánh ngọt, bánh mặn, bánh trái cây, bánh kem, bánh crepe, bánh pizza, bánh su kem";
        $meta_title = "Cake Bakery";
        $url_canonical = $request->url();
        //--seo
        $category = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $all_product = DB::table('tbl_product')->where('ExpirationDate','>',$today)
            ->orderBy('product_id','desc')
            ->paginate(15);

        return view('pages.home')->with(compact('category','all_product','meta_desc','meta_keywords',
            'meta_title','url_canonical','slider','today','product_option'));
        // return view('pages.home')->with(compact('cate_product','brand_product','all_product')); //2
    }
    public function search(Request $request){
         //slide

        //seo
        $meta_desc = "Tìm kiếm sản phẩm";
        $meta_keywords = "Tìm kiếm sản phẩm";
        $meta_title = "Tìm kiếm sản phẩm";
        $url_canonical = $request->url();
        //--seo
        $keywords = $request->keywords_submit;

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();


        return view('pages.sanpham.search')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);

    }
}
