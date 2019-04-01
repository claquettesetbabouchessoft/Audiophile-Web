<?php
	if(isset($success) && !$success){
		if($reason == "mail"){
			echo "this mail is already used !";
		}else if($reason == "password"){
			echo "password doesn't match !";
		}else{			
			echo "Unable to add user ! unknown error";
		}
	}
?>
<form action="./" method="post">
	<fieldset>
		<div>
		    <label for="mail">Mail </label>
		    <input type="text" placeholder="mail" name="mail" required/>
		    <label for="nickname">Nickname </label>
		    <input type="text" placeholder="nickname" name="nickname" required/>
		</div>
		<div>
		    <label for="password">Password</label>
		    <input type="password" placeholder="Password" name="password" required/>
    	    <label for="password2">Repeat Password</label>
		    <input type="password" placeholder="Password2" name="password2" required/>
		</div>

		<input type="hidden" name="action" value="added"/>
		<input type="hidden" name="topic" value="auth"/>
		<input type="submit" value="Connection"/>
	</fieldset>
</form>