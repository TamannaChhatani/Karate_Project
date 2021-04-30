<html>
    <head>
 
    <style>
        tbody tr:nth-child(odd) {
  background-color:lightgray;
}

body
{
    background-image: linear-gradient(
118deg
,Red, black,blue);
}
tbody tr:nth-child(even) {
  background-color:white;
}
tbody th
{
   
    background-color: grey;

}

tfoot tr {
background-color: #f0ad4e;
background-repeat:no-repeat;
}



caption {
  font-family: 'Rock Salt', cursive;
  padding: 20px;
  font-style: italic;
  caption-side: bottom;
  color: #666;
  text-align: right;
  letter-spacing: 1px;
}
</style>
    </head>
    <?php include('header.php'); ?>
<form method="POST">
 
 <table width='100%'>
     <tbody>

 <tr>
     <th>No.<th>PLayer_Name</th> <th>Gender</th> <th>Date Of Birth</th> <th>Competition Date</th>  <th>Belt</th> <th>Age</th> <th>Weight</th> 
      <th>Kata</th> <th> Kumite</th>  <th> Coach</th> <th>Update/Delete</th>
 </tr>
 <?php

 include_once("connection.php");

 $sql = "SELECT * FROM `karate_form_data` ";

 $result = mysqli_query($mysqli,$sql);
 
 while($user_data = mysqli_fetch_array($result)) {


    $user_data['dob'] = date('d-m-y',strtotime($user_data['dob']));
     $user_data['competitiondate'] = date('d-m-y',strtotime($user_data['competitiondate']));


     echo "<tr>";
     echo "<td>".$user_data['id']."</td>";
     echo "<td>".$user_data['player_name']."</td>";
     echo "<td>".$user_data['gender']."</td>";
     echo "<td>".$user_data['dob']."</td>";
     echo "<td>".$user_data['competitiondate']."</td>";
     echo "<td>".$user_data['belt']."</td>";
     echo "<td>".$user_data['age']."</td>";
     echo "<td>".$user_data['weight']."</td>";
     echo "<td>".$user_data['kata']."</td>";
     echo "<td>".$user_data['kumite']."</td>";
     echo "<td>".$user_data['coach']."</td>";


     echo "<td><a href='update.php?id=$user_data[id]'> <img class='update' src='update.png' height='20px' width='20px'/> </a>   <a href='delete.php?id=$user_data[id]'><img class='delete' src='delete.png' width='20px' height='20px'></a></td></tr>";
 }
 ?>
 <tfoot>
 <tr>
 <td colspan="12" align="center">
 <a href="insert.php" style="text-decoration: none;font-weight:800;color:black "><img class="addnewuser" src="addnewuser.png" width="30px">Add New User</a><br/><br/>
 </td>
 </tr>
 </tfoot>


     </tbody>
 </table>
 <a href="fpage.php" style="text-decoration: none;font-weight:800;color:black "><img class="addnewuser" src="back.png" width="50px;">Back</a><br/><br/>
 </form>
<?php include('footer.php'); ?>
 



 </html>