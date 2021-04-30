<html>

<head>
    <title>Main Data </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form method="post" action="" name="myform">
        <table>
            <tr>
                <th colspan="2">Karate Fight Bout</th>
            </tr>
            <tr>
                <td>Select any fight : </td>
                <td><select name="fight">
                        <option>Select fight</option>
                        <option>Kata </option>
                        <option>Kumite </option>
                        <option>Both</option>
                    </Select>
                </td>
            </tr>

            <tr>
                <td>Age :</td>
                <td><select name="age">
                        <option> 5 yr </option>
                        <option> 6-7 yr </option>
                        <option> 8-9 yr </option>
                        <option> 10-11 yr </option>
                        <option> 12-13 yr </option>
                        <option> 14-15 yr </option>
                        <option> 16-17 yr </option>
                        <option> 18-19 yr </option>
                        <option> 20-21 yr </option>
                        <option> 22-23 yr </option>
                        <option> 24-25 yr </option>
                    </select></td>
            </tr>


            <tr>
                <td colspan="2"><input type="submit" name="display" class="sub-btn" value="Display"></td>
            </tr>

            <?php
            include_once("connection.php");
            if (isset($_POST['display'])) {
                $fight = $_POST['fight'];

                if ($fight == "Kata") {

                    echo "dsd";

                    $sql = "SELECT * FROM `karate_form_data` WHERE  kata = 'yes' and kumite = 'no' ";
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
                
                else if ($fight == "Kumite") {

                    $sql = "SELECT * FROM `karate_form_data` WHERE kumite ='yes' and kata ='no' ";
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
                else if ($fight == "Both") {

                    $sql = "SELECT * FROM `karate_form_data` WHERE kumite ='yes' and kata = 'yes' ";
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
            }
            ?>
        </table>
    </form>
</body>

</html>