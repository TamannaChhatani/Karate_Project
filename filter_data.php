<html>

<head>

</head>

<body>

<form method="POST">
<table width='80%' border=1>

 <tr>
     <th>No.<th>PLayer_Name</th> <th>Gender</th> <th>Date Of Birth</th> <th>Competition Date</th>  <th>Belt</th> <th>Age</th> <th>Weight</th> 
      <th>Kata</th> <th> Kumite</th>  <th> Coach</th> 
 </tr>
</body>


<?php
 include_once("connection.php");

 if(isset($_POST['display'])){
// Storing Selected Value In Variable
 //echo "You have selected :" .$selected_val;  // Displaying Selected Value
  if( !empty($_POST['gender']))  

    {
        echo "fnjbfjbjfb";
        $sql="SELECT * FROM `karate_form_data` WHERE gender='male'";
        $result = mysqli_query($mysqli,$sql);

        echo $sql;
 
   

    // while($user_data = mysqli_fetch_array($result)) {


    //     // $user_data['dob'] = date('d-m-y',strtotime($user_data['dob']));
    //     // $user_data['competitiondate'] = date('d-m-y',strtotime($user_data['competitiondate']));
    
    
    //      echo "<tr>";
    //      echo "<td>".$user_data['id']."</td>";
    //      echo "<td>".$user_data['player_name']."</td>";
    //      echo "<td>".$user_data['gender']."</td>";
    //      echo "<td>".$user_data['dob']."</td>";
    //      echo "<td>".$user_data['competitiondate']."</td>";
    //      echo "<td>".$user_data['belt']."</td>";
    //      echo "<td>".$user_data['age']."</td>";
    //      echo "<td>".$user_data['weight']."</td>";
    //      echo "<td>".$user_data['kata']."</td>";
    //      echo "<td>".$user_data['kumite']."</td>";
    //      echo "<td>".$user_data['coach']."</td>";
        

 
 }

 }
//}
?>

</table>
 </form>
</html>
