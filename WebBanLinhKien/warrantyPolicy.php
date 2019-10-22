<?php
session_start();
include_once("model/database.php");
	$dbQuanLyBanLinhKien = new database("localhost", "root", "", "dbQuanLyBanLinhKien");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Bán linh kiến</title>

    <link href="Style/main.css" rel="stylesheet" />
    <link href="jquery-simplyscroll-2.0.5/jquery.simplyscroll.css" rel="stylesheet" />
    <link href="Style/jquery-ui.css" rel="stylesheet" />
    <link href="style/carts.css" rel="stylesheet" />
    <link href="style/logins.css" rel = "stylesheet"/>
    <script src="Js/jquery-3.2.1.min.js" rel="stylesheet"></script>
    

</head>
<body>
<?php include_once("processData/signup.php");?>
<?php include_once("processData/login.php");?>
    < id="container">
        <header>
            <div id="logo">
                <img src="images/logo.png" />
            </div>
            <div id="flashHeader">
                <a href="javascript:gotoshow()"><img src="Slideshow/h1.jpg" name="slide" border=0 style="filter:progid:DXImageTransform.Microsoft.Pixelate(MaxSquare=15,Duration=1)"></a>
            </div>
                    <?php include_once("processData/show_cart2.php");?>
            <p class="clear"></p>
        </header>
                <nav >
        <?php
        include_once("View/menu.php");
        ?>
        </nav>
        <article>

            <section id="tinTuc" class="feildContent">

                <?php include_once("processData/show_warrantyPolicy.php") ?>
            </section>
        </article>
        <aside>
            <div id="Search"/>
                <div class="feildBasic">
                    <h4>
                        <i>
                            <img class="dot" src="images/White_dot.svg.png" />
                        </i>
                        Tìm Kiếm sản Phẩm
                    </h4>
                    <div id="formSearch" style=" padding: 10px; ">
                        <input id="textSearch" class="ui-autocomplete-input" name="nameProduct" type="text" style="float: left;"/>
                        <button type="button" id="btnSearch" style=" background: url(images/search_f2.png) no-repeat;background-size: contain;" > </button> 
                   
                    </div>
 

            </div>
            <div id="listProductFeild">
                <div class="feildBasic">
                    <h4>
                        <i>
                            <img class="dot" src="images/White_dot.svg.png" />
                        </i>
                        Danh Mục Sản Phẩm                                                                                                                                                                                                                                                                                                                              
                    </h4>
                    <ul style="list-style-type:none" id="ListProductTitle" >
                        <?php include_once("processData/typeTitle.php") ?>
                    </ul>
                </div>
            </div>
            <div id="news">
                <div class="feildBasic">
                    <h4>
                        <i>
                            <img class="dot" src="images/White_dot.svg.png" />
                        </i>
                        Tin Tức MỚi
                    </h4>
                    <div style=" padding:0 10px 0 10px; ">
                    <?php include_once("processData/show_newsBulletin.php") ?>
                    </div>
                </div>
            </div>
        </aside>
        <div class="clear"></div>
        <footer class="footer-distributed">

            <div class="footer-left">

                <h3><span>PHONG VŨ</span></h3>

                <p class="footer-links">
                    <a href="/WebBanLinhKien" class="link-1">Trang Chủ</a>

                    <a href="product.php">Sản Phẩm</a>

                    <a href="introduce.php">Giới Thiệu</a>

                    <a href="contact.php">Liên Hệ</a>
                </p>

                <p class="footer-company-name">Company Name © 2019</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span> 209 Đường Ba Tháng Hai </span>Q.Ninh Kiều, Cần Thơ</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+84 0966 197 305</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#">phucb1706630@student.ctu.edu.vn</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About the company</span>
                    Chúng tôi cập nhật thường xuyên những kiến thức sản phẩm mới nhất, không ngừng nâng cao trình độ chuyên môn kỹ thuật và tác phong giao tiếp với khách hàng luôn được chú trọng. Chúng tôi xem khả năng làm hài lòng khách hàng là thước đo thành công của chính mình.
                </p>

                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>

                </div>
            </div>
        </footer>
    </div>

    <!--Reference-->
    <script src="Js/Menu.js"></script>
    <script src="Js/SimplyScroll.js"></script>
    <script src="Js/jquery-ui.js" ></script>
    <script src="jquery-simplyscroll-2.0.5/jquery.simplyscroll.js"></script>
    <script src="ddtabmenu/ddtabmenufiles/ddtabmenu.js"></script>
    <?php include_once('Model/autoComplete_Search.php');?>
    <!--Main Script page -->
    <script>
        $('.ddcolortabs').attr('id','ddtabs5');
    </script>

</body>
</html>
