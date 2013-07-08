<?php require_once(SAFE_ROOT.'view/head.php');?>
<meta name="keywords" content="web开发,linux,php,apache,nginx,mysql,css,js,ajax"/>
<meta name="description" content="自学web开发，用linux架站"/>
<script type="text/javascript">
  function login()
  {
	  var result = " <div id='minisign_subject'>
	       <a href='javascript:void(0)'>登录</a><a href='javascript:void(0)'>注册</a>
	 </div>
   <div id='minisign_signup'>
	      <table>
			 <tr>
			     <td>用户名</td>
			     <td><input name='username' type='text'/></td>
			     <td></td>
			 </tr>  
			  <tr>
			     <td>密码</td>
			     <td><input name='password' /type='password'></td>
			     <td></td>
			 </tr>  
			  <tr>
			     <td>确认密码</td>
			     <td><input name='confirm_password'/type='password'></td>
			     <td></td>
			 </tr>  
			  <tr>
			     <td>邮箱</td>
			     <td><input name='email' /type='text'></td>
			     <td></td>
			 </tr>  
			  <tr>
			     <td>验证码</td>
			     <td><input id='minisign_pin' name='pin' type='text'/> </td>
			     <td><img  id='img_pin' src='http://localhost/auth/pin.php' alt='验证码'></td>
			     <td> <a   class='pin' href='javascript:void(0)'>  看不清楚,换一张? </a></td>
			 </tr>  
			 <tr>
				 
				 <td><input type='submit' value='注册'/></td>
				 <td></td>
			 </tr>
		  </table>  
	</div>
	
	<div id='minisign_signin'>
        <table>
			 <tr>
			     <td>用户名</td>
			     <td><input name='username' type='text'/></td>
			     <td></td>
			 </tr>  
			  <tr>
			     <td>密码</td>
			     <td><input name='password' type='password'></td>
			     <td></td>
			 </tr>  
			 <tr>
				 <td><input type='submit' value='登录'></td>
				 <td><input name='remember_me' type='checkbox' checked='checked'/>记住我一周</td>
			     <td><a href='http://localhost/user/find_pwd.php'>忘记密码？</a><input type='hidden' value='get_rand_token()'/></td>
			 </tr>
		</table>
	</div>
	
	<div id='minisign_shut'>
	  <a href='javascript:void(0)'>关闭</a>
	</div>
    <p></p>
<div id='minisign_cover'>
</div>";
	  var minisign = document.createElement('div');
	  minisign.setAttribute('id','minisign');
	  minisign.innerHTML = result ;
	  var new_css = document.createElement('link');
	  var new_script = document.createElement('script');
	  new_css.setAttribute('type','text/css');
	  new_css.setAttribute('href','http://localhost/css/minisign.css');
	  new_css.setAttribute('rel','stylesheet');
	  new_script.setAttribute('type','text/javascript');
	  new_script.setAttribute('src','http://localhost/js/minisign.js');
	  var head = document.getElementsByTagName('head')[0];
	  head.appendChild(new_css);
	  head.appendChild(new_c);
  }

</script>
<title>自学web开发</title>
</head>
<body>
<!--top-->
<?php
 require_once(SAFE_ROOT.'view/navigator.php');
?>
<!--content-->
<!--foot-->
<?php
 require_once(SAFE_ROOT.'view/foot.php');
?>

</body>
</html>
