@extends('admin_layout')
@section('admin_content')
    <div class="row" style="padding: 25px;">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                </header>
                <?php
                use Illuminate\Support\Facades\Session;
                $message = Session::get('message');
                if ($message) {

                    echo '<div id="error" class="alert alert-success" role="alert">' . $message . '</div>';
                    Session::put('message', null);
                }
                ?>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-suppliers')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mã sản phẩm</label>
                                <select name="product_id" class="form-control input-sm m-bot15">
                                   @foreach($products as $key => $product)
                                    <option value="{{$product->product_id}}">{{$product->product_code}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nguyên liệu</label>
                                <select name="material_name" class="form-control input-sm m-bot15">
                                    <option value="0">Bột mỳ</option>
                                    <option value="1">Bột tạo màu</option>
                                    <option value="2">Bơ</option>
                                    <option value="3">Đường</option>
                                    <option value="4">Sữa</option>
                                    <option value="5">Vani</option>
                                    <option value="6">Tạo dẻo</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Số lượng</label>
                                <input class="form-control" type="number" name="quantity"
                                       id="exampleInputPassword1"></input>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Đơn vị</label>
                                <select name="unit" class="form-control input-sm m-bot15">
                                    <option value="0">Chai</option>
                                    <option value="1">KG</option>
                                    <option value="2">Lít</option>
                                    <option value="2">Cân</option>
                                </select>
                            </div>
                            <button type="submit" name="add_supplier" class="btn btn-info">Thêm nguyên liệu</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
@endsection
