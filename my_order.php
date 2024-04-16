<?php
session_start();
require_once "connection.php";
if (!isset($_SESSION['id'])) {
    header('location:login.php');
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
                            <?php $conn = require_once('config.php'); ?>
                        </div>
                        <!-- widgets-wrap.// -->
                    </div>        <!-- col.// -->
                </div>
                <!-- row.// -->
            </div>
            <!-- container.// -->
        </section>
        <!-- header-main .// -->
    </header>
    <div class="d-none">
        <div class="bg-primary border-bottom p-3 d-flex align-items-center">
            <a class="toggle togglew toggle-2" href="#"><span></span></a>
            <h4 class="font-weight-bold m-0 text-white">My Order</h4>
        </div>
    </div>
    <section class="py-4 osahan-main-body">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <ul class="nav nav-tabsa custom-tabsa border-0 flex-column bg-white rounded overflow-hidden shadow-sm p-2 c-t-order" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link border-0 text-dark py-3 active" id="completed-tab" data-toggle="tab" href="#completed" role="tab" aria-controls="completed" aria-selected="true">
                                <i class="feather-check mr-2 text-success mb-0"></i> 歷史訂單</a>
                        </li>
                        <li class="nav-item border-top" role="presentation">
                            <a class="nav-link border-0 text-dark py-3" id="progress-tab" data-toggle="tab" href="#progress" role="tab" aria-controls="progress" aria-selected="false">
                                <i class="feather-clock mr-2 text-warning mb-0"></i> 追蹤訂單</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content col-md-9" id="myTabContent">
                    <div class="tab-pane fade show active" id="completed" role="tabpanel" aria-labelledby="completed-tab">
                    <?php
                        $total = 0;
                        $sql = "SELECT * FROM `orderlist` WHERE id='".$_SESSION["id"]."' and status='1' and `root_order` IS NULL;";
                        $result = mysqli_query($conn,$sql);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                $total += (int)$row['price'] * (int)$row['mealitem'];
                                ?>
                                    <div class="order-body">
                                        <div class="pb-3">
                                            <div class="p-3 rounded shadow-sm bg-white">
                                                <div class="d-flex border-bottom pb-3">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p class="mb-0 font-weight-bold text-dark"><a><?php echo $row['meal']?></a></p><br>
                                                            <p class="text- mb-0"><?php echo $row['sidemeal']?></p>
                                                            <p class="text- mb-0"><?php echo $row['sauce']?></p>
                                                            <p class="text- mb-0">x<?php echo $row['mealitem']?></p>
                                                        </div>
                                                        <?php
                                                            $cmd = "SELECT * FROM `orderlist` WHERE `root_order` = " . $row["orderid"];
                                                            foreach($pdo_conn->query($cmd)->fetchAll() as $child_item) {
                                                                $total += (int)$child_item['price'] * (int)$child_item['mealitem'];
                                                        ?>
                                                            <div class="col-12">
                                                                <p class="mb-0 font-weight-bold text-dark mt-4">
                                                                    <a><?php echo $child_item['meal']?></a>
                                                                </p>
                                                                <br>
                                                                <p class="text- mb-0"><?php echo $child_item['sidemeal']?></p>
                                                                <p class="text- mb-0"><?php echo $child_item['sauce']?></p>
                                                                <p class="text- mb-0">x<?php echo $child_item['mealitem']?></p>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <p align="center" class="bg-success text-white py-1 px-2 rounded small mb-1">已完成</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex pt-3">
                                                    <div class="small">
                                                        <p class="text- mb-0"><?php echo $row['inorout']?></p>
                                                        <p class="text- mb-0"><?php echo $row['payment']?></p>
                                                    </div>
                                                    <div class="text-muted m-0 ml-auto mr-3 small">總金額<br>
                                                        <span class="text-dark font-weight-bold">NT$<?= $total ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                            }
                        }else{
                            ?>
                            您尚未有訂單!
                            <?php
                        }
                    ?>       
                    </div>

                    <div class="tab-pane fade" id="progress" role="tabpanel" aria-labelledby="progress-tab">
                    <?php
                        $total2 = 0;
                        $sql = "SELECT * FROM `orderlist` WHERE id='".$_SESSION["id"]."' and (status='2' OR status='3' ) and `root_order` IS NULL;";
                        $result = mysqli_query($conn,$sql);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                $total2 += (int)$row['price'] * (int)$row['mealitem'];
                                ?>
                                    <div class="order-body">
                                        <div class="pb-3">
                                            <div class="p-3 rounded shadow-sm bg-white">
                                                <div class="d-flex border-bottom pb-3">
                                                    <div class="text-muted mr-3">
                                                    </div>
                                                    <div class="row w-100">
                                                        <div class="col-12">
                                                                <p class="mb-0 font-weight-bold text-dark" ><?php echo $row['meal']?></a></p><br>
                                                                <p class="text- mb-0"><?php echo $row['sidemeal']?></p>
                                                                <p class="text- mb-0"><?php echo $row['sauce']?></p>
                                                                <p class="text- mb-0">x<?php echo $row['mealitem']?></p>
                                                        </div>
                                                        <?php
                                                            $cmd = "SELECT * FROM `orderlist` WHERE `root_order` = " . $row["orderid"];
                                                            foreach($pdo_conn->query($cmd)->fetchAll() as $child_item) {
                                                            $total2 += (int)$child_item['price'] * (int)$child_item['mealitem'];
                                                        ?>
                                                            <div class="col-12">
                                                                <p class="mb-0 font-weight-bold text-dark mt-4">
                                                                    <a><?php echo $child_item['meal']?></a>
                                                                </p>
                                                                <br>
                                                                <p class="text- mb-0"><?php echo $child_item['sidemeal']?></p>
                                                                <p class="text- mb-0"><?php echo $child_item['sauce']?></p>
                                                                <p class="text- mb-0">x<?php echo $child_item['mealitem']?></p>
                                                            </div>
                                                        <?php
                                                            }
                                                        ?>
                                                    </div>

                                                    <?php
                                                    if( $row['status']=='2' ) {
                                                        ?>
                                                        <div class="ml-auto">
                                                            <p style="word-break: keep-all;" class="bg-warning text-white py-1 px-2 rounded small mb-1">準備中</p>
                                                        </div>
                                                        <?php
                                                    }else{
                                                        ?>
                                                        <div class="ml-auto">
                                                            <p style="word-break: keep-all;" class="bg-success text-white py-1 px-2 rounded small mb-1">可取餐</p>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="d-flex pt-3">
                                                    <div class="small">
                                                        <p class="text-  mb-0"><?php echo $row['inorout']?></p>
                                                        <p class="text-  mb-0"><?php echo $row['payment']?></p>
                                                    </div>
                                                    <div class="text-muted m-0 ml-auto mr-3 small">總金額<br>
                                                        <span class="text-dark font-weight-bold">NT<?= $total2 ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                            }
                        }else{
                            ?>
                            您尚未有訂單!
                            <?php
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
</body>
</html>
<?php
mysqli_close($conn);
?>