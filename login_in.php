<?php
    include_once ("inc_header.php");
/**
 * Created by PhpStorm.
 * User: chenyilei
 * Date: 2018/11/14/0014
 * Time: 18:22
 */

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from user where user_name= '".$username."' and user_password ='".$password."'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if( !$num ){
        echo "no";
        $sql = "insert into log (log_user,log_info,log_createtime) values ('".$username."','"."用户登陆失败"."',".time().") ";//插入日志
        mysqli_query($conn, $sql);
        return ;
    }else{
        $row = mysqli_fetch_row($result);
        session_start();
        //TODO : 暂时性质
        $_SESSION["username"]= $username;
        $sql = "insert into log (log_user,log_info,log_createtime) values ('".$_SESSION["username"]."','"."用户登陆成功"."',".time().") ";//插入日志
        mysqli_query($conn, $sql);
    }
    echo 'ok';
?>

