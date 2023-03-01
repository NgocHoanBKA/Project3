@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info" style="padding: 25px;">
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control w-sm inline v-middle">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                    </select>
                    <button class="btn btn-sm btn-default">Apply</button>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive" style="padding: 25px;">
                <?php
                use Illuminate\Support\Facades\Session;
                $message = Session::get('message');
                if ($message) {
                    echo '<div id="error" class="alert alert-success" role="alert">' . $message . '</div>';
                    Session::put('message', null);
                }
                ?>
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Tên sản phẩm</th>
                        <th>Nguyên liệu</th>
                        <th>Số lượng</th>
                        <th>Đơn vị</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($suppliers as $key => $supplier)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                            </td>
                            <td>{{ $supplier->product_name }}</td>
                            @if($supplier->material_name == 0)
                                <td>Bột mỳ</td>
                            @elseif($supplier->material_name == 1)
                                <td>Bột tạo màu</td>
                            @elseif($supplier->material_name == 2)
                                <td>Bơ</td>
                            @elseif($supplier->material_name == 3)
                                <td>Đường</td>
                            @elseif($supplier->material_name == 4)
                                <td>Sữa</td>
                            @elseif($supplier->material_name == 5)
                                <td>Vani</td>
                            @else
                                <td>Tạo dẻo</td>
                            @endif
                            <td>{{ $supplier->quantity }}</td>
                            @if($supplier->quantity == 0)
                                <td>Chai</td>
                            @elseif($supplier->quantity == 1)
                                <td>KG</td>
                            @elseif($supplier->quantity == 2)
                                <td>Lít</td>
                            @else
                                <td>Cân</td>
                            @endif
                            <td>
                                <a href="{{URL::to('/edit-supplier/'.$supplier->id_supplier)}}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này ko?')" href="{{URL::to('/delete-supplier/'.$supplier->id_supplier)}}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
