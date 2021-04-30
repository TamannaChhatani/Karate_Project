<!-- Stop error reporting -->
<?php
error_reporting(E_ALL ^ E_WARNING);
?>

<!-- HTML tag Start -->
<html>
<head>
    <title>Main Data </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form method="post" action="" name="myform">
        <table>
            <tr>
                <th colspan="2" style="text-align: center;">Karate Fight Bout</th>
            </tr>
            <tr>
                <td>Select Gender : </td>
                <td><select name="gender">
                        <option value="" selected>Select gender</option>
                        <option value="male">male </option>
                        <option value="female">female </option>
                    </Select>
                </td>
            </tr>

            <tr>
                <td>Kata: </td>
                <td><input type="radio" name="kata" value="yes">Yes
                    <input type="radio" name="kata" value="no">No
                </td>
            </tr>

            <tr>
                <td> Kumite: </td>
                <td><input type="radio" name="kumite" value="yes">Yes
                    <input type="radio" name="kumite" value="no">No
                </td>
            </tr>

            <tr>
                <td>Select Belt :</td>
                <td><select name="belt">
                        <option value="" selected>Select Belt</option>
                        <option value="black">Black</option>
                        <option value="brown">Brown</option>
                        <option value="color">Color</option>
                    </select></td>
            </tr>

            <tr>
                <td>Age :</td>
                <td><input type="text" name="minage" placeholder="Min age" size="5"> TO
                    <input type="text" name="maxage" size="5" placeholder="Max age">
                </td>
            </tr>

            <tr>
                <td>Weight :</td>
                <td>
                    <input type="text" name="minweight" placeholder="Min Weight" size="7"> TO
                    <input type="text" name="maxweight" size="7" placeholder="Max Weight">
                </td>
            </tr>

            <tr>
                <td>Coach/District/State :</td>
                <td><select name="coach">
                <!-- Retrive coach value from database -->
                        <option value="" selected >Select Coach</option>
                        <?php
                        include_once("connection.php");
                        $sql = "SELECT DISTINCT coach FROM `karate_form_data`";
                        $result = mysqli_query($mysqli, $sql);
                        while ($c_name = mysqli_fetch_array($result)) {
                            echo "<option value=' " . $c_name['coach'] . "'>" . $c_name['coach'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" name="display" class="sub-btn" value="Display"></td>
            </tr>
        </table>
        <?php
       // error_reporting(E_ERROR | E_WARNING | E_PARSE);
        include_once("connection.php");
        if (isset($_POST['display'])) {
            // Define variables
            $gen =  $_POST['gender'];
            $kata = $_POST['kata'];
            $kumite = $_POST['kumite'];
            $belt = $_POST['belt'];
            $minage = $_POST['minage'];
            $maxage = $_POST['maxage'];
            $age = $minage . " " . $maxage . " ";
         //   echo $age;
            $minweight = $_POST['minweight'];
           // echo $minweight;
            $maxweight = $_POST['maxweight'];
          //  echo $maxweight;
            $weight = $minweight . " " . $maxweight . " ";
           // echo $weight;
            $coach = $_POST['coach'];

            // Create condition array for dynamic query
            $cond = [];

            // Check all value is empty or not

            if (isset($gen) && !empty($gen)) {
                $cond[] = "gender='" . $gen . "'  ";
            }

            if (isset($kata) && !empty($kata)) {
                $cond[] .= "kata='" . $kata . "' ";
            }

            if (isset($kumite) && !empty($kumite)) {
                $cond[] .= "kumite='" . $kumite . "'";
            }

            if (isset($belt) && !empty($belt)) {
                $cond[] .= "belt='" . trim($belt) . "'";
            }

            if (isset($age) && !empty($age)) {
                $cond[] .= "(age between " . $minage . "  and " . $maxage . ")";
            }

            if (isset($weight) && !empty($weight)) {
                $cond[] .= "(weight between " . $minweight . " and " . $maxweight . ")";
            }

            if (isset($coach) && !empty($coach)) {
                $cond[] .= "coach='" . trim($coach) . "'";
            }

            print_r($cond);
            
            $query = implode(" and ", $cond);

            // Execute query

            $sql = "select * from karate_form_data where $query";
            echo $sql;
            $result = mysqli_query($mysqli, $sql);
            // Fetch data and display it
 
           
                while ($user_data = mysqli_fetch_assoc($result)) {  
                $user_data['dob'] = date('d-m-y', strtotime($user_data['dob']));

                echo "<table >";
                echo " <tr>
                       <th>No.</th>
                       <th>Player_Name</th>
                       <th>Gender</th>
                       <th>Date Of Birth</th>  
                       <th>Belt</th>
                       <th>Age</th> 
                       <th>Weight</th> 
                       <th>Kata</th>
                       <th>Kumite</th>
                       <th> Coach</th> 
                       </tr>";
              
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
             echo "</table>";        
        // End of Php code
        ?>
    </form>
</body>
</html>