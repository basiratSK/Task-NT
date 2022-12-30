<!DOCTYPE html>
<html>
<head>
	<link href="jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<?php 
		include('dbconn.php');
		include('header.php');
	?>
</head>

<body>
 
	   <form id="login_form"  method="post">
        <h3 class="text-center">Please Login</h3>
        <div class="mb-3">
			<label for="username" class="form-label">Username</label>
			<input type="email"  id="username" class="form-control" name="username" placeholder="Enter your email" required>
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input type="password" id="password1" class="form-control" name="password" placeholder="Enter your password" required>
		</div>
		
        <button name="login" type="submit" class="btn btn-primary">Sign in</button>
		
		      </form>
				<script>
			jQuery(document).ready(function(){
			jQuery("#login_form").submit(function(e){
					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "login.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome Back!", { header: 'Access Granted' });
						var delay = 2000;
							setTimeout(function(){ window.location ='viewdetails.php'}, delay);  
						}
						else
						{
						$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
						}
						}
						
					});
					return false;
				});
			});
			</script>  

  
  
		</div>
		</div><!--form-->
		
		<br><br>
		
		<?php include('header.php');?> 
		
        <h3 class="text-center">Register here</h3>
			
			<form method="POST" action="signup.php" id="signup" onlick>
		
				<div class="mb-3">
					<label for="username" class="form-label">Username</label>
					<input type="email"  id="username" class="form-control" name="username" placeholder="Enter your email" required>
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" required>
				</div>
				<div class="mb-3">
					<label for="confirm_password" class="form-label">Confirm Password</label>
					<input type="password" id="confirm_password" class="form-control" Placeholder="Confirm your password" required>
				</div>
				<div class="mb-3">
        			<label for="firstname" class="form-label">First Name</label>
					<input type="text" name="firstname" class="form-control" Placeholder="Enter your first name" required>
				</div>
				<div class="mb-3">
        			<label for="lastname" class="form-label">Last Name</label>
					<input type="text" name="lastname" class="form-control" Placeholder="Enter your last name" required>
				</div>
				<label for="role">Role:</label>
				<div class="mb-3">
					<select name="role" id="role" class="form-select" aria-label="Default select example" onChange="SelectRedirect();">
						<!-- <option value="#">Choose your role</option>	 -->
						<option value="Editor">Editor</option>
						<option value="writer">Writer</option>
					</select>
					</div>
					<div class="mb-3">
        			<label for="contact" class="form-label">Contact Number</label>
					<input type="text" name="contact" class="form-control" Placeholder="Your contact details" required>
				</div>
				<button name="save" type="submit"  value="Save" class="btn btn-primary">Sign Up</button>
			</form>

			
<br>

<?php include('scripts.php');?>

</body>
</html>
<script>
		var password = document.getElementById("password");
		confirm_password = document.getElementById("confirm_password");

		function validatePassword(){
			if(password.value != confirm_password.value) {
				confirm_password.setCustomValidity("Passwords Don't Match");
			} else {
				confirm_password.setCustomValidity('');
			}
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
</script>

