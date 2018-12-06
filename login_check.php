<?php
/**
 * Created by PhpStorm.
 * User: chenyilei
 * Date: 2018/11/14/0014
 * Time: 19:13
 */

    session_start();

    if(empty($_SESSION['username'])){
        echo "<script>window.location.href=\"login.php\";</script>";
    }else{
        //不干
    }

?>


