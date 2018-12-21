<?php
include_once ("inc_header.php");
include_once ("login_check.php");

$sql = 'select * from log';
$result_data = mysqli_query($conn,$sql);
//分页开始
$pageSize = 5; //5页的大小
$pageTotalElement = mysqli_num_rows($result_data);
$pageTotalPages = $pageTotalElement % $pageSize == 0 ? (int)($pageTotalElement/$pageSize) : (int)($pageTotalElement/$pageSize) + 1 ;

//得到页面中的页数 以0开始
$page = 1;
if(!empty($_GET['page']) ){
    $page = $_GET['page'];
    if($page > $pageTotalPages ){
        $page = $pageTotalPages;
    }
    if($page<1){
        $page = 1;
    }
}

//得到本页应有的数据
$sql = 'select * from log order by log_createtime desc limit '.($page-1)*$pageSize.','.$pageSize;
$result = mysqli_query($conn,$sql);

$prePage = $page-1>=1 ? $page-1 : 1;
$nextPage = $page+1> $pageTotalPages ? $pageTotalPages:$page+1;

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
                    <h2> 地区列表</h2>
                    <p class="lead"></p>
                </div>
                <!-- message listing panel -->
                <div class="admin-form theme-primary mw1000 center-block" style="padding-bottom: 175px;">

                    <div class="panel  heading-border">

                        <!-- message toolbar header -->
                        <div class="container">
                            <div class="row clearfix">
                                <div class="col-md-12 column">
                                    <ul class="pagination">
                                        <li>
                                            <a href="Logger_list.php?page=<?=$prePage?>">Prev</a>
                                        </li>
                                        <?php
                                            for($i=1 ; $i <= $pageTotalPages; $i++){
                                                echo "<li><a href='Logger_list.php?page=".$i."'>".$i."</a></li>";
                                            }
                                        ?>
                                        <li>
                                            <a href="Logger_list.php?page=<?=$nextPage?>">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- message listings table -->
                        <div class="panel-body pn">
                            <table id="message-table" class="table admin-form theme-warning tc-checkbox-1">
                                <thead>
                                <tr class="">
                                    <th class="hidden-xs text-center">日志编号</th>
                                    <th class="hidden-xs text-center">操作用户</th>
                                    <th class="text-center">操作信息</th>
                                    <th class="text-center">操作时间</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if($num = mysqli_num_rows($result)){
                                    while($row = mysqli_fetch_array($result) ){
                                        ?>
                                        <tr class="message-unread">
                                            <td class=""><?php echo $row['log_id']?></td>
                                            <td class="text-center fw600"><?php echo $row['log_user']?></td>
                                            <td class="text-center fw600"><?php echo $row['log_info']?></td>
                                            <td class="text-center fw600"><?php echo date("Y-m-d H:i:s",$row['log_createtime'])?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
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
