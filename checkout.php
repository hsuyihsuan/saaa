<?php
require_once('connection.php');
$c = $_COOKIE;
$p = $_POST;
$buy_list = [];
if (isset($p['location1']) && isset($p['location2']) && isset($p['location3'])) {
    $buy_list[] = json_decode(json_encode([
        "location1" => $p['location1'],
        "location2" => $p['location2'],
        "location3" => $p['location3'],
        "price" => $p['price'],
        "item" => $p['item']
    ]));
}
if (isset($c["buy_list"])) {
    foreach(json_decode($c["buy_list"]) as $item) {
        $buy_list[] = $item;
    }
}

$total = 0;
setcookie("buy_list", json_encode($buy_list, JSON_UNESCAPED_UNICODE));
foreach ($buy_list as $product) {
    $total += $product->price * $product->item;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <link rel="icon" type="image/png" href="img/fav.png">
    <title>方禾食呂</title>
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css" />
    <!-- Feather Icon-->
    <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Sidebar CSS -->
    <link href="vendor/sidebar/demo.css" rel="stylesheet">

    <!-- <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.checkout.css'> -->
    <!-- <script src="../js/jquery-1.12.4.js"></script> -->

</head>

<body class="fixed-bottom-bar">
    <header class="section-header">
        <section class="header-main shadow-sm bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-1">
                        <a href="index.php" class="brand-wrap mb-0">
                            <img alt="#" class="img-fluid" src="img/logo_web.png">
                        </a>
                        <!-- brand-wrap.// -->
                    </div>
                    <div style="left:280px;position:relative;" class="col-8">
                        <div class="d-flex align-items-center justify-content-end pr-5">
                            <!-- signin -->
                            <?php
                            if (!isset($_SESSION['id'])) {
                            ?>
                                <a href="login.php" class="widget-header mr-4 text-dark m-none">
                                <div class="icon d-flex align-items-center">
                                    <i class="feather-user h6 mr-2 mb-0"></i> <span>登入</span>
                                </div>
                                </a>
                            <?php
                            } 
                            ?>
                            <!-- my account -->
                            <div class="dropdown mr-4 m-none">
                                <a href="#" class="dropdown-toggle text-dark py-3 d-block" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_SESSION['name']; ?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="profile.php">會員資料</a>
                                    <a class="dropdown-item" href="login.php">登出</a>
                                </div>
                            </div>
                            <!-- signin -->
                            <a href="checkout.php" class="widget-header mr-4 text-dark">
                                <div class="icon d-flex align-items-center">
                                    <i class="feather-shopping-cart h6 mr-2 mb-0"></i> <span>購物車</span>
                                </div>
                            </a>
                            <a class="toggle" href="#">
                                <span></span>
                            </a>
                        </div>
                        <!-- widgets-wrap.// -->
                    </div>
                    <!-- col.// -->
                </div>
                <!-- row.// -->
            </div>
            <!-- container.// -->
        </section>
        <!-- header-main .// -->
    </header>
    <div class="osahan-checkout">
        <div class="d-none">
            <div class="bg-primary border-bottom p-3 d-flex align-items-center">
                <a class="toggle togglew toggle-2" href="#"><span></span></a>
                <h4 class="font-weight-bold m-0 text-white">Checkout</h4>
            </div>
        </div>
        <!-- checkout -->
        <div class="container position-relative">
        <form method="post" action="successful.php" >
            <div class="py-5 row">
                <div class="col-md-8 mb-3">
                    <div>
                        <div class="osahan-cart-item mb-3 rounded shadow-sm bg-white overflow-hidden">
                            <div class="osahan-cart-item-profile bg-white p-3">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-3 font-weight-bold">用餐方式</h6>
                                    <div class="row">
                                        <div class="custom-control col-lg-6 custom-radio mb-3 position-relative border-custom-radio">
                                            <input type="radio" id="customRadioInline1" name="takeout" class="custom-control-input"  value="內用" checked>
                                            <label class="custom-control-label w-100" for="customRadioInline1">
                                       <div>
                                          <div class="p-3 bg-white rounded shadow-sm w-100">
                                             <div class="d-flex align-items-center mb-2">
                                                <h6 class="mb-0">內用</h6>

                                             </div>

                                          </div>

                                       </div>
                                    </label>
                                        </div>
                                        <div class="custom-control col-lg-6 custom-radio position-relative border-custom-radio">
                                            <input type="radio" id="customRadioInline2" name="takeout" value="外帶" class="custom-control-input">
                                            <label class="custom-control-label w-100" for="customRadioInline2">
                                       <div>
                                          <div class="p-3 rounded bg-white shadow-sm w-100">
                                             <div class="d-flex align-items-center mb-2">
                                                <h6 class="mb-0">外帶</h6>

                                             </div>

                                          </div>

                                       </div>
                                    </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion mb-3 rounded shadow-sm bg-white overflow-hidden" id="accordionExample">
                            <div class="osahan-card bg-white border-bottom overflow-hidden">
                                <div class="osahan-card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <i class="feather-credit-card mr-3"></i> 信用卡/金融卡
                                 <i class="feather-chevron-down ml-auto"></i>
                                 </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="osahan-card-body border-top p-3">
                                        <h6 class="m-0">新增卡片</h6>
                                        <p class="small">我們接受 <span class="osahan-card ml-2 font-weight-bold">( Master / Visa Card )</span></p>
                                            <div class="form-row">
                                                <div class="col-md-12 form-group">
                                                    <label class="form-label font-weight-bold small">卡號</label>
                                                    <div class="input-group">
                                                        <input placeholder="" type="text" class="form-control" name="payment-card">
                                                        <div class="input-group-append"><button type="button" class="btn btn-outline-secondary"><i class="feather-credit-card"></i></button></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 form-group"><label class="form-label font-weight-bold small">到期日</label><input placeholder="(MM/YY)" type="text" class="form-control"></div>
                                                <div class="col-md-4 form-group"><label class="form-label font-weight-bold small">安全碼</label><input placeholder="CVV" type="text" class="form-control"></div>
                                                <div class="col-md-12 form-group"><label class="form-label font-weight-bold small">持卡人</label><input placeholder="" type="text" class="form-control"></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="osahan-card bg-white border-bottom overflow-hidden">
                                <div class="osahan-card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <i class="feather-globe mr-3"></i> 行動支付
                                 <i class="feather-chevron-down ml-auto"></i>
                                 </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="osahan-card-body border-top p-3">
                                            <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                                <label class="btn btn-outline-secondary active">
                                       <input type="radio" name="payment-pay" id="payment-jko" value="jko" class="form-control"> 街口支付
                                       </label>
                                                <label class="btn btn-outline-secondary">
                                       <input type="radio" name="payment-pay" id="payment-line" value="line_pay" class="form-control"> Line Pay
                                       </label>
                                                <label class="btn btn-outline-secondary">
                                       <input type="radio" name="payment-pay" id="payment-apple" value="apple_pay" class="form-control"> Apple Pay
                                       </label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-md-12 form-group mb-0">
                                                    <label class="form-label small font-weight-bold">選擇銀行</label><br>
                                                    <select class="custom-select form-control">
                                             <option>玉山</option>
                                             <option>國泰</option>
                                             <option>台新</option>
                                          </select>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="osahan-card bg-white overflow-hidden">
                                <div class="osahan-card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 <i class="feather-dollar-sign mr-3"></i> 現金付款
                                 <i class="feather-chevron-down ml-auto"></i>
                                 </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body border-top">
                                        <h6 class="mb-3 mt-0 mb-3 font-weight-bold">請至櫃檯結帳</h6>
                                        <input type="hidden" class="form-control" name="payment-cash">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
                        <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
                            <!-- <img alt="osahan" src="img/starter1.jpg" class="mr-3 rounded-circle img-fluid"> -->
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 font-weight-bold">方禾食呂</h6>
                                <p class="mb-0 small text-muted"><i class="feather-map-pin"></i> 新北市新莊區中正路514巷53弄39號</p>
                            </div>
                        </div>
                        <div class="bg-white border-bottom py-2">
                            <?php
                                foreach($buy_list as $index => $blabla) {
                            ?>
                            <div class="gold-members d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
                                <div class="media align-items-center">
                                    <div class="mr-2 text-danger">&middot;</div>
                                    <div class="media-body">
                                        <h5>
                                        <?= $blabla->location1; ?> <br />
                                        </h5>
                                        <p class="m-0">
                                        <?= $blabla->location2; ?> <br />
                                        <?= $blabla->location3; ?> <br />
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <!-- <input type='button' value='-' class='qtyminus' field='item' /> -->
                                    <input type='number' min="1" id="item-qty" class="w-100 form-control" name='item' value=<?= $blabla->item ?> class='qty' /><br />
                                    <!-- <input type='button' value='+' class='qtyplus' field='item' /> -->
                                    <p class="text-gray mb-0 float-right ml-2 text-muted small"></p>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="bg-white p-3 py-3 border-bottom clearfix">
                            <div class="mb-0 input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="feather-message-square"></i></span></div>
                                <textarea name="remark" placeholder="備註" aria-label="With textarea" class="form-control"></textarea>
                            </div>
                        </div>
                        
                        <div class="bg-white p-3 clearfix border-bottom">
                            <div class="p-3 row justify-content-around">
                                <button type="submit" name="clear" class="btn btn-primary btn-lg col-5">清除購物車</button>
                                <button type="submit" class="btn btn-success btn-lg col-5">
                                    <span>結帳</span>
                                    <span id="total-text"><?php echo $total; ?></span>
                                    <span>元</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
     <!-- footer -->
     <footer class="section-footer border-top bg-dark">
        <div class="container">
            <section class="footer-top padding-y py-5">
                <div class="row">
                    <aside class="col-md-4 footer-about">
                        <article class="d-flex pb-3">
                            <div><img alt="#" src="img/logo_web.png" class="logo-footer mr-3"></div>
                            <div>
                                <h6 class="title text-white">方禾食呂</h6>
                                <p class="text-muted">02-29081397<br>
                                    新北市新莊區中正路514巷53弄39號</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Facebook" target="_blank" href="https://www.facebook.com/storyboxtw/about"><i class="feather-facebook"></i></a>
                                    <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Instagram" target="_blank" href="https://www.instagram.com/storyboxtw/"><i class="feather-instagram"></i></a>
                                </div>
                            </div>
                        </article>
                </div>
                <!-- row.// -->
            <!-- footer-top.// -->
        </div>
        <!-- //container -->
        <section class="footer-copyright border-top py-3 bg-light">
            <div class="container d-flex align-items-center">
                <p class="mb-0">SA11 © 2022 版權所有 </p>
            </div>
        </section>
    </footer>
    <nav id="main-nav">
        <ul class="second-nav">
            <li><a href="my_order.php"><i class="feather-list mr-2"></i>查看訂單</a></li>
            <li><a href="point.php"><i class="feather-heart mr-2"></i>我的集點卡</a></li>
        </ul>
        <ul class="bottom-nav">
            <li class="email">
                <a class="text-danger" href="index.php">
                    <p class="h5 m-0"><i class="feather-home text-danger"></i></p>
                    主頁
                </a>
            </li>
            <li class="github">
                <a href="faq.php">
                    <p class="h5 m-0"><i class="feather-message-circle"></i></p>
                    常見問題
                </a>
            </li>
            <li class="ko-fi">
                <a href="contact-us.php">
                    <p class="h5 m-0"><i class="feather-phone"></i></p>
                    聯絡我們
                </a>
            </li>
        </ul>
    </nav>
    <!-- modal delivery address -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Delivery Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label class="form-label">Delivery Area</label>
                                <div class="input-group">
                                    <input placeholder="Delivery Area" type="text" class="form-control">
                                    <div class="input-group-append"><button type="button" class="btn btn-outline-secondary"><i class="feather-map-pin"></i></button></div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group"><label class="form-label">Complete Address</label><input placeholder="Complete Address e.g. house number, street name, landmark" type="text" class="form-control"></div>
                            <div class="col-md-12 form-group"><label class="form-label">Delivery Instructions</label><input placeholder="Delivery Instructions e.g. Opposite Gold Souk Mall" type="text" class="form-control"></div>
                            <div class="mb-0 col-md-12 form-group">
                                <label class="form-label">Nickname</label>
                                <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                    <label class="btn btn-outline-secondary active">
                              <input type="radio" name="options" id="option12" checked> Home
                              </label>
                                    <label class="btn btn-outline-secondary">
                              <input type="radio" name="options" id="option22"> Work
                              </label>
                                    <label class="btn btn-outline-secondary">
                              <input type="radio" name="options" id="option32"> Other
                              </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
                    </div>
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
        <div class="row">
            <div class="col selected">
                <a href="index.html" class="text-danger small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-home text-danger"></i></p>
                    Home
                </a>
            </div>
            <div class="col">
                <a href="most_popular.html" class="text-dark small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-map-pin"></i></p>
                    Trending
                </a>
            </div>
            <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
                <div class="bg-danger rounded-circle mt-n0 shadow">
                    <a href="checkout.html" class="text-white small font-weight-bold text-decoration-none">
                        <i class="feather-shopping-cart"></i>
                    </a>
                </div>
            </div>
            <div class="col">
                <a href="favorites.html" class="text-dark small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-heart"></i></p>
                    Favorites
                </a>
            </div>
            <div class="col">
                <a href="profile.html" class="text-dark small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-user"></i></p>
                    Profile
                </a>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slick Slider JS-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <!-- Sidebar JS-->
    <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
    <!-- Custom scripts for all pages-->
    <script type="text/javascript" src="js/osahan.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>

</html>


<script type="text/javascript">
   $(document).ready(function () {
    $(".qtyminus").on('click',function() {
        const item_qty = $("#item-qty").val();
        const price = $("#price").val();
        const total = item_qty * price;
        $("#total").val(total);
        $("#total-text").text(total);
    });
    $(".qtyplus").on('click',function(){
        const item_qty = $("#item-qty").val();
        const price = $("#price").val();
        const total = item_qty * price;
        $("#total").val(total);
        $("#total-text").text(total);
    });
   });
</script>