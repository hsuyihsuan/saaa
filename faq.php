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
</head>

<body class="fixed-bottom-bar">
<?php
// 建立MySQL的資料庫連接 
$link = @mysqli_connect( 
            'us-cdbr-east-05.cleardb.net',  // MySQL主機名稱 
            'bb1940b5ebd1ce',       // 使用者名稱 
            '56b6f49b',  // 密碼 
            'heroku_fcd2183d6d3bf15');  // 預設使用的資料庫名稱 

?>
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
                    <div class="col-3 d-flex align-items-center m-none">
                        <div class="dropdown mr-3">
                            <div class="dropdown-menu p-0 drop-loc" aria-labelledby="navbarDropdown">
                                <div class="osahan-country">
                                    <div class="search_location bg-primary p-3 text-right">
                                        <div class="input-group rounded shadow-sm overflow-hidden">
                                            <div class="input-group-prepend">
                                                <button class="border-0 btn btn-outline-secondary text-dark bg-white btn-block"><i class="feather-search"></i></button>
                                            </div>
                                            <input type="text" class="shadow-none border-0 form-control" placeholder="Enter Your Location">
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <a href="index.html" class="text-decoration-none">
                                            <p class="font-weight-bold text-primary m-0"><i class="feather-navigation"></i> New York, USA</p>
                                        </a>
                                    </div>
                                    <div class="filter">
                                        <h6 class="px-3 py-3 bg-light pb-1 m-0 border-bottom">Choose your country</h6>
                                        <div class="custom-control  border-bottom px-0 custom-radio">
                                            <input type="radio" id="customRadio1" name="location" class="custom-control-input">
                                            <label class="custom-control-label py-3 w-100 px-3" for="customRadio1">Afghanistan</label>
                                        </div>
                                        <div class="custom-control  border-bottom px-0 custom-radio">
                                            <input type="radio" id="customRadio2" name="location" class="custom-control-input" checked="">
                                            <label class="custom-control-label py-3 w-100 px-3" for="customRadio2">India</label>
                                        </div>
                                        <div class="custom-control  border-bottom px-0 custom-radio">
                                            <input type="radio" id="customRadio3" name="location" class="custom-control-input">
                                            <label class="custom-control-label py-3 w-100 px-3" for="customRadio3">USA</label>
                                        </div>
                                        <div class="custom-control  border-bottom px-0 custom-radio">
                                            <input type="radio" id="customRadio4" name="location" class="custom-control-input">
                                            <label class="custom-control-label py-3 w-100 px-3" for="customRadio4">Australia</label>
                                        </div>
                                        <div class="custom-control  border-bottom px-0 custom-radio">
                                            <input type="radio" id="customRadio5" name="location" class="custom-control-input">
                                            <label class="custom-control-label py-3 w-100 px-3" for="customRadio5">Japan</label>
                                        </div>
                                        <div class="custom-control  px-0 custom-radio">
                                            <input type="radio" id="customRadio6" name="location" class="custom-control-input">
                                            <label class="custom-control-label py-3 w-100 px-3" for="customRadio6">China</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col.// -->
                    <div class="col-8">
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
    <div class="osahan-profile">
        <div class="d-none">
            <div class="bg-primary border-bottom p-3 d-flex align-items-center">
                <a class="toggle togglew toggle-2" href="#"><span></span></a>
                <h4 class="font-weight-bold m-0 text-white">Profile</h4>
            </div>
        </div>
        <!-- profile -->
        <div class="container position-relative">
            <div class="py-5 osahan-profile row">
                <div class="col-md-4 mb-3">
                    <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                        <a href="profile.php" class="">
                            <div class="d-flex align-items-center p-3">
                                <div class="right">
                                    <h6 class="mb-1 font-weight-bold"><?php echo $_SESSION['name']; ?> <i class="feather-check-circle text-success"></i></h6>
                                    <p class="text-muted m-0 small"><?php echo $_SESSION['id']; ?></p>
                                </div>
                            </div>
                        </a>
                        <!-- profile-details -->
                        <div class="bg-white profile-details">
                            <a href="faq.php" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold m-0 text-dark"><i class="feather-truck bg-danger text-white p-2 rounded-circle mr-2"></i>常見問題</h6>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div>
                            </a>
                            <a href="contact-us.php" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                                <div class="left mr-3">
                                    <h6 class="font-weight-bold m-0 text-dark"><i class="feather-phone bg-primary text-white p-2 rounded-circle mr-2"></i> 聯絡我們</h6>
                                </div>
                                <div class="right ml-auto">
                                    <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <div class="osahan-cart-item-profile">
                        <div id="basics">
                            <!-- End Title -->
                            <!-- Basics Accordion -->
                            <div id="basicsAccordion">
                                <!-- Card -->
                                <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                    <div id="basicsHeadingOne">
                                        <h5 class="mb-0">
                                            <button class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3 collapsed" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false" aria-controls="basicsCollapseOne">
                                    營業時間
                                    <span class="card-btn-arrow">
                                    <span class="feather-chevron-down"></span>
                                    </span>
                                    </button>
                                        </h5>
                                    </div>
                                    <div id="basicsCollapseOne" class="collapse show" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion" style="">
                                        <div class="card-body border-top p-3 text-muted">
                                            每日 10:00~19:30
                                        </div>
                                    </div>
                                </div>
                                <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                    <div id="basicsHeadingTwo">
                                        <h5 class="mb-0">
                                            <button class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3 collapsed" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                    餐盒固定配菜
                                    <span class="card-btn-arrow">
                                    <span class="feather-chevron-down"></span>
                                    </span>
                                    </button>
                                        </h5>
                                    </div>
                                    <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion" style="">
                                        <div class="card-body border-top p-3 text-muted">
                                            ✔55kcal綜合食蔬<br>
                                            蛋白質3.11g 脂肪2.07g 碳水8.07g<br>
                                            ✔24kcal溏心蛋(半顆)<br>
                                            蛋白質2.6g 脂肪1.4g 碳水0.3g<br>
                                            (配菜隨季節調整食材內容)
                                        </div>
                                    </div>
                                </div>
                                <div class="box border-bottom bg-white mb-2 rounded shadow-sm overflow-hidden">
                                    <div id="basicsHeadingThree">
                                        <h5 class="mb-0">
                                            <button class="shadow-none btn btn-block d-flex justify-content-between card-btn p-3 collapsed" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                    外送服務
                                    <span class="card-btn-arrow">
                                    <span class="feather-chevron-down"></span>
                                    </span>
                                    </button>
                                        </h5>
                                    </div>
                                    <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion" style="">
                                        <div class="card-body border-top p-3 text-muted">
                                            三公里以內‒滿500元<br>
                                            三～五公里‒滿800元<br>
                                            五～十公里‒滿1600元<br>
                                            十～十五公里‒滿2000元
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>
                            <!-- End Basics Accordion -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
            <div class="row">
                <div class="col">
                    <a href="index.html" class="text-dark small font-weight-bold text-decoration-none">
                        <p class="h4 m-0"><i class="feather-home text-dark"></i></p>
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
                        <a href="checkout.php" class="text-white small font-weight-bold text-decoration-none">
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
                <div class="col selected">
                    <a href="profile.html" class="text-danger small font-weight-bold text-decoration-none">
                        <p class="h4 m-0"><i class="feather-user"></i></p>
                        Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="section-footer border-top bg-dark">
        <div class="container">
            <section class="footer-top padding-y py-5">
                <div class="row pt-3">
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
                    </aside>
                <!-- row.// -->
            </section>
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
    <div class="modal fade" id="paycard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Credit/Debit Card</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <h6 class="m-0">Add new card</h6>
                    <p class="small">WE ACCEPT <span class="osahan-card ml-2 font-weight-bold">( Master Card / Visa Card / Rupay )</span></p>
                    <form>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label class="form-label font-weight-bold small">Card number</label>
                                <div class="input-group">
                                    <input placeholder="Card number" type="number" class="form-control">
                                    <div class="input-group-append"><button type="button" class="btn btn-outline-secondary"><i class="feather-credit-card"></i></button></div>
                                </div>
                            </div>
                            <div class="col-md-8 form-group"><label class="form-label font-weight-bold small">Valid through(MM/YY)</label><input placeholder="Enter Valid through(MM/YY)" type="number" class="form-control"></div>
                            <div class="col-md-4 form-group"><label class="form-label font-weight-bold small">CVV</label><input placeholder="Enter CVV Number" type="number" class="form-control"></div>
                            <div class="col-md-12 form-group"><label class="form-label font-weight-bold small">Name on card</label><input placeholder="Enter Card number" type="text" class="form-control"></div>
                            <div class="col-md-12 form-group mb-0">
                                <div class="custom-control custom-checkbox"><input type="checkbox" id="custom-checkbox1" class="custom-control-input"><label title="" type="checkbox" for="custom-checkbox1" class="custom-control-label small pt-1">Securely save this card for a faster checkout next time.</label></div>
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
                    <form class="">
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
                              <input type="radio" name="options" id="option1" checked> Home
                              </label>
                                    <label class="btn btn-outline-secondary">
                              <input type="radio" name="options" id="option2"> Work
                              </label>
                                    <label class="btn btn-outline-secondary">
                              <input type="radio" name="options" id="option3"> Other
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
    <!-- Invite Modal-->
    <div class="modal fade" id="inviteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title font-weight-bold text-dark">Invite</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body py-0">
                    <button class="btn btn-light text-primary btn-sm"><i class="feather-plus"></i></button>
                    <span class="ml-2 smal text-primary">Send an invite to a friend</span>
                    <p class="mt-3 small">Invited friends (2)</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="mr-3"><img alt="#" src="img/user1.jpg" class="img-fluid rounded-circle"></div>
                        <div>
                            <p class="small font-weight-bold text-dark mb-0">Kate Simpson</p>
                            <P class="mb-0 small">katesimpson@outbook.com</P>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="mr-3"><img alt="#" src="img/user2.png" class="img-fluid rounded-circle"></div>
                        <div>
                            <p class="small font-weight-bold text-dark mb-0">Andrew Smith</p>
                            <P class="mb-0 small">andrewsmith@ui8.com</P>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                </div>
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
</body>

</html>