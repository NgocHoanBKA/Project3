@extends('layout')
@section('content')
    <!--================Contact Form Area =================-->
    <?php $billing_status = \Illuminate\Support\Facades\Session::get('Status_billing') ?>
    <section class="contact_form_area p_100">
        <div class="container">
            <div class="main_title">
                <h2>Thông tin đơn hàng bạn đã đặt</h2>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="row product_d_price">
                        <div class="col-lg-6">
                            <div class="product_img"><img class="img-fluid" width="405" height="329"
                                                          src="{{URL::to('uploads/product/'.$product_detail->product_image)}}" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product_details_text">
                                <h4>{{$product_detail->product_name}}</h4>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequ untur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, </p>
                                <h5>Price :<span>{{$product_detail->product_price}}</span></h5>
                                <div class="quantity_box">
                                    <label for="quantity">Quantity :</label>
                                    <input type="text" placeholder="{{$product_detail->product_sales_quantity}}" id="quantity">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-md-1">
                    <div class="contact_details">
                        <div class="contact_d_item">
                            <h5>Phone : <a href="tel:01372466790">{{$product_detail->customer_phone}}</a></h5>
                            <h5>Email : <a href="mailto:rockybd1995@gmail.com">{{$product_detail->customer_email}}</a></h5>
                        </div>
                        <div class="contact_d_item">
                            <h3>Trạng thái đơn hàng :</h3>
                            @if($product_detail->order_status == 1)
                            <p class="text-danger">Đang chờ xác nhận</p>
                            @elseif($product_detail->order_status == 2)
                                <p class="text-success">Đã giao hàng</p>
                            @else
                                <p class="text-danger">Đã hủy đơn</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
