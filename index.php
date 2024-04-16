<?php
session_start();

/* if (!isset($_SESSION['id'])) {
    header('location:login.php');
} */
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
                    <div class="col-3 d-flex align-items-center m-none">
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
                                    <a class="dropdown-item" href="logout.php">登出</a>
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
    <div class="osahan-home-page">
        <div class="bg-primary p-3 d-none">
            <div class="text-white">
                <div class="title d-flex align-items-center">
                    <a class="toggle" href="#">
                        <span></span>
                    </a>
                    <h4 class="font-weight-bold m-0 pl-5">Browse</h4>
                    <a class="text-white font-weight-bold ml-auto" data-toggle="modal" data-target="#exampleModal" href="#">Filter</a>
                </div>
            </div>
            <div class="input-group mt-3 rounded shadow-sm overflow-hidden">
                <div class="input-group-prepend">
                    <button class="border-0 btn btn-outline-secondary text-dark bg-white btn-block"><i class="feather-search"></i></button>
                </div>
                <input type="text" class="shadow-none border-0 form-control" placeholder="Search for restaurants or dishes">
            </div>
        </div>
        <!-- offer sectio slider -->
        <div class="bg-white">
            <div class="container">
            </div>
        </div>
        <div class="container">
            <!-- Trending this week -->
            <div class="pt-4 pb-2 title d-flex align-items-center">
                <h5 class="m-0">熱門推薦</h5>
            </div>
            <!-- slider -->
            <div class="trending-slider">
                <div class="osahan-slider-item">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                            <a>
                                <img alt="#" src="img/trending1.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1">
                                <a href="#" class="text-black" data-toggle="modal" data-target="#extras">161kcal韓式風味牛</a>
                                </h6>
                                <p class="text-gray mb-3"> • 蛋白質11.5g • 脂肪11.2g • 碳水3.5g</p>
                                <p class="text-gray mb-3 time"> <span class="float-right text-black-50"> $155</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="osahan-slider-item">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                            <a>
                                <img alt="#" src="img/8.jpg" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="#" class="text-black" data-toggle="modal" data-target="#extras1">176kcal泰式打拋豬</a></h6>
                                <p class="text-gray mb-3"> • 蛋白質16g • 脂肪8g • 碳水10g</p>
                                <p class="text-gray mb-3 time"><span class="float-right text-black-50"> $125</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="osahan-slider-item">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                            <a>
                                <img alt="#" src="img/9.jpg" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1">
                                    <a href="#" class="text-black" data-toggle="modal" data-target="#extras2">79kcal普羅旺斯鯛魚</a>
                                </h6>
                                <p class="text-gray mb-3"> • 蛋白質15.6g • 脂肪1.84g • 碳水0.16g</p>
                                <p class="text-gray mb-3 time"><span class="float-right text-black-50"> $140</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Most popular -->
            <div class="py-3 title d-flex align-items-center">
                <h5 class="m-0">經典餐盒</h5>
            </div>
            <!-- Most popular -->
            <div class="most_popular">
                <div class="row">
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <a>
                                    <img alt="#" src="img/1.jpg" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1">
                                        <a href="#" class="text-black" data-toggle="modal" data-target="#extras3">62kcal義式香草雞胸</a>
                                    </h6>
                                    <p class="text-gray mb-1 small"> • 蛋白質13.44g • 脂肪0.54g • 碳水0.84g</p>
                                    <p class="text-gray mb-1 rating">
                                    </p>
                                    <ul class="rating-stars list-unstyled"></ul>
                                    <p></p>
                                </div>
                                <div class="list-card-badge">
                                    <p class="text-gray mb-3 time"> <span class="float-right text-black-50"> $110</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <a>
                                    <img alt="#" src="img/2.jpg" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="#" class="text-black" data-toggle="modal" data-target="#extras4">70kcal朝日咖哩雞胸</a></h6>
                                    <p class="text-gray mb-1 small"> • 蛋白質13.98g • 脂肪1.56g • 碳水3.72g</p>
                                    <p class="text-gray mb-1 rating">
                                    </p>
                                    <ul class="rating-stars list-unstyled"></ul>
                                    <p></p>
                                </div>
                                <div class="list-card-badge">
                                    <p class="text-gray mb-3 time"> <span class="float-right text-black-50"> $110</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <a>
                                    <img alt="#" src="img/3.jpg" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="#" class="text-black" data-toggle="modal" data-target="#extras5">63kcal檸檬椒鹽雞胸
                                 </a>
                                    </h6>
                                    <p class="text-gray mb-1 small"> • 蛋白質12.6g • 脂肪1.02g • 碳水0.9g</p>
                                    <p class="text-gray mb-1 rating">
                                    </p>
                                    <ul class="rating-stars list-unstyled"></ul>
                                    <p></p>
                                </div>
                                <div class="list-card-badge">
                                    <p class="text-gray mb-3 time"><span class="float-right text-black-50"> $110</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <a>
                                    <img alt="#" src="img/4.jpg" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="#" class="text-black" data-toggle="modal" data-target="#extras6">80kcal墨西哥紅椒雞胸</a></h6>
                                    <p class="text-gray mb-1 small"> • 蛋白質14.22g • 脂肪1.26g • 碳水2.82g</p>
                                    <p class="text-gray mb-1 rating">
                                    </p>
                                    <ul class="rating-stars list-unstyled"></ul>
                                    <p></p>
                                </div>
                                <div class="list-card-badge">
                                <p class="text-gray mb-3 time"><span class="float-right text-black-50"> $110</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <a>
                                    <img alt="#" src="img/5.jpg" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1">
                                        <a href="#" class="text-black" data-toggle="modal" data-target="#extras7">170kcal法式香榭雞腿</a>
                                    </h6>
                                    <p class="text-gray mb-1 small"> • 蛋白質15.82g • 脂肪8.82g • 碳水6.91g</p>
                                    <p class="text-gray mb-1 rating">
                                    </p>
                                    <ul class="rating-stars list-unstyled"></ul>
                                    <p></p>
                                </div>
                                <div class="list-card-badge">
                                    <p class="text-gray mb-3 time"> <span class="float-right text-black-50"> $135</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <a>
                                    <img alt="#" src="img/6.jpg" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="#" class="text-black" data-toggle="modal" data-target="#extras8">194kcal日式薑燒豬</a></h6>
                                    <p class="text-gray mb-1 small"> • 蛋白質16.5g • 脂肪12.75g • 碳水2.25g</p>
                                    <p class="text-gray mb-1 rating">
                                    </p>
                                    <ul class="rating-stars list-unstyled">
                                    </ul>
                                    <p></p>
                                </div>
                                <div class="list-card-badge">
                                    <p class="text-gray mb-3 time"> <span class="float-right text-black-50"> $125</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <a>
                                    <img alt="#" src="img/10.jpg" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1">
                                        <a href="#" class="text-black" data-toggle="modal" data-target="#extras9">78kcal素食綜合野菇</a>
                                    </h6>
                                    <p class="text-gray mb-1 small"> • 蛋白質5.63g • 脂肪0.46g • 碳水12.82g</p>
                                    <p class="text-gray mb-1 rating">
                                    </p>
                                    <ul class="rating-stars list-unstyled"></ul>
                                    <p></p>
                                </div>
                                <div class="list-card-badge">
                                    <p class="text-gray mb-3 time"><span class="float-right text-black-50"> $135</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
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
                    </aside>
                </div>
                <!-- row.// -->
            </section>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Filter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="osahan-filter">
                        <div class="filter">
                            <!-- SORT BY -->
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="m-0">SORT BY</h6>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-radio">
                                <input type="radio" id="customRadio1f" name="location" class="custom-control-input" checked>
                                <label class="custom-control-label py-3 w-100 px-3" for="customRadio1f">Top Rated</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-radio">
                                <input type="radio" id="customRadio2f" name="location" class="custom-control-input">
                                <label class="custom-control-label py-3 w-100 px-3" for="customRadio2f">Nearest Me</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-radio">
                                <input type="radio" id="customRadio3f" name="location" class="custom-control-input">
                                <label class="custom-control-label py-3 w-100 px-3" for="customRadio3f">Cost High to Low</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-radio">
                                <input type="radio" id="customRadio4f" name="location" class="custom-control-input">
                                <label class="custom-control-label py-3 w-100 px-3" for="customRadio4f">Cost Low to High</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-radio">
                                <input type="radio" id="customRadio5f" name="location" class="custom-control-input">
                                <label class="custom-control-label py-3 w-100 px-3" for="customRadio5f">Most Popular</label>
                            </div>
                            <!-- Filter -->
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="m-0">FILTER</h6>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultCheck1" checked>
                                <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck1">Open Now</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultCheck2">
                                <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck2">Credit Cards</label>
                            </div>
                            <div class="custom-control border-bottom px-0  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultCheck3">
                                <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck3">Alcohol Served</label>
                            </div>
                            <!-- Filter -->
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="m-0">ADDITIONAL FILTERS</h6>
                            </div>
                            <div class="px-3 pt-3">
                                <input type="range" class="custom-range" min="0" max="100" name="minmax">
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label>Min</label>
                                        <input class="form-control" placeholder="$0" type="number">
                                    </div>
                                    <div class="form-group text-right col-6">
                                        <label>Max</label>
                                        <input class="form-control" placeholder="$1,0000" type="number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
                    </div>
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="post" action="checkout.php">
        <!-- extras modal -->
        <div class="modal fade" id="extras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <input type="text" name="location1" class="custom-control-input" value="161kcal韓式風味牛">
                        <h5 class="modal-title">161kcal韓式風味牛</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- extras body -->
                        <p class="m-0">副餐(必選)</p>
                        <div class="recepie-body">
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio1-1f" name="location2" class="custom-control-input" value="274kcal紅藜白飯">
                                <label class="custom-control-label" for="customRadio1-1f">274kcal紅藜白飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio1-2f" name="location2" class="custom-control-input" value="157kcal食蔬半飯">
                                <label class="custom-control-label" for="customRadio1-2f">157kcal食蔬半飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio1-3f" name="location2" class="custom-control-input" value="159kcal地瓜食蔬">
                                <label class="custom-control-label" for="customRadio1-3f">159kcal地瓜食蔬  <span class="text-muted">+$0</span></label>
                            </div>
                            <p class="m-0">醬料(必選)</p>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio1-4f" name="location3" class="custom-control-input" value="87kcal焙煎胡麻醬">
                                <label class="custom-control-label" for="customRadio1-4f">87kcal焙煎胡麻醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio1-5f" name="location3" class="custom-control-input" value="44kcal義式油醋醬">
                                <label class="custom-control-label" for="customRadio1-5f">44kcal義式油醋醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio1-6f" name="location3" class="custom-control-input" value="43kcal奇亞芥末醬">
                                <label class="custom-control-label" for="customRadio1-6f">43kcal奇亞芥末醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio1-7f" name="location3" class="custom-control-input" value="36kcal水果塔塔醬">
                                <label class="custom-control-label" for="customRadio1-7f">36kcal水果塔塔醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <input type=hidden name='price' value="155">
                            <div  class="d-flex align-items-center">
                                <input type='button'  value='-' class='qtyminus' field='item' />
                                <input type='text' name='item' value='1' class='qty' />
                                <input type='button' value='+' class='qtyplus' field='item' />
                                <input type="submit"  class="btn btn-primary btn-lg btn-block" value="加入購物車" onclick="window.alert('商品已加入購物車！')"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" action="checkout.php">
        <!-- extras modal -->
        <div class="modal fade" id="extras1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <input type="text" name="location1" class="custom-control-input" value="176kcal泰式打拋豬">
                        <h5 class="modal-title">176kcal泰式打拋豬</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- extras body -->
                        <p class="m-0">副餐(必選)</p>
                        <div class="recepie-body">
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio2-1f" name="location2" class="custom-control-input" value="274kcal紅藜白飯">
                                <label class="custom-control-label" for="customRadio2-1f">274kcal紅藜白飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio2-2f" name="location2" class="custom-control-input" value="157kcal食蔬半飯">
                                <label class="custom-control-label" for="customRadio2-2f">157kcal食蔬半飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio2-3f" name="location2" class="custom-control-input" value="159kcal地瓜食蔬">
                                <label class="custom-control-label" for="customRadio2-3f">159kcal地瓜食蔬  <span class="text-muted">+$0</span></label>
                            </div>
                            <p class="m-0">醬料(必選)</p>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio2-4f" name="location3" class="custom-control-input" value="87kcal焙煎胡麻醬">
                                <label class="custom-control-label" for="customRadio2-4f">87kcal焙煎胡麻醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio2-5f" name="location3" class="custom-control-input" value="44kcal義式油醋醬">
                                <label class="custom-control-label" for="customRadio2-5f">44kcal義式油醋醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio2-6f" name="location3" class="custom-control-input" value="43kcal奇亞芥末醬">
                                <label class="custom-control-label" for="customRadio2-6f">43kcal奇亞芥末醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio2-7f" name="location3" class="custom-control-input" value="36kcal水果塔塔醬">
                                <label class="custom-control-label" for="customRadio2-7f">36kcal水果塔塔醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <input type=hidden name='price' value="125">
                            <div  class="d-flex align-items-center">
                                <input type='button'  value='-' class='qtyminus' field='item' />
                                <input type='text' name='item' value='1' class='qty' />
                                <input type='button' value='+' class='qtyplus' field='item' />
                                <input type="submit"  class="btn btn-primary btn-lg btn-block" value="加入購物車" onclick="window.alert('商品已加入購物車！')"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" action="checkout.php">
        <!-- extras modal -->
        <div class="modal fade" id="extras2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <input type="text" name="location1" class="custom-control-input" value="79kcal普羅旺斯鯛魚">
                        <h5 class="modal-title">79kcal普羅旺斯鯛魚</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- extras body -->
                        <p class="m-0">副餐(必選)</p>
                        <div class="recepie-body">
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio3-1f" name="location2" class="custom-control-input" value="274kcal紅藜白飯">
                                <label class="custom-control-label" for="customRadio3-1f">274kcal紅藜白飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio3-2f" name="location2" class="custom-control-input" value="157kcal食蔬半飯">
                                <label class="custom-control-label" for="customRadio3-2f">157kcal食蔬半飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio3-3f" name="location2" class="custom-control-input" value="159kcal地瓜食蔬">
                                <label class="custom-control-label" for="customRadio3-3f">159kcal地瓜食蔬  <span class="text-muted">+$0</span></label>
                            </div>
                            <p class="m-0">醬料(必選)</p>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio3-4f" name="location3" class="custom-control-input" value="87kcal焙煎胡麻醬">
                                <label class="custom-control-label" for="customRadio3-4f">87kcal焙煎胡麻醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio3-5f" name="location3" class="custom-control-input" value="44kcal義式油醋醬">
                                <label class="custom-control-label" for="customRadio3-5f">44kcal義式油醋醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio3-6f" name="location3" class="custom-control-input" value="43kcal奇亞芥末醬">
                                <label class="custom-control-label" for="customRadio3-6f">43kcal奇亞芥末醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio3-7f" name="location3" class="custom-control-input" value="36kcal水果塔塔醬">
                                <label class="custom-control-label" for="customRadio3-7f">36kcal水果塔塔醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <input type=hidden name='price' value="140">
                            <div  class="d-flex align-items-center">
                                <input type='button'  value='-' class='qtyminus' field='item' />
                                <input type='text' name='item' value='1' class='qty' />
                                <input type='button' value='+' class='qtyplus' field='item' />
                                <input type="submit"  class="btn btn-primary btn-lg btn-block" value="加入購物車" onclick="window.alert('商品已加入購物車！')"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" action="checkout.php">
        <!-- extras modal -->
        <div class="modal fade" id="extras3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <input type="text" name="location1" class="custom-control-input" value="62kcal義式香草雞胸">
                        <h5 class="modal-title">62kcal義式香草雞胸</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- extras body -->
                        <p class="m-0">副餐(必選)</p>
                        <div class="recepie-body">
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio4-1f" name="location2" class="custom-control-input" value="274kcal紅藜白飯">
                                <label class="custom-control-label" for="customRadio4-1f">274kcal紅藜白飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio4-2f" name="location2" class="custom-control-input" value="157kcal食蔬半飯">
                                <label class="custom-control-label" for="customRadio4-2f">157kcal食蔬半飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio4-3f" name="location2" class="custom-control-input" value="159kcal地瓜食蔬">
                                <label class="custom-control-label" for="customRadio4-3f">159kcal地瓜食蔬  <span class="text-muted">+$0</span></label>
                            </div>
                            <p class="m-0">醬料(必選)</p>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio4-4f" name="location3" class="custom-control-input" value="87kcal焙煎胡麻醬">
                                <label class="custom-control-label" for="customRadio4-4f">87kcal焙煎胡麻醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio4-5f" name="location3" class="custom-control-input" value="44kcal義式油醋醬">
                                <label class="custom-control-label" for="customRadio4-5f">44kcal義式油醋醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio4-6f" name="location3" class="custom-control-input" value="43kcal奇亞芥末醬">
                                <label class="custom-control-label" for="customRadio4-6f">43kcal奇亞芥末醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio4-7f" name="location3" class="custom-control-input" value="36kcal水果塔塔醬">
                                <label class="custom-control-label" for="customRadio4-7f">36kcal水果塔塔醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <input type=hidden name='price' value="110">
                            <div  class="d-flex align-items-center">
                                <input type='button'  value='-' class='qtyminus' field='item' />
                                <input type='text' name='item' value='1' class='qty' />
                                <input type='button' value='+' class='qtyplus' field='item' />
                                <input type="submit"  class="btn btn-primary btn-lg btn-block" value="加入購物車" onclick="window.alert('商品已加入購物車！')"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" action="checkout.php">
        <!-- extras modal -->
        <div class="modal fade" id="extras4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <input type="text" name="location1" class="custom-control-input" value="70kcal朝日咖哩雞胸">
                        <h5 class="modal-title">70kcal朝日咖哩雞胸</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- extras body -->
                        <p class="m-0">副餐(必選)</p>
                        <div class="recepie-body">
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio5-1f" name="location2" class="custom-control-input" value="274kcal紅藜白飯">
                                <label class="custom-control-label" for="customRadio5-1f">274kcal紅藜白飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio5-2f" name="location2" class="custom-control-input" value="157kcal食蔬半飯">
                                <label class="custom-control-label" for="customRadio5-2f">157kcal食蔬半飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio5-3f" name="location2" class="custom-control-input" value="159kcal地瓜食蔬">
                                <label class="custom-control-label" for="customRadio5-3f">159kcal地瓜食蔬  <span class="text-muted">+$0</span></label>
                            </div>
                            <p class="m-0">醬料(必選)</p>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio5-4f" name="location3" class="custom-control-input" value="87kcal焙煎胡麻醬">
                                <label class="custom-control-label" for="customRadio5-4f">87kcal焙煎胡麻醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio5-5f" name="location3" class="custom-control-input" value="44kcal義式油醋醬">
                                <label class="custom-control-label" for="customRadio5-5f">44kcal義式油醋醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio5-6f" name="location3" class="custom-control-input" value="43kcal奇亞芥末醬">
                                <label class="custom-control-label" for="customRadio5-6f">43kcal奇亞芥末醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio5-7f" name="location3" class="custom-control-input" value="36kcal水果塔塔醬">
                                <label class="custom-control-label" for="customRadio5-7f">36kcal水果塔塔醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <input type=hidden name='price' value="110">
                            <div  class="d-flex align-items-center">
                                <input type='button'  value='-' class='qtyminus' field='item' />
                                <input type='text' name='item' value='1' class='qty' />
                                <input type='button' value='+' class='qtyplus' field='item' />
                                <input type="submit"  class="btn btn-primary btn-lg btn-block" value="加入購物車" onclick="window.alert('商品已加入購物車！')"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" action="checkout.php">
        <!-- extras modal -->
        <div class="modal fade" id="extras5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <input type="text" name="location1" class="custom-control-input" value="63kcal檸檬椒鹽雞胸">
                        <h5 class="modal-title">63kcal檸檬椒鹽雞胸</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- extras body -->
                        <p class="m-0">副餐(必選)</p>
                        <div class="recepie-body">
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio6-1f" name="location2" class="custom-control-input" value="274kcal紅藜白飯">
                                <label class="custom-control-label" for="customRadio6-1f">274kcal紅藜白飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio6-2f" name="location2" class="custom-control-input" value="157kcal食蔬半飯">
                                <label class="custom-control-label" for="customRadio6-2f">157kcal食蔬半飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio6-3f" name="location2" class="custom-control-input" value="159kcal地瓜食蔬">
                                <label class="custom-control-label" for="customRadio6-3f">159kcal地瓜食蔬  <span class="text-muted">+$0</span></label>
                            </div>
                            <p class="m-0">醬料(必選)</p>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio6-4f" name="location3" class="custom-control-input" value="87kcal焙煎胡麻醬">
                                <label class="custom-control-label" for="customRadio6-4f">87kcal焙煎胡麻醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio6-5f" name="location3" class="custom-control-input" value="44kcal義式油醋醬">
                                <label class="custom-control-label" for="customRadio6-5f">44kcal義式油醋醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio6-6f" name="location3" class="custom-control-input" value="43kcal奇亞芥末醬">
                                <label class="custom-control-label" for="customRadio6-6f">43kcal奇亞芥末醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio6-7f" name="location3" class="custom-control-input" value="36kcal水果塔塔醬">
                                <label class="custom-control-label" for="customRadio6-7f">36kcal水果塔塔醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <input type=hidden name='price' value="110">
                            <div  class="d-flex align-items-center">
                                <input type='button'  value='-' class='qtyminus' field='item' />
                                <input type='text' name='item' value='1' class='qty' />
                                <input type='button' value='+' class='qtyplus' field='item' />
                                <input type="submit"  class="btn btn-primary btn-lg btn-block" value="加入購物車" onclick="window.alert('商品已加入購物車！')"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" action="checkout.php">
        <!-- extras modal -->
        <div class="modal fade" id="extras6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <input type="text" name="location1" class="custom-control-input" value="80kcal墨西哥紅椒雞胸">
                        <h5 class="modal-title">80kcal墨西哥紅椒雞胸</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- extras body -->
                        <p class="m-0">副餐(必選)</p>
                        <div class="recepie-body">
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio7-1f" name="location2" class="custom-control-input" value="274kcal紅藜白飯">
                                <label class="custom-control-label" for="customRadio7-1f">274kcal紅藜白飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio7-2f" name="location2" class="custom-control-input" value="157kcal食蔬半飯">
                                <label class="custom-control-label" for="customRadio7-2f">157kcal食蔬半飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio7-3f" name="location2" class="custom-control-input" value="159kcal地瓜食蔬">
                                <label class="custom-control-label" for="customRadio7-3f">159kcal地瓜食蔬  <span class="text-muted">+$0</span></label>
                            </div>
                            <p class="m-0">醬料(必選)</p>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio7-4f" name="location3" class="custom-control-input" value="87kcal焙煎胡麻醬">
                                <label class="custom-control-label" for="customRadio7-4f">87kcal焙煎胡麻醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio7-5f" name="location3" class="custom-control-input" value="44kcal義式油醋醬">
                                <label class="custom-control-label" for="customRadio7-5f">44kcal義式油醋醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio7-6f" name="location3" class="custom-control-input" value="43kcal奇亞芥末醬">
                                <label class="custom-control-label" for="customRadio7-6f">43kcal奇亞芥末醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio7-7f" name="location3" class="custom-control-input" value="36kcal水果塔塔醬">
                                <label class="custom-control-label" for="customRadio7-7f">36kcal水果塔塔醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <input type=hidden name='price' value="110">
                            <div  class="d-flex align-items-center">
                                <input type='button'  value='-' class='qtyminus' field='item' />
                                <input type='text' name='item' value='1' class='qty' />
                                <input type='button' value='+' class='qtyplus' field='item' />
                                <input type="submit"  class="btn btn-primary btn-lg btn-block" value="加入購物車" onclick="window.alert('商品已加入購物車！')"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" action="checkout.php">
        <!-- extras modal -->
        <div class="modal fade" id="extras7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <input type="text" name="location1" class="custom-control-input" value="170kcal法式香榭雞腿">
                        <h5 class="modal-title">170kcal法式香榭雞腿</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- extras body -->
                        <p class="m-0">副餐(必選)</p>
                        <div class="recepie-body">
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio8-1f" name="location2" class="custom-control-input" value="274kcal紅藜白飯">
                                <label class="custom-control-label" for="customRadio8-1f">274kcal紅藜白飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio8-2f" name="location2" class="custom-control-input" value="157kcal食蔬半飯">
                                <label class="custom-control-label" for="customRadio8-2f">157kcal食蔬半飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio8-3f" name="location2" class="custom-control-input" value="159kcal地瓜食蔬">
                                <label class="custom-control-label" for="customRadio8-3f">159kcal地瓜食蔬  <span class="text-muted">+$0</span></label>
                            </div>
                            <p class="m-0">醬料(必選)</p>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio8-4f" name="location3" class="custom-control-input" value="87kcal焙煎胡麻醬">
                                <label class="custom-control-label" for="customRadio8-4f">87kcal焙煎胡麻醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio8-5f" name="location3" class="custom-control-input" value="44kcal義式油醋醬">
                                <label class="custom-control-label" for="customRadio8-5f">44kcal義式油醋醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio8-6f" name="location3" class="custom-control-input" value="43kcal奇亞芥末醬">
                                <label class="custom-control-label" for="customRadio8-6f">43kcal奇亞芥末醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio8-7f" name="location3" class="custom-control-input" value="36kcal水果塔塔醬">
                                <label class="custom-control-label" for="customRadio8-7f">36kcal水果塔塔醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <input type=hidden name='price' value="135">
                            <div  class="d-flex align-items-center">
                                <input type='button'  value='-' class='qtyminus' field='item' />
                                <input type='text' name='item' value='1' class='qty' />
                                <input type='button' value='+' class='qtyplus' field='item' />
                                <input type="submit"  class="btn btn-primary btn-lg btn-block" value="加入購物車" onclick="window.alert('商品已加入購物車！')"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" action="checkout.php">
        <!-- extras modal -->
        <div class="modal fade" id="extras8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <input type="text" name="location1" class="custom-control-input" value="194kcal日式薑燒豬">
                        <h5 class="modal-title">194kcal日式薑燒豬</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- extras body -->
                        <p class="m-0">副餐(必選)</p>
                        <div class="recepie-body">
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio9-1f" name="location2" class="custom-control-input" value="274kcal紅藜白飯">
                                <label class="custom-control-label" for="customRadio9-1f">274kcal紅藜白飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio9-2f" name="location2" class="custom-control-input" value="157kcal食蔬半飯">
                                <label class="custom-control-label" for="customRadio9-2f">157kcal食蔬半飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio9-3f" name="location2" class="custom-control-input" value="159kcal地瓜食蔬">
                                <label class="custom-control-label" for="customRadio9-3f">159kcal地瓜食蔬  <span class="text-muted">+$0</span></label>
                            </div>
                            <p class="m-0">醬料(必選)</p>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio9-4f" name="location3" class="custom-control-input" value="87kcal焙煎胡麻醬">
                                <label class="custom-control-label" for="customRadio9-4f">87kcal焙煎胡麻醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio9-5f" name="location3" class="custom-control-input" value="44kcal義式油醋醬">
                                <label class="custom-control-label" for="customRadio9-5f">44kcal義式油醋醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio9-6f" name="location3" class="custom-control-input" value="43kcal奇亞芥末醬">
                                <label class="custom-control-label" for="customRadio9-6f">43kcal奇亞芥末醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio9-7f" name="location3" class="custom-control-input" value="36kcal水果塔塔醬">
                                <label class="custom-control-label" for="customRadio9-7f">36kcal水果塔塔醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <input type=hidden name='price' value="125">
                            <div  class="d-flex align-items-center">
                                <input type='button'  value='-' class='qtyminus' field='item' />
                                <input type='text' name='item' value='1' class='qty' />
                                <input type='button' value='+' class='qtyplus' field='item' />
                                <input type="submit"  class="btn btn-primary btn-lg btn-block" value="加入購物車" onclick="window.alert('商品已加入購物車！')"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" action="checkout.php">
        <!-- extras modal -->
        <div class="modal fade" id="extras9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <input type="text" name="location1" class="custom-control-input" value="78kcal素食綜合野菇">
                        <h5 class="modal-title">78kcal素食綜合野菇</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- extras body -->
                        <p class="m-0">副餐(必選)</p>
                        <div class="recepie-body">
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio10-1f" name="location2" class="custom-control-input" value="274kcal紅藜白飯">
                                <label class="custom-control-label" for="customRadio10-1f">274kcal紅藜白飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio10-2f" name="location2" class="custom-control-input" value="157kcal食蔬半飯">
                                <label class="custom-control-label" for="customRadio10-2f">157kcal食蔬半飯  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio10-3f" name="location2" class="custom-control-input" value="159kcal地瓜食蔬">
                                <label class="custom-control-label" for="customRadio10-3f">159kcal地瓜食蔬  <span class="text-muted">+$0</span></label>
                            </div>
                            <p class="m-0">醬料(必選)</p>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio10-4f" name="location3" class="custom-control-input" value="87kcal焙煎胡麻醬">
                                <label class="custom-control-label" for="customRadio10-4f">87kcal焙煎胡麻醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio10-5f" name="location3" class="custom-control-input" value="44kcal義式油醋醬">
                                <label class="custom-control-label" for="customRadio10-5f">44kcal義式油醋醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio10-6f" name="location3" class="custom-control-input" value="43kcal奇亞芥末醬">
                                <label class="custom-control-label" for="customRadio10-6f">43kcal奇亞芥末醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio10-7f" name="location3" class="custom-control-input" value="36kcal水果塔塔醬">
                                <label class="custom-control-label" for="customRadio10-7f">36kcal水果塔塔醬  <span class="text-muted">+$0</span></label>
                            </div>
                            <input type=hidden name='price' value="135">
                            <div  class="d-flex align-items-center">
                                <input type='button'  value='-' class='qtyminus' field='item' />
                                <input type='text' name='item' value='1' class='qty' />
                                <input type='button' value='+' class='qtyplus' field='item' />
                                <input type="submit"  class="btn btn-primary btn-lg btn-block" value="加入購物車" onclick="window.alert('商品已加入購物車！')"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

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
    <!-- <script src="jquery.min.js"></script> -->
    <!-- <script src="bootstrap.min.js"></script> -->
    <!-- <script src="jquery.mycart.js"></script> -->
</body>

</html>