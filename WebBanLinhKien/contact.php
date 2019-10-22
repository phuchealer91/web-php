<?php
session_start();
include_once("model/database.php");
	$dbQuanLyBanLinhKien = new database("localhost", "root", "", "dbQuanLyBanLinhKien");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8?v=2" />
    <title>Bán linh kiến</title>

    <link href="Style/main.css" rel="stylesheet" />
    <link href="Style/ho_tro.css" rel="stylesheet" />
    <link href="jquery-simplyscroll-2.0.5/jquery.simplyscroll.css" rel="stylesheet" />
    <link href="Style/jquery-ui.css" rel="stylesheet" />
    <link href="style/carts.css" rel="stylesheet" />
    <link href="style/logins.css" rel = "stylesheet"/>
    <script src="Js/jquery-3.2.1.min.js" rel="stylesheet"></script>
    

</head>
<body>
<?php include_once("processData/signup.php");?>
<?php include_once("processData/login.php");?>
    <div id="container">
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

            <section id="hotroTT" class="feildContent">
                <h2>CÔNG TY CỔ PHẦN PHONG VŨ</h2>

                <div id="noidung" >
                    <p class="ndp">
                        Địa chỉ: 209, Đường 3/2, P. Hưng Lợi, Q. Ninh Kiều, Tp. Cần Thơ</p>
                    <p class="ndp">
                        ĐT: 0966197305 - Fax: 123456789</p>
                    <p class="ndp">
                        Email: phucb1706630@student.ctu.edu.vn
                    </p>
                    <h3>Bản đồ đường đi</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.9504903651946!2d105.76244191411115!3d10.020944475424434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a089ad0c27e6ff%3A0x65a6954062e549f4!2zUGhvbmcgVsWp!5e0!3m2!1svi!2s!4v1571553629212!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </section>
            <section id="hotroMail" class="feildContent">
                <h2>Liên Hệ</h2>

                <form >

                    <label for="name">Họ và tên</label>
                    <input type="text" id="name" name="name" >

                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" >

                    <label for="name">Chủ đề</label>
                    <input type="text" id="name" name="name" >
                    
                    <label for="noidung">Nội Dung</label>
                    <textarea id="noidung" name="noidung" style="height:100px"></textarea>

                    <input type="submit" style="margin-left:300px;" class="btn" value="Gửi">

                </form>
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
        $('.ddcolortabs').attr('id','ddtabs7');
    </script>

</body>
</html>
