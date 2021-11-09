<?php
echo '<div id="loginContainer">
        <div id="LoginBox">
		  <form action="phpFunctions/logUser.php" method="post">
		    
			
			<table style="width:100%;">
			  
			  <tr>
			    <td><p class="fromTxt">User name</p></td>
				<td><input type="text" name="Uname" class="logtxtBox"/></td>
			  </tr>
			  <tr>
			    <td><p class="fromTxt">Passward</p></td>
				<td><input type="text" name="Upwd" class="logtxtBox"/></td>
			  </tr>
			  <tr style="text-align:right;">
			     <td></td>
			     <td><input id="formSubmitBtn" type="submit" name="submit" value="Log In"/></td>
			  </tr>
			</table>
			<p id="forgt_Reg_login"><a href="forgotPwd.php">Forgot Password?</a> | <a href="register.php">Register</a></p>
		  </form>
		</div>
		<div id="LoginButton"></div>
	 </div>';
?>