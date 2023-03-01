@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
                       <div class="fb-share-button" data-href="http://localhost/tutorial_youtube/shopbanhanglaravel" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                       <div class="fb-like" data-href="{{$url_canonical}}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div>
                        @foreach($category_name as $key => $name)

                        <h2 class="title text-center">{{$name->category_name}}</h2>

                        @endforeach
                        @foreach($category_by_id as $key => $product)
                        <a href="{{URL::to('/chi-tiet/'.$product->slug_category_product)}}">
                        <div class="col-lg-3 btn btn-light" style="margin: 4%">
                             <div class="product-image-wrapper">

                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <form>
                                                @csrf
                                            <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_quantity}}" class="cart_product_quantity_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                                            <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">

                                            <a href="{{URL::to('/chi-tiet/'.$product->slug_category_product)}}">
                                                <div class="cake_feature_item">
                                                    <a href="{{URL::to('/chi-tiet/'.$product->product_id)}}">
                                                        <div class="cake_img">
                                                            <img width="270" height="226"
                                                                 src="{{URL::to('uploads/product/'.$product->product_image)}}"
                                                                 alt="">
                                                        </div>
                                                        <div class="cake_text">
                                                            <h4>${{number_format($product->product_price,0,',','.')}}</h4>
                                                            <h3>{{$product->product_name}}</h3>
                                                        </div>
                                                    </a>
                                                    <input type="button" value="Thêm giỏ hàng"
                                                           class="btn btn-default add-to-cart pest_btn"
                                                           data-id_product="{{$product->product_id}}" name="add-to-cart">
                                                </div>


                                             </a>
                                            
                                            </form>

                                        </div>

                                </div>
                            </div>
                        </div>
                        </a>
                        @endforeach
                    </div><!--features_items-->
                   <ul class="pagination pagination-sm m-t-none m-b-none">
                       {!!$category_by_id->links()!!}
                    </ul>

        <!--/recommended_items-->
@endsection
