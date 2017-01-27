<?php 
session_start();
$pageTitle = "User";
include '../inc/config.php';
include '../inc/database.php';
include '../inc/header.php';
include '../inc/nav2.php';
$username = $_SESSION['n'];
$query = "SELECT * FROM user where username LIKE '%$username%'";
$result = $db->query($query);
?>
<div class="row">
	<div class="col-sm-12 col-md-12">
		<h1 style="padding: 20px;">Welcome <?php echo $_SESSION['n'];?>!</h1>
		<table class="table table-bordered">
		   <?php while($rows = $result->fetch()){?>
				<tr>
					<td>First Name: </td>
					<td><?php echo $rows['fname'];?></td>
				</tr>
				<tr>
					<td>Last Name: </td>
					<td><?php echo $rows['lname'];?></td>
				</tr>
				<tr>
					<td>Age: </td>
					<td><?php echo $rows['age'];?></td>
				</tr>
				<tr>
					<td>Course: </td>
					<td><?php echo $rows['course'];?></td>
				</tr>
				<tr>
					<td>Year: </td>
					<td><?php echo $rows['year_level'];?></td>
				</tr>
		   <?php }?>
		</table>
	</div>
</div>
<?php include '../inc/footer.php';?>