<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="format-detection" content="telephone=no">
    <title>KAERUN</title>
    <!-- CSS -->
    <link href="{{asset('backend/admin/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('backend/admin/css/bootstrap-select.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('backend/admin/css/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('backend/admin/css/select2.min.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('backend/admin/css/styles.css')}}" type="text/css" rel="stylesheet" media="all">
    <!-- JS -->
    <script type="text/javascript" src="{{asset('backend/admin/js/jquery-1.9.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/admin/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/admin/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/admin/js/bootstrap-select.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/admin/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/admin/js/perfect-scrollbar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/admin/js/svg.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/admin/js/common.js')}}"></script>
    <script>
        $(function () {
        });
    </script>
</head>

<body>
<div class="wrapper">
    <div class="sideBar">
        <div class="sideBar-top">
            <div class="logo">
                <a href="#"><img src="{{asset('backend/admin/images/data/logo.svg')}}" alt=""></a>
            </div>
            <button class="btn btn-nav">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="gNav scrollbar">
            <ul>
                <li>
                    <a class="active" href="#">
                        <span class="gNav-item"><img class="svg"
                                                     src="{{asset('backend/admin/images/common/icon-nav.svg')}}" alt=""></span>
                        <span class="gNav-txt">?????????????????????</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="gNav-item"><img class="svg"
                                                     src="{{asset('backend/admin/images/common/icon-nav01.svg')}}"
                                                     alt=""></span>
                        <span class="gNav-txt">??????????????????</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="gNav-item"><img class="svg"
                                                     src="{{asset('backend/admin/images/common/icon-nav02.svg')}}"
                                                     alt=""></span>
                        <span class="gNav-txt">??????????????????</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="gNav-item"><img class="svg"
                                                     src="{{asset('backend/admin/images/common/icon-nav03.svg')}}"
                                                     alt=""></span>
                        <span class="gNav-txt">????????????</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="gNav-item"><img class="svg"
                                                     src="{{asset('backend/admin/images/common/icon-nav04.svg')}}"
                                                     alt=""></span>
                        <span class="gNav-txt">????????????</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="gNav-item"><img class="svg"
                                                     src="{{asset('backend/admin/images/common/icon-nav05.svg')}}"
                                                     alt=""></span>
                        <span class="gNav-txt">????????????</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="gNav-item"><img class="svg"
                                                     src="{{asset('backend/admin/images/common/icon-nav06.svg')}}"
                                                     alt=""></span>
                        <span class="gNav-txt">???????????????</span>
                    </a>
                    <div class="gNav-sub">
                        <ul>
                            <li><a href="#">- ????????????</a></li>
                            <li><a href="#">- ????????????</a></li>
                            <li><a href="#">- ?????????????????????</a></li>
                        </ul>
                    </div>
                </li>
                <li class="gNav-bod">
                    <a href="#">
                        <span class="gNav-item"><img class="svg"
                                                     src="{{asset('backend/admin/images/common/icon-nav07.svg')}}"
                                                     alt=""></span>
                        <span class="gNav-txt">??????????????????</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="gNav-item"><img class="svg"
                                                     src="{{asset('backend/admin/images/common/icon-nav08.svg')}}"
                                                     alt=""></span>
                        <span class="gNav-txt">?????????????????????</span>
                    </a>
                </li>
            </ul>
        </div>
    </div><!--/.sideBar-->
    <div class="content">
        <div class="headeTop">
            <div class="headeTop-info">
                <div class="headeTop-title">
                    <h1 class="title"><span class="title-item"><img class="svg"
                                                                    src="{{asset('backend/admin/images/common/icon-nav.svg')}}"></span>?????????????????????
                    </h1>
                </div>
            </div>
            <div class="headeTop-user">
                <div class="headeTop-flex" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="headeTop-avatar">
                        <img src="images/data/thumb-user.png" alt="">
                    </div>
                    <span class="headeTop-name">?????? ??????</span>
                </div>
                <div class="dropdown-menu dropdown-menu-right">
                    <ul>
                        <li>
                            <a href="#"><span class="item"><img
                                        src="{{asset('backend/admin/images/common/icon-logOut.svg')}}" alt=""></span>???????????????</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--/.headeTop-->
        <div class="contentWrap scrollbar contentWrap--top">
            <div class="boxMain">
                <div class="groupTop scrollbar">
                    <div class="invoiceTop">
                        <ul>
                            <li>
                                <div class="invoiceSta">
                                    <p class="invoiceSta-title">?????????????????????</p>
                                    <p class="invoiceSta-text"><span class="numberLarge f-roboto">101</span>?????????????????????<span
                                            class="numberSmall f-roboto">10</span>???</p>
                                </div>
                                <div class="toList">
                                    <a href="#">?????????</a>
                                </div>
                            </li>
                            <li>
                                <div class="invoiceSta">
                                    <p class="invoiceSta-title">?????????????????????</p>
                                    <p class="invoiceSta-text"><span class="numberLarge f-roboto">60</span>?????????????????????<span
                                            class="numberSmall f-roboto">10</span>???</p>
                                </div>
                                <div class="toList">
                                    <a href="#">?????????</a>
                                </div>
                            </li>
                            <li>
                                <div class="invoiceSta">
                                    <p class="invoiceSta-title">????????????????????????(??????)</p>
                                    <p class="invoiceSta-text"><span class="numberLarge f-roboto">??1,368,000</span></p>
                                </div>
                                <div class="toList">
                                    <a href="#">?????????</a>
                                </div>
                            </li>
                            <li>
                                <div class="invoiceSta">
                                    <p class="invoiceSta-title">?????????????????????</p>
                                    <p class="invoiceSta-text"><span class="numberLarge f-roboto">60</span></p>
                                </div>
                                <div class="toList">
                                    <a href="#">?????????</a>
                                </div>
                            </li>
                        </ul>
                    </div><!--/.invoiceTop -->
                    <div class="chartTop">
                        <div class="chartSelect">
                            <select class="form-select selectpicker f-roboto" data-live-search="true"
                                    data-live-search-style="begins" title="">
                                <option>2021</option>
                                <option>2020</option>
                                <option>2019</option>
                                <option>2018</option>
                                <option>2017</option>
                            </select>
                            <!--<select class="form-control f-roboto">
                              <option>2021</option>
                              <option>2020</option>
                              <option>2019</option>
                              <option>2018</option>
                              <option>2017</option>
                            </select>-->
                        </div>
                        <div class="chartContent">
                            <img src="{{asset('backend/admin/images/data/img-chart.svg')}}" alt="">
                        </div>
                    </div><!--/.chartTop -->
                    <div class="boxList">
                        <div class="headList">
                            <div class="headList-title">
                                <h2 class="headList-tlt">????????????????????????</h2>
                                <span class="headList-note">??????????????????????????????7???????????????????????????</span>
                            </div>
                        </div><!--/.headList -->
                        <div class="tablefixedhead scrollbar tblDocument">
                            <table>
                                <thead>
                                <tr>
                                    <th>???????????????</th>
                                    <th>?????????</th>
                                    <th>?????????</th>
                                    <th>??????(??????)</th>
                                    <th>????????????</th>
                                    <th>????????????</th>
                                    <th>????????????</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                    	<span class="labelSpan b-radius12 labelSpan-box02">
                        <span class="labelSpan-item"><img
                                src="{{asset('backend/admin/images/common/icon-labelSpan01.svg')}}" alt=""></span>
                        <span class="labelSpan-text">?????????</span>
                      </span>
                                    </td>
                                    <td>?????????Web???????????????</td>
                                    <td>????????????XYZ</td>
                                    <td class="f-roboto">??220,000</td>
                                    <td><span class="spanControl spanBox">??????</span></td>
                                    <td>-</td>
                                    <td class="f-roboto">2021-11-10 16:00</td>
                                </tr>
                                <tr>
                                    <td>
                    	<span class="labelSpan b-radius12 labelSpan-box02">
                        <span class="labelSpan-item"><img
                                src="{{asset('backend/admin/images/common/icon-labelSpan01.svg')}}" alt=""></span>
                        <span class="labelSpan-text">?????????</span>
                      </span>
                                    </td>
                                    <td>?????????Web???????????????</td>
                                    <td>????????????XYZ</td>
                                    <td class="f-roboto">??220,000</td>
                                    <td><span class="spanControl spanBox">??????</span></td>
                                    <td>-</td>
                                    <td class="f-roboto">2021-11-10 16:00</td>
                                </tr>
                                <tr>
                                    <td>
                    	<span class="labelSpan b-radius12 labelSpan-box02">
                        <span class="labelSpan-item"><img
                                src="{{asset('backend/admin/images/common/icon-labelSpan01.svg')}}" alt=""></span>
                        <span class="labelSpan-text">?????????</span>
                      </span>
                                    </td>
                                    <td>?????????Web???????????????</td>
                                    <td>????????????XYZ</td>
                                    <td class="f-roboto">??220,000</td>
                                    <td><span class="spanControl spanBox">??????</span></td>
                                    <td>-</td>
                                    <td class="f-roboto">2021-11-10 16:00</td>
                                </tr>
                                <tr>
                                    <td>
                    	<span class="labelSpan b-radius12 labelSpan-box02">
                        <span class="labelSpan-item"><img
                                src="{{asset('backend/admin/images/common/icon-labelSpan01.svg')}}" alt=""></span>
                        <span class="labelSpan-text">?????????</span>
                      </span>
                                    </td>
                                    <td>?????????Web???????????????</td>
                                    <td>????????????XYZ</td>
                                    <td class="f-roboto">??220,000</td>
                                    <td><span class="spanControl spanBox">??????</span></td>
                                    <td>-</td>
                                    <td class="f-roboto">2021-11-10 16:00</td>
                                </tr>
                                <tr>
                                    <td>
                    	<span class="labelSpan b-radius12 labelSpan-box02">
                        <span class="labelSpan-item"><img
                                src="{{asset('backend/admin/images/common/icon-labelSpan01.svg')}}" alt=""></span>
                        <span class="labelSpan-text">?????????</span>
                      </span>
                                    </td>
                                    <td>?????????Web???????????????</td>
                                    <td>????????????XYZ</td>
                                    <td class="f-roboto">??220,000</td>
                                    <td><span class="spanControl spanBox">??????</span></td>
                                    <td>-</td>
                                    <td class="f-roboto">2021-11-10 16:00</td>
                                </tr>
                                <tr>
                                    <td>
                    	<span class="labelSpan b-radius12 labelSpan-box02">
                        <span class="labelSpan-item"><img
                                src="{{asset('backend/admin/images/common/icon-labelSpan01.svg')}}" alt=""></span>
                        <span class="labelSpan-text">?????????</span>
                      </span>
                                    </td>
                                    <td>?????????Web???????????????</td>
                                    <td>????????????XYZ</td>
                                    <td class="f-roboto">??220,000</td>
                                    <td><span class="spanControl spanBox">??????</span></td>
                                    <td>-</td>
                                    <td class="f-roboto">2021-11-10 16:00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!--/.tablefixedhead -->
                        <div class="paging">
                            <div class="paging-number">
                                ?????????<span class="number f-roboto">48</span>
                            </div>
                            <div class="pagination">
                                <ul>
                                    <li class="disabled previous"><a href="#"><img class="svg"
                                                                                   src="{{asset('backend/admin/images/common/icon-arrow-pagin.svg')}}"
                                                                                   alt=""></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="next"><a href="#"><img class="svg"
                                                                      src="{{asset('backend/admin/images/common/icon-arrow-pagin.svg')}}"
                                                                      alt=""></a></li>
                                </ul>
                            </div>
                        </div><!--/.paging -->
                    </div><!--/.boxList -->
                    <div class="boxList">
                        <div class="headList">
                            <div class="headList-title">
                                <h2 class="headList-tlt">????????????????????????</h2>
                                <span class="headList-note">??????????????????????????????7???????????????????????????</span>
                            </div>
                        </div><!--/.headList -->
                        <div class="tablefixedhead scrollbar tblList">
                            <table>
                                <thead>
                                <tr>
                                    <th>???????????????</th>
                                    <th>?????????</th>
                                    <th>?????????</th>
                                    <th>????????????</th>
                                    <th>??????(??????)</th>
                                    <th>?????????</th>
                                    <th>????????????</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="labelStatus">
                                            <ul>
                                                <li class="labelStatus-item labelStatus-gray">
                                                    <span class="labelStatus-number f-roboto">5</span>
                                                    <span class="labelStatus-text">?????????</span>
                                                </li>
                                                <li class="labelStatus-type labelStatus-blue">??????????????????</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>????????????ABC</td>
                                    <td>?????????Web???????????????</td>
                                    <td>XYZ????????????</td>
                                    <td class="f-roboto">??220,000</td>
                                    <td>
                                        <a class="item" href="#"><img
                                                src="{{asset('backend/admin/images/common/icon-quotation-check.svg')}}"
                                                alt=""></a>
                                    </td>
                                    <td class="f-roboto">2021-11-10 16:00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="labelStatus">
                                            <ul>
                                                <li class="labelStatus-item labelStatus-gray">
                                                    <span class="labelStatus-number f-roboto">5</span>
                                                    <span class="labelStatus-text">?????????</span>
                                                </li>
                                                <li class="labelStatus-type labelStatus-blue">??????????????????</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>????????????ABC</td>
                                    <td>?????????Web???????????????</td>
                                    <td>XYZ????????????</td>
                                    <td class="f-roboto">??220,000</td>
                                    <td>
                                        <a class="item" href="#"><img
                                                src="{{asset('backend/admin/images/common/icon-quotation-check.svg')}}"
                                                alt=""></a>
                                    </td>
                                    <td class="f-roboto">2021-11-10 16:00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="labelStatus">
                                            <ul>
                                                <li class="labelStatus-item labelStatus-gray">
                                                    <span class="labelStatus-number f-roboto">5</span>
                                                    <span class="labelStatus-text">?????????</span>
                                                </li>
                                                <li class="labelStatus-type labelStatus-blue">??????????????????</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>????????????ABC</td>
                                    <td>?????????Web???????????????</td>
                                    <td>XYZ????????????</td>
                                    <td class="f-roboto">??220,000</td>
                                    <td>
                                        <a class="item" href="#"><img
                                                src="{{asset('backend/admin/images/common/icon-quotation-check.svg')}}"
                                                alt=""></a>
                                    </td>
                                    <td class="f-roboto">2021-11-10 16:00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="labelStatus">
                                            <ul>
                                                <li class="labelStatus-item labelStatus-gray">
                                                    <span class="labelStatus-number f-roboto">5</span>
                                                    <span class="labelStatus-text">?????????</span>
                                                </li>
                                                <li class="labelStatus-type labelStatus-blue">??????????????????</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>????????????ABC</td>
                                    <td>?????????Web???????????????</td>
                                    <td>XYZ????????????</td>
                                    <td class="f-roboto">??220,000</td>
                                    <td>
                                        <a class="item" href="#"><img
                                                src="{{asset('backend/admin/images/common/icon-quotation-check.svg')}}"
                                                alt=""></a>
                                    </td>
                                    <td class="f-roboto">2021-11-10 16:00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="labelStatus">
                                            <ul>
                                                <li class="labelStatus-item labelStatus-gray">
                                                    <span class="labelStatus-number f-roboto">5</span>
                                                    <span class="labelStatus-text">?????????</span>
                                                </li>
                                                <li class="labelStatus-type labelStatus-blue">??????????????????</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>????????????ABC</td>
                                    <td>?????????Web???????????????</td>
                                    <td>XYZ????????????</td>
                                    <td class="f-roboto">??220,000</td>
                                    <td>
                                        <a class="item" href="#"><img
                                                src="{{asset('backend/admin/images/common/icon-quotation-check.svg')}}"
                                                alt=""></a>
                                    </td>
                                    <td class="f-roboto">2021-11-10 16:00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="labelStatus">
                                            <ul>
                                                <li class="labelStatus-item labelStatus-gray">
                                                    <span class="labelStatus-number f-roboto">5</span>
                                                    <span class="labelStatus-text">?????????</span>
                                                </li>
                                                <li class="labelStatus-type labelStatus-blue">??????????????????</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>????????????ABC</td>
                                    <td>?????????Web???????????????</td>
                                    <td>XYZ????????????</td>
                                    <td class="f-roboto">??220,000</td>
                                    <td>
                                        <a class="item" href="#"><img
                                                src="{{asset('backend/admin/images/common/icon-quotation-check.svg')}}"
                                                alt=""></a>
                                    </td>
                                    <td class="f-roboto">2021-11-10 16:00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!--/.tablefixedhead -->
                        <div class="paging">
                            <div class="paging-number">
                                ?????????<span class="number f-roboto">48</span>
                            </div>
                            <div class="pagination">
                                <ul>
                                    <li class="disabled previous"><a href="#"><img class="svg"
                                                                                   src="{{asset('backend/admin/images/common/icon-arrow-pagin.svg')}}"
                                                                                   alt=""></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="next"><a href="#"><img class="svg"
                                                                      src="{{asset('backend/admin/images/common/icon-arrow-pagin.svg')}}"
                                                                      alt=""></a></li>
                                </ul>
                            </div>
                        </div><!--/.paging -->
                    </div><!--/.boxList -->
                    <div class="boxList">
                        <div class="headList">
                            <div class="headList-title">
                                <h2 class="headList-tlt">??????????????????</h2>
                            </div>
                            <div class="headList-tabs">
                                <ul class="nav">
                                    <li>
                                        <a class="active" href="#tabsAll" role="tab" data-toggle="tab">?????????</a>
                                    </li>
                                    <li>
                                        <a href="#tabsBefore" role="tab" data-toggle="tab">?????????</a>
                                    </li>
                                    <li>
                                        <a href="#tabsAfter" role="tab" data-toggle="tab">?????????</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!--/.headList -->
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tabsAll">
                                <div class="tablefixedhead scrollbar tblList">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>???????????????</th>
                                            <th>?????????</th>
                                            <th>?????????</th>
                                            <th>????????????</th>
                                            <th>??????(??????)</th>
                                            <th>?????????</th>
                                            <th>????????????</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="labelStatus">
                                                    <ul>
                                                        <li class="labelStatus-item labelStatus-gray">
                                                            <span class="labelStatus-number f-roboto">4</span>
                                                            <span class="labelStatus-text">?????????</span>
                                                        </li>
                                                        <li class="labelStatus-type labelStatus-blue01">??????????????????</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>????????????ABC</td>
                                            <td>?????????Web???????????????</td>
                                            <td>XYZ????????????</td>
                                            <td class="f-roboto">??220,000</td>
                                            <td>
                                                <a class="item" href="#"><img
                                                        src="{{asset('backend/admin/images/common/icon-quotation-check.svg')}}"
                                                        alt=""></a>
                                            </td>
                                            <td class="f-roboto">2021-11-10 16:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="labelStatus">
                                                    <ul>
                                                        <li class="labelStatus-item labelStatus-green">
                                                            <span class="labelStatus-number f-roboto">14</span>
                                                            <span class="labelStatus-text">?????????</span>
                                                        </li>
                                                        <li class="labelStatus-type labelStatus-blue">??????????????????</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>????????????ABC</td>
                                            <td>?????????Web???????????????</td>
                                            <td>XYZ????????????</td>
                                            <td class="f-roboto">??220,000</td>
                                            <td>
                                                <a class="item" href="#"><img
                                                        src="{{asset('backend/admin/images/common/icon-quotation-check.svg')}}"
                                                        alt=""></a>
                                            </td>
                                            <td class="f-roboto">2021-11-10 16:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="labelStatus">
                                                    <ul>
                                                        <li class="labelStatus-item labelStatus-gray">
                                                            <span class="labelStatus-number f-roboto">4</span>
                                                            <span class="labelStatus-text">?????????</span>
                                                        </li>
                                                        <li class="labelStatus-type labelStatus-blue01">??????????????????</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>????????????ABC</td>
                                            <td>?????????Web???????????????</td>
                                            <td>XYZ????????????</td>
                                            <td class="f-roboto">??220,000</td>
                                            <td>
                                                <a class="item" href="#"><img
                                                        src="{{asset('backend/admin/images/common/icon-quotation-check.svg')}}"
                                                        alt=""></a>
                                            </td>
                                            <td class="f-roboto">2021-11-10 16:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="labelStatus">
                                                    <ul>
                                                        <li class="labelStatus-item labelStatus-green">
                                                            <span class="labelStatus-number f-roboto">14</span>
                                                            <span class="labelStatus-text">?????????</span>
                                                        </li>
                                                        <li class="labelStatus-type labelStatus-blue">??????????????????</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>????????????ABC</td>
                                            <td>?????????Web???????????????</td>
                                            <td>XYZ????????????</td>
                                            <td class="f-roboto">??220,000</td>
                                            <td>
                                                <a class="item" href="#"><img
                                                        src="{{asset('backend/admin/images/common/icon-quotation-check.svg')}}"
                                                        alt=""></a>
                                            </td>
                                            <td class="f-roboto">2021-11-10 16:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="labelStatus">
                                                    <ul>
                                                        <li class="labelStatus-item labelStatus-gray">
                                                            <span class="labelStatus-number f-roboto">4</span>
                                                            <span class="labelStatus-text">?????????</span>
                                                        </li>
                                                        <li class="labelStatus-type labelStatus-blue01">??????????????????</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>????????????ABC</td>
                                            <td>?????????Web???????????????</td>
                                            <td>XYZ????????????</td>
                                            <td class="f-roboto">??220,000</td>
                                            <td>
                                                <a class="item" href="#"><img
                                                        src="{{asset('backend/admin/images/common/icon-quotation-check.svg')}}"
                                                        alt=""></a>
                                            </td>
                                            <td class="f-roboto">2021-11-10 16:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="labelStatus">
                                                    <ul>
                                                        <li class="labelStatus-item labelStatus-green">
                                                            <span class="labelStatus-number f-roboto">14</span>
                                                            <span class="labelStatus-text">?????????</span>
                                                        </li>
                                                        <li class="labelStatus-type labelStatus-blue">??????????????????</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>????????????ABC</td>
                                            <td>?????????Web???????????????</td>
                                            <td>XYZ????????????</td>
                                            <td class="f-roboto">??220,000</td>
                                            <td>
                                                <a class="item" href="#"><img
                                                        src="{{asset('backend/admin/images/common/icon-quotation-check.svg')}}"
                                                        alt=""></a>
                                            </td>
                                            <td class="f-roboto">2021-11-10 16:00</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div><!--/.tablefixedhead -->
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tabsBefore">bbb</div>
                            <div role="tabpanel" class="tab-pane" id="tabsAfter">ccc</div>
                        </div><!--/.tab-content -->

                        <div class="paging">
                            <div class="paging-number">
                                ?????????<span class="number f-roboto">48</span>
                            </div>
                            <div class="pagination">
                                <ul>
                                    <li class="disabled previous"><a href="#"><img class="svg"
                                                                                   src="images/common/icon-arrow-pagin.svg"
                                                                                   alt=""></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="next"><a href="#"><img class="svg"
                                                                      src="images/common/icon-arrow-pagin.svg"
                                                                      alt=""></a></li>
                                </ul>
                            </div>
                        </div><!--/.paging -->
                    </div><!--/.boxList -->
                </div>
            </div>
        </div><!--/.contentWrap-->
    </div><!--/.content-->
</div>
</body>
</html>
