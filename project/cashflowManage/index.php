<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>cashflowManager</title>
		<link rel="stylesheet" type="text/css" href="css/login.css"/>
	</head>
	<body>
		<!--[if lte IE 8]>
		<div class='xdt-compatible'>
		<div class='xdt-box'>
		为确保您的体验，请使用 <a href="https://www.baidu.com/link?url=WZQIMnpD6k1irr6kKutTSLeWuD7CyadXnv2FCx58Bf1HR4DJDY0TRqih95tXWCeq-38nrFBWOXOLp2VQ-1TVFUZu_LBV5gqFHAVnRH79aQi&wd=&eqid=9d009371000ad886000000055951cf82">Chrome</a> 或 IE9以上高级浏览器
		</div>
		</div>
		<![endif]-->
		<div class="loginBox">
			<div class="xdtLogo">
				<img src="img/logo.png"/>
			</div>
			<form name="login" id="login" action="php/index1.php" method="POST">
                <div class="row-fluid nowrap">
                    <div class="input-container">
                    	<img src="img/user.png" class="userLogo"/>
                        <input id="j_username" name="name" type="text" placeholder="请输入用户名" autocomplete="off">
                    </div>
                    <div class="input-container">
                    	<img src="img/password.png" class="passwordLogo"/>
                        <input id="j_password" name="password" type="password" placeholder="请输入用户密码" autocomplete="off">
                    </div>
                    <div class="input-container greyFont smartFont">
                     	<div id="passwordBox">
	                      <input id="rememberPass" type="checkbox" placeholder="请输入用户密码" autocomplete="off">
	                      <label for="rememberPass">记住密码</label>
	                      <label class="cursorPoint">忘记密码？</label>
                        </div>
                    </div>
                    <div class="input-container" id="loginBtn">
                        <button id="clickButton" type="submit" class="btn cursorPoint">登 录</button>
                    </div>
                </div>
            </form>
            <div class="input-container greyFont">
            	<div id="bottomFontBox" class="smartFont">
	            	<span class="cursorPoint weightFont smallFont">立即注册</span>
	            	<span>|</span>
	            	<span class = "cursorPoint weightFont smallFont">找回密码</span>
        		</div>
           </div>
		</div>
		<div class="copyright smartFont greyFont">
			版权信息
		</div>
		<script src="js/login.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
