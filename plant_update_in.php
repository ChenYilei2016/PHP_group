<?php
include_once("inc_header.php");
include_once("login_check.php");

$plant_id = $_POST['plant_id'];
$plant_name = $_POST['plant_name'];
$plant_identity=$_POST['plant_identity'];
$plant_bad = $_POST['plant_bad'];
$category_id =$_POST['category_id'];
$place_id =$_POST['place_id'];
$plant_createtime = time();

// $s = "delete from plant where plant_id = ".$plant_id;
// mysqli_query($conn,$s);
// //插入plant表
// $sql = "insert into plant (plant_id,category_id,place_id,plant_name,plant_identity,plant_bad,plant_createtime) VALUES (".$plant_id.",".$category_id.",".$place_id.",'".$plant_name."','".$plant_identity."','".$plant_bad."',".$plant_createtime.")";

$sql="UPDATE plant 
SET category_id = ".$category_id.",
place_id = ".$place_id.",
plant_name = '".$plant_name."',
plant_identity = '".$plant_identity."',
plant_bad = '".$plant_bad."',
plant_createtime = ".$plant_createtime." 
WHERE
    plant_id = ".$plant_id."";
    
if(mysqli_query($conn,$sql)){
    echo "";
}else{
    echo "保存数据失败".$sql;
}
$href = 'plant_update.php?plant_id='.$plant_id;

$sql_ = "insert into log (log_user,log_info,log_createtime) values ('".$_SESSION["username"]."','"."用户更新一条生物记录:"."',".time().") ";//插入日志
mysqli_query($conn,$sql_);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>系统信息</title>
    <link rel="stylesheet" href="css/pintuer.css">
    <style type="text/css">
        *{ margin:0px; padding:0px;}
        .error-container{ background:#fff; border:1px solid #0ae;  text-align:center; width:450px; margin:250px auto; font-family:Microsoft Yahei; padding-bottom:30px; border-top-left-radius:5px; border-top-right-radius:5px;  }
        .error-container h1{ font-size:16px; padding:12px 0; background:#0ae; color:#fff;}
        .errorcon{ padding:35px 0; text-align:center; color:#0ae; font-size:18px;}
        .errorcon i{ display:block; margin:12px auto; font-size:30px; }
        .errorcon span{color:red;}
        h4{ font-size:14px; color:#666;}
        a{color:#0ae;}
    </style>
</head>
<body class="no-skin">
<div class="error-container" style="margin-top: 50px">
    <h1> 后台管理系统-信息提示 </h1>
    <div class="errorcon">
        <i class="icon-smile-o"></i>操作成功
        <span style="display:none;"><i class="icon-frown-o"></i>操作失败!</span>

    </div>
    <h4 class="smaller">页面自动 <a id="href" href="<?php echo $href ;?>">跳转</a> 等待时间：
        <b id="wait">3</b></h4>

</div>

<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait'),href = document.getElementById('href').href;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = '<?php echo $href ;?>';
                clearInterval(interval);
            };
        }, 1000);
    })();
</script>
</body>
</html>
