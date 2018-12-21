<?php
/**
 * Created by PhpStorm.
 * User: chenyilei
 * Date: 2018/11/30/0030
 * Time: 23:57
 */
?>

<aside id="sidebar_left" class="nano nano-light affix">

    <!-- Start: Sidebar Left Content -->
    <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">

            <!-- Sidebar Widget - Author -->
            <div class="sidebar-widget author-widget">
                <div class="media">
                    <a class="media-left" href="#">
                        <img src="assets/img/avatars/3.jpg" class="img-responsive">
                    </a>
                    <div class="media-body">
                        <div class="media-author"><?php echo $_SESSION['username'] ;?></div>
                        <div class="media-links">
                            <a href="login.php">退出</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Sidebar Widget - Search (hidden) -->
            <div class="sidebar-widget search-widget hidden">
                <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
                    <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
                </div>
            </div>

        </header>
        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Menu -->
        <div class="leftnav">
            <h2><span class="icon-user"></span>&nbsp;&nbsp;分类管理</h2>
            <ul style="display:block">
                <a class="btn btn-info" href="category_list.php"><span class="icon-caret-right"></span>分类列表</a>
                <a class="btn btn-info" href="category_add.php"><span class="icon-caret-right"></span>添加分类</a>
            </ul>
            <h2><span class="icon-user"></span>&nbsp;&nbsp;地区管理</h2>
            <ul style="display:block">
                <a class="btn btn-info" href="place_list.php"><span class="icon-caret-right"></span>地区列表</a>
                <a class="btn btn-info" href="place_add.php"><span class="icon-caret-right"></span>添加地区</a>
            </ul>
            <h2><span class="icon-pencil-square-o"></span>&nbsp;&nbsp;生物管理</h2>
            <ul>
                <a class="btn btn-info" href="plant_list.php"><span class="icon-caret-right"></span>生物列表</a>
                <a class="btn btn-info" href="plant_add.php"><span class="icon-caret-right"></span>添加生物</a>
            </ul>
            <h2><span class="icon-pencil-square-o"></span>&nbsp;&nbsp;日志管理</h2>
            <ul>
                <li><a class="btn btn-info" href="Logger_list.php" ><span class="icon-caret-right"></span>日志列表</a></li>
            </ul>
        </div>
        <!-- End: Sidebar Menu -->

        <!-- Start: Sidebar Collapse Button -->
        <div class="sidebar-toggle-mini">
            <a href="#">
                <span class="fa fa-sign-out"></span>
            </a>
        </div>
        <!-- End: Sidebar Collapse Button -->

    </div>
    <!-- End: Sidebar Left Content -->

</aside>
