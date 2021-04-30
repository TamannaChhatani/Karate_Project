

<?php
// include connection file
include_once("connection.php");
include('header.php');
// Check if form is submitted for user update
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$belt=$_POST['belt'];
    $age=$_POST['age'];
    $weight=$_POST['weight'];
    $kata=$_POST['kata'];
    $kumite=$_POST['kumite'];
    $coach=$_POST['coach'];
	$competitiondate=$_POST['competitiondate'];

	// update user data
	$result = mysqli_query($mysqli, "UPDATE karate_form_data SET player_name='$name',gender='$gender',dob='$dob', belt='$belt',age=$age,weight='$weight',kata='$kata',kumite='$kumite',coach='$coach',competitiondate='$competitiondate' WHERE id='$id'");
    echo "Hello Record updated sucessfully";
	// Redirect to homepage to display updated user
	header("Location: index.php");
}
?>
<?php

// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM karate_form_data WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['player_name'];
	$gender = $user_data['gender'];
	$dob = $user_data['dob'];
	$belt=$user_data['belt'];
    $age=$user_data['age'];
    $weight=$user_data['weight'];
    $kata=$user_data['kata'];
    $kumite=$user_data['kumite'];
    $coach=$user_data['coach'];
	$competitiondate=$user_data['competitiondate'];


}
?>
<html>
<head>
	<title>Edit User Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<a href="index.php" style="color:black; text-decoration: none; text-align:center"><img src="home.png" width="50px" height="50px"> Home</a>
	<br/><br/>

	<form name="update_user" method="post" action="update.php" enctype="multipart/form-data">
		<table  style="  margin-left: auto;margin-right: auto;border:0;">
			<tr>
				<td>Player Name:</td>
				<td><input type="text" class="input-grup" name="name" value=<?php echo $name;?>></td>
			</tr>
            <tr>
				<td>Gender :</td>
				<td><input type="text" class="input-grup" name="gender" value=<?php echo $gender;?>></td>
			</tr>
			
			<tr>
				<td>Date of Birth :</td>
				<td><input type="date"class="input-grup" name="dob" value=<?php echo $dob;?>></td>
			</tr>
			<tr>
				<td>Competition Date:</td>
				<td><input type="date" class="input-grup" name="competitiondate" value=<?php echo $competitiondate;?>></td>
			</tr>
			<tr>
				<td>Belt :</td>
				<td><input type="text"class="input-grup" name="belt" value=<?php echo $belt;?>></td>
			</tr>
			<tr>
				<td>Age :</td>
				<td><input type="text"class="input-grup" name="age" value="<?php echo $age;?>"></td>
			</tr>
			
			<tr>
				<td>Weight :</td>
				<td><input type="text"class="input-grup" name="weight" value="<?php echo $weight;?>"></td>
			</tr>
            
			<tr>
				<td>Kata :</td>
				<td><input type="text"class="input-grup" name="kata" value="<?php echo $kata;?>"></td>
			</tr>
            
			<tr>
				<td>kumite :</td>
				<td><input type="text"class="input-grup" name="kumite" value="<?php echo $kumite;?>"></td>
			</tr>
            
			<tr>
				<td>Coach :</td>
				<td><input type="text"class="input-grup" name="coach" value="<?php echo $coach;?>"></td>
			</tr>
			<tr>

			<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>	
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php 
	include('footer.php');
?>