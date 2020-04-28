<?php
include_once ("inc_header.php");
include_once ("login_check.php");
$plant_id = $_GET['plant_id'];
//生物表 - 分类表 - 地区表
$sql = 'select * from plant join category on plant.category_id = category.category_id join place on place.place_id = plant.place_id where plant_id = '.$plant_id;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

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
                      <h2> 生物信息详情</h2>
                      <p class="lead"></p>
                  </div>

                  <!-- Validation Example -->
                  <div class="admin-form theme-primary mw1000 center-block" style="padding-bottom: 175px;">

                      <div class="panel heading-border">

                          <div class="panel-body bg-light">

                              <div class="section-divider mt20 mb40">
                                  <span> 基本信息 </span>
                              </div>
                              <!-- .section-divider -->
                              <div class="section row" id="items">
                                  <div class="col-md-2">生物编号</div>
                                  <div class="col-md-9"><?= $row['plant_id'] ?></div>
                              </div>
                              <div class="section row" id="items">
                                  <div class="col-md-2">生物名称</div>
                                  <div class="col-md-4"><?= $row['plant_name'] ?></div>

                                  <div class="col-md-2">创建时间</div>
                                  <div class="col-md-4"><?= date("Y-m-d H:i:s",$row['plant_createtime']) ?></div>
                              </div>
                              <div class="section row" id="items">
                                  <div class="col-md-2">生物分类</div>
                                  <div class="col-md-4"><?= $row['category_name'] ?></div>

                                  <div class="col-md-2">生物地区</div>
                                  <div class="col-md-4"><?= $row['place_name'] ?></div>
                              </div>
                              <!-- end section -->
                              <div class="section-divider mv40">
                                  <span> 详细信息 </span>
                              </div>
                              <!-- .section-divider -->
                              <div class="section row text-center">
                                  <div class="col-md-5">生物特征</div>
                                  <div class="col-md-6">生物危害</div>
                              </div>
                              <div class="section row text-center">
                                  <div class="col-md-5"><?= $row['plant_identity'] ?></div>
                                  <div class="col-md-6"><?= $row['plant_bad'] ?></div>
                              </div>
<!--                              <div class="section row">-->
<!--                                  <div class="col-md-2">交通</div>-->
<!--                                  <div class="col-md-2">1200</div>-->
<!--                                  <div class="col-md-6">飞机票：伦敦--巴黎</div>-->
<!--                              </div>-->

                              <!-- end section -->

                              <!-- end .form-body section -->
                             
                                  <button type="button" class="button" onclick="javascript:window.history.go(-1);"> 返回 </button>
                             
                              <!-- end .form-footer section -->

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
