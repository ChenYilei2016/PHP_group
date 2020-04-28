<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>中国农林业有害的外来入侵植物 后台</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="htmleaf-container">
	<div class="wrapper">
		<div class="container">
			<h1>Welcome</h1>
			<form class="form" >
				<input id="username" type="text" placeholder="Username">
				<input id="password" type="password" placeholder="Password">
				<button type="submit" id="login-button">登录</button>
			</form>
            <form class="form" action="front/index.php">
                <button >返回前台</button>
            </form>

		</div>

		<ul class="bg-bubbles">
		</ul>

	</div>

</div>
<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$('#login-button').click(function (event) {
    event.preventDefault();
    $('form').fadeOut(500);
    $('.wrapper').addClass('form-success');

    var tdata = {
      username : $("#username").val(),
      password : $("#password").val()
    };
    console.log( tdata );

    $.post("login_in.php",tdata,function (data) {
        //登陆成功
        if('ok' === data.trim() ){
            window.location.href="index.php";
        }else{
            //登陆失败
            $('.wrapper').removeClass("form-success");
            $('form').fadeIn(500);
            $("#username").val('账号或密码有误');
        }
    });
});
</script>
<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';color:#000000">
<h1>中国农林业有害的外来入侵植物 后台</h1>
</div>
</body>
</html>