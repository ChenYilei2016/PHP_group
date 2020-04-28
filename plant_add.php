<?php
include_once ("inc_header.php");
include_once ("login_check.php");
//$plant_id = $_GET['plant_id'];
////生物表 - 分类表 - 地区表
//$sql = 'select * from plant join category on plant.category_id = category.category_id join place on place.place_id = plant.place_id where plant_id = '.$plant_id;
//$result = mysqli_query($conn,$sql);
//$row = mysqli_fetch_array($result);
//生物名称 生物特征identity  生物危害bad
//查询 生物分类
$sql_category = "select * from category";
$result_category = mysqli_query($conn,$sql_category);
//查询 生物地区
$sql_place = "select * from place";
$result_place= mysqli_query($conn,$sql_place);

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from admindesigns.com/demos/absolute/1.1/admin_forms-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Aug 2015 02:56:15 GMT -->
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>农林外来危害物种后台</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AbsoluteAdmin - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AbsoluteAdmin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body class="admin-validation-page" data-spy="scroll" data-target="#nav-spy" data-offset="200">

<!-- Start: Main -->
<div id="main">

    <!-- Start: Header -->
    <?php include_once("index_header.php"); ?>
    <!-- End: Header -->
    <!-- Start: Sidebar -->
    <?php include_once("index_sidebar.php"); ?>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        <!-- Begin: Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- begin: .tray-center -->
            <div class="tray tray-center">

                <!-- Begin: Content Header -->
                <div class="content-header">
                    <h2> 添加生物</h2>
                    <p class="lead"></p>
                </div>

                <!-- Validation Example -->
                <div class="admin-form theme-primary mw1000 center-block" style="padding-bottom: 175px;">

                    <div class="panel heading-border">

                        <form method="post" action="plant_add_in.php" id="admin-form" enctype="multipart/form-data">

                            <div class="panel-body bg-light">

                                <div class="section-divider mt20 mb40">
                                    <span> 基本信息 </span>
                                </div>
                                <!-- .section-divider -->
                                <div class="section">
                                    <label for="useremail" class="field prepend-icon">
                                        <input type="text" name="plant_name" id="cause" class="gui-input" placeholder="生物名称">
                                        <label for="cause" class="field-icon">
                                            <i class="fa fa-envelope"></i>
                                        </label>
                                    </label>

                                </div>
                                <!-- end section -->
                                <div class="section" id="spy3">
                                    <label for="comment" class="field prepend-icon">
                                        <textarea class="gui-textarea" id="comment" name="plant_identity" placeholder="生物特征"></textarea>
                                        <label for="comment" class="field-icon">
                                            <i class="fa fa-comments"></i>
                                        </label>
                                    </label>
                                </div>
                                <div class="section" id="spy3">
                                    <label for="comment" class="field prepend-icon">
                                        <textarea class="gui-textarea" id="comment" name="plant_bad" placeholder="生物危害"></textarea>
                                        <label for="comment" class="field-icon">
                                            <i class="fa fa-comments"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->
                                <div class="section">
                                    <label class="field select">
                                        <select id="language" name="category_id">
                                            <option value="">生物分类...</option>
                                            <?php
                                            if($num = mysqli_num_rows($result_category)){
                                                while($row = mysqli_fetch_array($result_category) ){
                                                    ?>
                                                        <option value="<?=$row['category_id']?>"><?=$row['category_name']?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                                <div class="section">
                                    <label class="field select">
                                        <select id="language" name="place_id">
                                            <option value="">危害地区...</option>
                                            <?php
                                            if($num = mysqli_num_rows($result_place)){
                                                while($row = mysqli_fetch_array($result_place) ){
                                                    ?>
                                                    <option value="<?=$row['place_id']?>"><?=$row['place_name']?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                                <div class="section-divider mt20 mb40">
                                    <span> 选择生物图片 </span>
                                    <div class="section" id="spy3">
                                        <input type="file" class="button bg-blue margin-left" name="plant_image" id="image1" value="+ 浏览上传"  >
                                    </div>
                                </div>
                                <br><br><br><br>
                                <!-- .section-divider -->
                                <div class="section row" id="items">
                                    <div>
                                        <!-- end .form-body section -->
                                        <div class="panel-footer text-right">
                                            <button type="submit" class="button"> 提交 </button>
                                            <button type="button" class="button" onclick="javascript:window.history.go(-1);"> 返回 </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end .form-footer section -->
                        </form>

                    </div>

                </div>
                <!-- end: .admin-form -->

            </div>
            <!-- end: .tray-center -->
        </section>
        <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->

<style>
    /* demo page styles */
    body { min-height: 2300px; }

    .content-header b,
    .admin-form .panel.heading-border:before,
    .admin-form .panel .heading-border:before {
        transition: all 0.7s ease;
    }
    /* responsive demo styles */
    @media (max-width: 800px) {
        .admin-form .panel-body { padding: 18px 12px; }
    }
</style>

<style>
    .ui-datepicker select.ui-datepicker-month,
    .ui-datepicker select.ui-datepicker-year {
        width: 48%;
        margin-top: 0;
        margin-bottom: 0;

        line-height: 25px;
        text-indent: 3px;

        color: #888;
        border-color: #DDD;
        background-color: #FDFDFD;

        -webkit-appearance: none; /*Optionally disable dropdown arrow*/
    }
</style>

<!-- jQuery -->
<script src="vendor/jquery/jquery-1.11.1.min.js"></script>
<script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- jQuery Validate Plugin-->
<script src="assets/admin-tools/admin-forms/js/jquery.validate.min.js"></script>

<!-- jQuery Validate Addon -->
<script src="assets/admin-tools/admin-forms/js/additional-methods.min.js"></script>

<!-- AdminForms JS -->
<script src="assets/admin-tools/admin-forms/js/jquery-ui-datepicker.min.js"></script>

<!-- Theme Javascript -->
<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/demo/demo.js"></script>
<script src="assets/js/main.js"></script>
<!-- END: PAGE SCRIPTS -->
<script type="text/javascript" src="js/pages.js"></script>
<script type="text/javascript" src="js/items.js"></script>
<!-- END: PAGE SCRIPTS -->
</body>


</html>
