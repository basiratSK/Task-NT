	
		<?php 
			include('dbconn.php');
				$username = $_POST['username'];
				$password = $_POST['password'];
				$firstname = $_POST ['firstname'];
				$lastname = $_POST ['lastname'];
				$role = $_POST['role'];
				$contact = $_POST['contact'];
				mysqli_query($conn,"insert into user (username, password, firstname, lastname,role,contact) values ('$username', '$password', '$firstname', '$lastname','$role','$contact')");
		?>
		
		<script>
			alert('Successfully Signed Up! You can now Log in your Account');
			window.location = 'index.php';
		</script>		