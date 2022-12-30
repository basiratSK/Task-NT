<!DOCTYPE html>
<html>
<head>
	<link href="jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<?php include('dbconn.php'); ?>
    <?php include('session.php'); include('header.php');?>
    
</head>
<?php 
    $username   = $member_row['username'];
    $password   = $member_row['password'];  //while($r = $results->fetch_assoc()){
         $query = "SELECT * FROM user WHERE username= '$username' AND password='$password'";
         $results = mysqli_query($conn, $query);
        $r = mysqli_fetch_array($results);
        
       $user_id=$r['user_id'];
        $firstname= $r['firstname'];
         $lastname=$r['lastname'];
            $username=$r['username'];
           $role= $r['role'];
   
?>
<body>
<form method="POST" action="updateDetails.php">

<div class="mb-3">
        			<label for="firstname" class="form-label">First Name</label>
					<input type="text" name="firstname" class="form-control" Placeholder="Enter your first name">
				</div>
				<div class="mb-3">
        			<label for="lastname" class="form-label">Last Name</label>
					<input type="text" name="lastname" class="form-control" Placeholder="Enter your last name">
				</div>
				<label for="role">Role:</label>
				<div class="mb-3">
					<select name="role" id="role" class="form-select" aria-label="Default select example" onChange="SelectRedirect();">
						<option value="#">Choose your role</option>	
						<option value="editor">Editor</option>
						<option value="writer">Writer</option>
					</select>
					</div>
					
				<button name="save" type="submit"  value="Save" class="btn btn-primary">Update</button>
    </form>


    
<br>
</center>
<?php include('scripts.php');
include('footer.php');?>

</body>
</html>