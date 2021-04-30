<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <form method="POST">
            <table>
                <tr>
                <th>No.</th>
                <th>PLayer_Name</th>
                <th>Gender</th>
                <th>Date of Birth</th> 
                <th>Belt</th>
                <th>Age</th>
                <th>Weight</th> 
                <th>Kata</th>
                <th> Kumite</th>
                <th> Coach</th>
                </tr>
                <?php
                    include_once('connection.php');
                   // if(isset($_POST['display']))
                 //{}   
                 $sql="SELECT * FROM `karate_form_data` WHERE gender='male' or gender='female'";
                 $result = mysqli_query($mysqli,$sql);

                 while($user_data = mysqli_fetch_array($result)) {


                    $user_data['dob'] = date('d-m-y',strtotime($user_data['dob']));
                
                     echo "<tr>";
                     echo "<td>".$user_data['id']."</td>";
                     echo "<td>".$user_data['player_name']."</td>";
                     echo "<td>".$user_data['gender']."</td>";
                     echo "<td>".$user_data['dob']."</td>";
                     echo "<td>".$user_data['belt']."</td>";
                     echo "<td>".$user_data['age']."</td>";
                     echo "<td>".$user_data['weight']."</td>";
                     echo "<td>".$user_data['kata']."</td>";
                     echo "<td>".$user_data['kumite']."</td>";
                     echo "<td>".$user_data['coach']."</td>";
                 }
                

                ?>


                
      
            
            
            </table>
        
        
        
        
        
        </form>
    
    </body>



</html>




<?php
    include_once('connection.php');
    if(isset($_POST['display']))
    {


    }

?>