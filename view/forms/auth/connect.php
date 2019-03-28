<?php 
	if(isset($success) && !$success){
		echo "Unable to connect, password or username invalid";
	}
?>
<form action="./" method="post">
	<fieldset>
		<div>
		    <label for="mail">mail </label>
		    <input type="text" placeholder="mail" name="mail" required/>
		</div>
		<div>
		    <label for="password">Password</label>
		    <input type="password" placeholder="Password" name="password" required/>
		</div>

		<input type="hidden" name="action" value="connected"/>
		<input type="hidden" name="topic" value="auth"/>
		<input type="submit" value="Connection"/>
	</fieldset>
</form>