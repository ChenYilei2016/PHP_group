<?php
/**
 * Created by PhpStorm.
 * User: chenyilei
 * Date: 2018/11/30/0030
 * Time: 23:53
 */
    session_start();
?>

<header class="navbar navbar-fixed-top navbar-shadow">
    <div class="navbar-branding">
        <a class="navbar-brand" href="index.php">
            <b>农林外来危害物种</b>
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown menu-merge">
            <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
                <img src="assets/img/avatars/5.jpg" alt="avatar" class="mw30 br64">
                <span class="hidden-xs pl15"> <?php echo $_SESSION['username'] ;?> </span>
                <span class="caret caret-tp hidden-xs"></span>
            </a>
            <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
                <li class="dropdown-footer">
                    <a href="logout.php" class="">
                        <span class="fa fa-power-off pr5"></span> 退出 </a>
                </li>
            </ul>
        </li>
    </ul>
</header>
