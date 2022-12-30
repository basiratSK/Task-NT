<!DOCTYPE html>
<html>
<head>
	<link href="jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<?php include('dbconn.php'); ?>
    <?php include('session.php'); include('header.php'); ?>
   
</head>

<body>

<table class="table">
    <tr>
        <th>User ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Action</th>
    </tr>
    <?php 
        $username   = $member_row['username'];
        $password   = $member_row['password'];  //while($r = $results->fetch_assoc()){
         $query = "SELECT * FROM user WHERE username= '$username' AND password='$password'";
         $results = mysqli_query($conn, $query);
             while ($r = mysqli_fetch_array($results)) {
    ?>
        <tr>
        <td><?php echo $r['user_id']?></td>
        <td><?php echo $r['firstname']?></td>
        <td><?php echo $r['lastname']?></td>
        <td><?php echo $r['username']?></td>
        <td><?php echo $r['role']?></td>
        <td><?php if($r['role']=='Editor'){ ?>
        <a href="editorview.php">View Posts</a>
        <?php }else{ ?>
        <a href="home.php">View Posts</a>
        <?php }?>
        </td>
        
        </tr>
    <?php 
    }
    ?>
</table>

<br>

<?php include('scripts.php');?>

</body>
</html>