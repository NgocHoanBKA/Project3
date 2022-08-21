<!DOCTYPE html>
<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- bootstrap-css -->

    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">

    <link href="{{asset('backend/css/admins.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('backend/css/font.css')}}" type="text/css"/>
    <link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/css/morris.css')}}" type="text/css"/>
    <!-- Theme style -->
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- calendar -->

    <link rel="stylesheet" href="{{asset('backend/css/monthly.css')}}">
    <link href="{{asset('backend/admin/css/bootstrap-select.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('backend/admin/css/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('backend/admin/css/select2.min.css')}}" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap.min.css">
@stack('styles')
<!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{asset('backend/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('backend/js/raphael-min.js')}}"></script>
    <script src="{{asset('backend/js/morris.js')}}"></script>
    <script src="{{asset('backend/js/morris.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    @stack('scripts')
</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a target="_blank" href="{{url('/')}}" class="logo">
                Shop
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->

        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder=" Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="{{('public/backend/images/2.png')}}">
                        <span class="username">
                	<?php
                            $name = Session::get('admin_name');
                            if ($name) {
                                echo $name;

                            }
                            ?>

                </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i>Đăng xuất</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a class="active" href="{{URL::to('/dashboard')}}">
                            <i class="fa fa-dashboard"></i>
                            <span>Tổng quan</span>
                        </a>
                    </li>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Đơn hàng</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{URL::to('/manage-order')}}">Quản lý đơn hàng</a></li>


                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Vận chuyển</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{URL::to('/delivery')}}">Quản lý vận chuyển</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Khuyến mãi</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{route('add_coupon')}}">Thêm khuyến mãi</a></li>
                            <li><a href="{{route('list_coupon')}}">Quản lý khuyến mãi</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Nhà cung cấp</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{URL::to('/add-supplier')}}">Nhập hàng hóa</a></li>
                            <li><a href="{{URL::to('/all-suppliers')}}">Liệt kê danh sách hàng hóa</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Quản lý kho</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{URL::to('/warehouse')}}">Thông tin kho</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Danh mục sản phẩm</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{URL::to('/add-category-product')}}">Thêm danh mục sản phẩm</a></li>
                            <li><a href="{{URL::to('/all-category-product')}}">Liệt kê danh mục sản phẩm</a></li>

                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Sản phẩm</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{URL::to('/add-product')}}">Thêm sản phẩm</a></li>
                            <li><a href="{{URL::to('/all-product')}}">Liệt kê sản phẩm</a></li>

                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Users</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{URL::to('/add-users')}}">Thêm user</a></li>
                            <li><a href="{{URL::to('/users')}}">Liệt kê user</a></li>

                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Customer</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{URL::to('/all_customers')}}">Liệt kê Customer</a></li>

                        </ul>
                    </li>

                </ul>
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            @yield('admin_content')
        </section>
    </section>
    <!--main content end-->
</section>
<script src="{{asset('backend/js/bootstrap.js')}}"></script>
<script src="{{asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('backend/js/jquery.form-validator.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('dashboard/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dashboard/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dashboard/dist/js/pages/dashboard3.js')}}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('dashboard/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dashboard/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dashboard/dist/js/pages/dashboard3.js')}}"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>


<script type="text/javascript">
    function huydonhang(id) {
        var order_code = id;
        var lydo = $('.lydohuydon').val();
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: '{{url('/huy_don_hang')}}',
            method: "POST",
            data: {
                order_code: order_code,
                lydo: lydo,
                _token: _token
            },
            success: function (data) {
                alert('Hủy đơn hàng thành công!');
                location.reload();
            }
        });
    }
</script>
<script type="text/javascript">

    function ChangeToSlug() {
        var slug;

        //Lấy text từ thẻ input title
        slug = document.getElementById("slug").value;
        slug = slug.toLowerCase();
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('convert_slug').value = slug;
    }


</script>
<script type="text/javascript">
    $('.update_quantity_order').click(function () {
        var order_product_id = $(this).data('product_id');
        var order_qty = $('.order_qty_' + order_product_id).val();
        var order_code = $('.order_code').val();
        var _token = $('input[name="_token"]').val();
        // alert(order_product_id);
        // alert(order_qty);
        // alert(order_code);
        $.ajax({
            url: '{{url('/update-qty')}}',

            method: 'POST',

            data: {_token: _token, order_product_id: order_product_id, order_qty: order_qty, order_code: order_code},
            // dataType:"JSON",
            success: function (data) {

                alert('Cập nhật số lượng thành công');

                location.reload();


            }
        });

    });
</script>
<script type="text/javascript">
    $('.order_details').change(function () {
        var order_status = $(this).val();
        var order_id = $(this).children(":selected").attr("id");
        var _token = $('input[name="_token"]').val();

        //lay ra so luong
        quantity = [];
        $("input[name='product_sales_quantity']").each(function () {
            quantity.push($(this).val());
        });
        //lay ra product id
        order_product_id = [];
        $("input[name='order_product_id']").each(function () {
            order_product_id.push($(this).val());
        });
        j = 0;
        for (i = 0; i < order_product_id.length; i++) {
            //so luong khach dat
            var order_qty = $('.order_qty_' + order_product_id[i]).val();
            //so luong ton kho
            var order_qty_storage = $('.order_qty_storage_' + order_product_id[i]).val();

            if (parseInt(order_qty) > parseInt(order_qty_storage)) {
                j = j + 1;
                if (j == 1) {
                    alert('Số lượng bán trong kho không đủ');
                }
                $('.color_qty_' + order_product_id[i]).css('background', '#000');
            }
        }
        if (j == 0) {

            $.ajax({
                url: '{{url('/update_order_qty')}}',
                method: 'POST',
                data: {
                    _token: _token,
                    order_status: order_status,
                    order_id: order_id,
                    quantity: quantity,
                    order_product_id: order_product_id
                },
                success: function (data) {
                    alert('Thay đổi tình trạng đơn hàng thành công');
                    location.reload();
                }
            });

        }

    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        var myfirstchart = new Morris.Bar({

            element: 'myfirstchart',

            fillOpacity: 0.6,
            parseTime: false,
            hideHover: 'auto',
            pointFillColors: ['#fffff'],
            pointStrokeColors: ['black'],
            // The name of the data record attribute that contains x-values.
            data: [0, 0],
            xkey: 'period',
            ykeys: ['order', 'sales', 'profit', 'quantity'],
            labels: ['Sản phẩm đã bán', 'Doanh số', 'Lợi nhuận', 'Số lượng']

        });
        $('#btn-dashboard-filter').click(function () {
            var _token = $('input[name="_token"]').val();
            var from_date = $('#datepicker').val();
            var to_date = $('#datepicker2').val();
            $.ajax({
                url: "{{url('/filter-by-date')}}",
                method: "POST",
                data: {
                    from_date: from_date,
                    to_date: to_date,
                    _token: _token
                },
                success: function (data) {
                    myfirstchart.setData(JSON.parse(data));
                }
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {

        //     });
        var donut = Morris.Donut({
            element: 'donut',
            resize: true,
            colors: [
                '#a8328e',
                '#61a1ce',
                '#f5b942',
                '#4842f5'

            ],
            //labelColor:"#cccccc", // text color
            //backgroundColor: '#333333', // border color
            data: [
                {label: "Sản phẩm", value:<?php echo $app_product ?>},
                {label: "Đơn hàng", value:<?php echo $app_order ?>},
                {label: "Khách hàng", value:<?php echo $app_customer ?>},
                {label: "Tài khoản", value:<?php echo $app_users ?>}
            ]
        });

    });
</script>

<script type="text/javascript">
    $(function () {
        $(function () {
            $("#priceban").datepicker({
                prevText: "Tháng trước",
                nextText: "Tháng sau",
                dateFormat: "yy/mm/dd",
                dayNamesMin: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
                duration: "slow"
            });
            $("#pricesp").datepicker({
                prevText: "Tháng trước",
                nextText: "Tháng sau",
                dateFormat: "yy/mm/dd",
                dayNamesMin: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
                duration: "slow"
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {

        fetch_delivery();

        function fetch_delivery() {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{url('/select-feeship')}}',
                method: 'POST',
                data: {_token: _token},
                success: function (data) {
                    $('#load_delivery').html(data);
                }
            });
        }

        $(document).on('blur', '.fee_feeship_edit', function () {

            var feeship_id = $(this).data('feeship_id');
            var fee_value = $(this).text();
            var _token = $('input[name="_token"]').val();
            // alert(feeship_id);
            // alert(fee_value);
            $.ajax({
                url: '{{url('/update-delivery')}}',
                method: 'POST',
                data: {feeship_id: feeship_id, fee_value: fee_value, _token: _token},
                success: function (data) {
                    fetch_delivery();
                }
            });

        });
        $('.add_delivery').click(function () {

            var city = $('.city').val();
            var province = $('.province').val();
            var wards = $('.wards').val();
            var fee_ship = $('.fee_ship').val();
            var _token = $('input[name="_token"]').val();
            // alert(city);
            // alert(province);
            // alert(wards);
            // alert(fee_ship);
            $.ajax({
                url: '{{url('/insert-delivery')}}',
                method: 'POST',
                data: {city: city, province: province, _token: _token, wards: wards, fee_ship: fee_ship},
                success: function (data) {
                    fetch_delivery();
                }
            });


        });
        $('.choose').on('change', function () {
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            // alert(action);
            //  alert(matp);
            //   alert(_token);

            if (action == 'city') {
                result = 'province';
            } else {
                result = 'wards';
            }
            $.ajax({
                url: '{{url('/select-delivery')}}',
                method: 'POST',
                data: {action: action, ma_id: ma_id, _token: _token},
                success: function (data) {
                    $('#' + result).html(data);
                }
            });
        });
    })


</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
<script type="text/javascript">
    $.validate({});
</script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.replace('ckeditor2');
    CKEDITOR.replace('ckeditor3');
    CKEDITOR.replace('id4');
</script>

<!--[if lte IE 8]>
<script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('backend/js/jquery.scrollTo.js')}}"></script>
<!-- morris JavaScript -->
<script>
    $(document).ready(function () {
        //BOX BUTTON SHOW AND CLOSE
        jQuery('.small-graph-box').hover(function () {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function () {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function () {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });

        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }

        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth: true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity: 0.85,
            data: [
                {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},

            ],
            lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });


    });
</script>
<!-- calendar -->
<script type="text/javascript" src="{{asset('backend/js/monthly.js')}}"></script>
<script type="text/javascript">
    $(window).load(function () {

        $('#mycalendar').monthly({
            mode: 'event',

        });

        $('#mycalendar2').monthly({
            mode: 'picker',
            target: '#mytarget',
            setWidth: '250px',
            startHidden: true,
            showTrigger: '#mytarget',
            stylePast: true,
            disablePast: true
        });

        switch (window.location.protocol) {
            case 'http:':
            case 'https:':
                // running on a server, should be good.
                break;
            case 'file:':
                alert('Just a heads-up, events will not work when run locally.');
        }

    });
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap.min.js"></script>
    <!-- //calendar -->
</body>
</html>
