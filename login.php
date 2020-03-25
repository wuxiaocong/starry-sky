<?php
include 'common.php';

if ($user->hasLogin()) {
    $response->redirect($options->adminUrl);
}
$rememberName = htmlspecialchars(Typecho_Cookie::get('__typecho_remember_name'));
Typecho_Cookie::delete('__typecho_remember_name');
$bodyClass = 'body-100';
?>
<!DOCTYPE html>
<html class="no-js" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="/admin/style/normalize.css">
<link rel="stylesheet" type="text/css" href="/admin/style/demo.css">
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="/admin/style/component.css">
<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body>
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header" style="height: 695px;">
					<canvas id="demo-canvas" width="1920" height="695"></canvas>
					<div class="logo_box">
						<h3>欢迎登入草榴社区</h3>
						<form action="<?php $options->loginAction(); ?>" method="post" name="login" role="form">
							<div class="input_outer">
								<span class="u_user"></span>
								<input name="name" value="<?php echo $rememberName; ?>" class="text" style="color: #FFFFFF !important" type="text" placeholder="请输入账户">
							</div>
							<div class="input_outer">
								<span class="us_uer"></span>
								<input name="password" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;" value="" type="password" placeholder="请输入密码">
							</div>
							<div class="mb2" ><button type="submit" class="act-but submit" style="color: #FFFFFF">登录</button>
                          </div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /container -->
		<script src="/admin/style/TweenLite.js"></script>
		<script src="/admin/style/EasePack.js"></script>
		<script src="/admin/style/rAF.js"></script>
		<script src="/admin/style/demo-1.js"></script>
</body></html>
<?php 
include 'common-js.php';
?>
<script>
$(document).ready(function () {
    $('#name').focus();
});
</script>
<?php
include 'footer.php';
?>
