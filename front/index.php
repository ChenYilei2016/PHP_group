<?php
/**
 * Created by PhpStorm.
 * User: chenyilei
 * Date: 2019/1/5/0019
 * Time: 11:10
 */
include_once("../inc_header.php");
$sql = 'select * from plant';
$result = mysqli_query($conn,$sql);
?>


<!DOCTYPE HTML>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Home</title>

    <!-- Behavioral Meta Data -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="img/small-logo-01.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='style.css' rel='stylesheet' type='text/css'>


</head>
<body>

<a name="ancre"></a>

<!-- CACHE -->
<div class="cache"></div>

<!-- HEADER -->

<div id="wrapper-header">
    <div id="main-header" class="object">
        <div class="logo"><a style="color:white;">农林外来危害物种展现</a></div>

        <div id="main_tip_search">
            <form>
                <input type="text" name="search" id="tip_search_input" list="search" placeholder="和后台的搜索一样懒的弄" autocomplete=off required>
            </form>
        </div>
        <div id="stripes"></div>
    </div>
</div>

<!-- NAVBAR -->

<div id="wrapper-navbar">
    <div class="navbar object">
        <div id="wrapper-sorting">
            <div id="wrapper-title-1">
                <div class="top-rated object">主显示页</div>
                <div id="fleche-nav-1"></div>
            </div>

        </div>
        <div id="wrapper-bouton-icon">

        </div>
    </div>
</div>

<!-- FILTER -->
<div id="main-container-menu" class="object">
    <div class="container-menu">

        <div id="main-cross">
            <div id="cross-menu"></div>
        </div>

        <div id="main-small-logo">
            <div class="small-logo"></div>
        </div>

        <div id="main-premium-ressource">
            <div class="premium-ressource"><a href="#">Premium resources</a></div>
        </div>

        <div id="main-themes">
            <div class="themes"><a href="#">Latest themes</a></div>
        </div>

        <div id="main-psd">
            <div class="psd"><a href="#">PSD goodies</a></div>
        </div>

        <div id="main-ai">
            <div class="ai"><a href="#">Illustrator freebies</a></div>
        </div>

        <div id="main-font">
            <div class="font"><a href="#">Free fonts</a></div>
        </div>

        <div id="main-photo">
            <div class="photo"><a href="#">Free stock photos</a></div>
        </div>

    </div>
</div>

<!--<div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>-->

<!-- PORTFOLIO -->
<div id="wrapper-container">

    <div class="container object">

        <div id="main-container-image">

            <section class="work">


                <?php
                if($num = mysqli_num_rows($result)){
                    while( $row = mysqli_fetch_array($result) ){
                        ?>
                        <figure class="white">
                            <a href="details.php?plant_id=">
                                <img  src="../<?=empty($row['plant_image'])?'images/none.jpg':$row['plant_image']?>" style="width:240px;height:180px;"/>
                                <dl>
                                    <dt style="text-align: center">Plant Identity</dt>
                                    <dd><?=substr($row['plant_identity'],0,200)?>......</dd>
                                </dl>
                            </a>
                            <div id="wrapper-part-info">
                                <div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
                                <!--                                            <div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>-->
                                <div  id="part-info"><?=$row['plant_name']?></div>
                            </div>
                        </figure>
                        <?php
                    }
                }
                ?>
            </section>

        </div>

    </div>

    <div id="wrapper-oldnew">
        <div class="oldnew">
            <div class="wrapper-oldnew-prev">
                <div id="oldnew-prev"></div>
            </div>
            <div class="wrapper-oldnew-next">
                <div id="oldnew-next"></div>
            </div>
        </div>
    </div>


    <div id="main-container-footer">
        <div class="container-footer">

            <div id="row-1f">
                <div class="text-row-1f">
                    <span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">农林外来危害物种前台</span><br>农林外来危害物种前台
                </div>
            </div>
            <div id="row-2f">
                <div class="text-row-1f">
                    <span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">农林外来危害物种前台</span><br>农林外来危害物种前台
                </div>
            </div>
            <div id="row-3f">
                <div class="text-row-1f">
                    <span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">好像没什么好写的</span><br>好像没什么好写的
                </div>
            </div>
        </div>
    </div>


    <div id="wrapper-copyright">
        <div class="copyright">
            <div class="copy-text object">Copyright &copy; 2016.Company name All rights reserved </div>

            <div class="wrapper-navbouton">
                <div class="google object">g</div>
                <div class="facebook object">f</div>
                <div class="linkin object">i</div>
                <div class="dribbble object">d</div>
            </div>
        </div>
    </div>

</div>

<!-- SCRIPT -->

<script src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
<script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
<script type="text/javascript" src="js/fastclick.min.js"></script>
<script type="text/javascript" src="js/jquery.animate-colors-min.js"></script>
<script type="text/javascript" src="js/jquery.animate-shadow-min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script>

    /* PRELOADER */

    function preloader() {
        if (document.images) {
            var img1 = new Image();
            img1.src = "img/psd-4.jpg";

        }
    }
    function addLoadEvent(func) {
        var oldonload = window.onload;
        if (typeof window.onload != 'function') {
            window.onload = func;
        } else {
            window.onload = function() {
                if (oldonload) {
                    oldonload();
                }
                func();
            }
        }
    }
    addLoadEvent(preloader);



</script>

</body>
</html>
