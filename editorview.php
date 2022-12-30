<!DOCTYPE html>
<html>
<head>
	<title>POST AND COMMENT SYSTEM</title>
	<?php 
		include('dbconn.php'); 
		include('session.php');
		include('header.php');
	 ?>
	
	<script src="vendors/jquery-1.7.2.min.js"></script>
    <script src="vendors/bootstrap.js"></script>
</head>

<body>
	<div id="container">
	<br>
			<div class="text-center"><h2><label class="form-label">Welcome <?php 
				echo $member_row['firstname']." ".$member_row['lastname'];
			?></label></h2></div>
			<div>
			<a href="viewDetails.php"><button class="btn btn-primary">View Profile</button></a>
			<a href="updateDetails.php"><button class="btn btn-primary">Update Profile</button></a>
			<a href="logout.php"><button class="btn btn-primary">Log Out</button></a></div>
		<br>
		<br>
		
		<?php	
			$query = mysqli_query($conn,"SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent from post LEFT JOIN user on user.user_id = post.user_id order by post_id DESC")or die(mysqli_error());
			while($post_row=mysqli_fetch_array($query)){
			$id = $post_row['post_id'];	
			$upid = $post_row['user_id'];	
			$posted_by = $post_row['firstname']." ".$post_row['lastname'];
		?>
					
		<h5>Posted by: <a href="#" > <?php echo $posted_by; ?></a>
					-
			<?php				
				$days = floor($post_row['TimeSpent'] / (60 * 60 * 24));
				$remainder = $post_row['TimeSpent'] % (60 * 60 * 24);
				$hours = floor($remainder / (60 * 60));
				$remainder = $remainder % (60 * 60);
				$minutes = floor($remainder / 60);
				$seconds = $remainder % 60;
				if($days > 0)
				echo date('F d, Y - H:i:sa', $post_row['date_created']);
				elseif($days == 0 && $hours == 0 && $minutes == 0)
				echo "A few seconds ago";		
				elseif($days == 0 && $hours == 0)
				echo $minutes.' minutes ago';
			?>
			<br>
			<br>
			<?php 
				echo $post_row['content']; 
			?>
		</h5>
					
						
		</br>
				
		<?php 
			$comment_query = mysqli_query($conn,"SELECT * ,UNIX_TIMESTAMP() - date_posted AS TimeSpent FROM comment LEFT JOIN user on user.user_id = comment.user_id where post_id = '$id'") or die (mysqli_error());
			while ($comment_row=mysqli_fetch_array($comment_query)){
			$comment_id = $comment_row['comment_id'];
			$comment_by = $comment_row['firstname']." ".  $comment_row['lastname'];
		?>

		<br>
		<a href="#"><?php echo $comment_by; ?></a> - <?php echo $comment_row['content']; ?>
		<br>

		<?php				
			$days = floor($comment_row['TimeSpent'] / (60 * 60 * 24));
			$remainder = $comment_row['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
			if($days > 0)
				echo date('F d, Y - H:i:sa', $comment_row['date_posted']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
				echo "A few seconds ago";		
			elseif($days == 0 && $hours == 0)
				echo $minutes.' minutes ago';
		?>
		<br>
		<?php
			}
		?>
		<hr
		&nbsp;
		<?php 
	 } ?>
					
						

</body>

<?php include('footer.php');?>

</html>