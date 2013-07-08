<?php 
    require_once(SAFE_ROOT.'function/common.php'); 
 ?>
 <?php 
    echo "<div id='minisign_subject'>
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
			     <td><img  id='img_pin' src='{DOCUMENT_ROOT}auth/pin.php' alt='验证码'></td>
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
			     <td><a href='{DOCUMENT_ROOT}user/find_pwd.php'>忘记密码？</a><input type='hidden' value='get_rand_token()'/></td>
			 </tr>
		</table>
	</div>
	
	<div id='minisign_shut'>
	  <a href='javascript:void(0)'>关闭</a>
	</div>
    <p></p>
<div id='minisign_cover'>
</div>
 ";
?>




