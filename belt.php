<html>
    <head>
        <title>Main Data </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
            <form method="post" action="" name="myform">
                <table >
                <tr><th colspan="2">Karate Fight Bout</th>
                </tr>
                    <tr>
                        <td>Select Belt : </td>
                        <td><select name="belt" >
                        <option>Select Belt</option>
                        <option>Black </option>
                        <option>Brown </option> 
                        <option>Color</option>                   
                        </Select>                  
                       </td>             
                        </tr>
                   
                        <tr>
                    <td colspan="2"><input type="submit" name="beltbtn" class="sub-btn" value="Display"></td>
                    </tr>
               
             

<?php
    include('connection.php');
    if(isset($_POST['beltbtn']))
    {
            $belt=$_POST['belt'];
            if($belt=="Black")
            {
                echo "cbjb";
                $sql = "SELECT * FROM `karate_form_data` WHERE belt='Black' ";
                $result = mysqli_query($mysqli, $sql);


                while ($user_data = mysqli_fetch_array($result)) {

                    $user_data['dob'] = date('d-m-y', strtotime($user_data['dob']));

                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['player_name'] . "</td>";
                    echo "<td>" . $user_data['gender'] . "</td>";
                    echo "<td>" . $user_data['dob'] . "</td>";
                    echo "<td>" . $user_data['belt'] . "</td>";
                    echo "<td>" . $user_data['age'] . "</td>";
                    echo "<td>" . $user_data['weight'] . "</td>";
                    echo "<td>" . $user_data['kata'] . "</td>";
                    echo "<td>" . $user_data['kumite'] . "</td>";
                    echo "<td>" . $user_data['coach'] . "</td>";
                }
    
         }
         elseif($belt=="Brown")
         {
            $sql = "SELECT * FROM `karate_form_data` WHERE belt='Brown' ";
            $result = mysqli_query($mysqli, $sql);


            while ($user_data = mysqli_fetch_array($result)) {

                $user_data['dob'] = date('d-m-y', strtotime($user_data['dob']));

                echo "<tr>";
                echo "<td>" . $user_data['id'] . "</td>";
                echo "<td>" . $user_data['player_name'] . "</td>";
                echo "<td>" . $user_data['gender'] . "</td>";
                echo "<td>" . $user_data['dob'] . "</td>";
                echo "<td>" . $user_data['belt'] . "</td>";
                echo "<td>" . $user_data['age'] . "</td>";
                echo "<td>" . $user_data['weight'] . "</td>";
                echo "<td>" . $user_data['kata'] . "</td>";
                echo "<td>" . $user_data['kumite'] . "</td>";
                echo "<td>" . $user_data['coach'] . "</td>";
            }
       

         }
         elseif($belt=="Color")
         {
            $sql = "SELECT * FROM `karate_form_data` WHERE belt='Other color' ";
            $result = mysqli_query($mysqli, $sql);

            echo"dvv";
            while ($user_data = mysqli_fetch_array($result)) {

                $user_data['dob'] = date('d-m-y', strtotime($user_data['dob']));

                echo "<tr>";
                echo "<td>" . $user_data['id'] . "</td>";
                echo "<td>" . $user_data['player_name'] . "</td>";
                echo "<td>" . $user_data['gender'] . "</td>";
                echo "<td>" . $user_data['dob'] . "</td>";
                echo "<td>" . $user_data['belt'] . "</td>";
                echo "<td>" . $user_data['age'] . "</td>";
                echo "<td>" . $user_data['weight'] . "</td>";
                echo "<td>" . $user_data['kata'] . "</td>";
                echo "<td>" . $user_data['kumite'] . "</td>";
                echo "<td>" . $user_data['coach'] . "</td>";

            }
         }


    }

?>
   </table>
    </form>
    </body>
</html>