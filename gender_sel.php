<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>

</head>

<body>
    <form name="form" method="POST">
        <table>
            <tr>
                <td>Select Gender : </td>
                <td><select name="gender">
                        <option>Select gender</option>
                        <option>Male </option>
                        <option>Female </option>
                    </Select>
                </td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" name="display" class="sub-btn" value="Display"></td>
            </tr>

            <?php
            include_once('connection.php');
            if (isset($_POST['display'])) {
                $gen = $_POST['gender'];

                if ($gen == "Female") {

                    $sql = "SELECT * FROM `karate_form_data` WHERE gender='female' ";
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
                else if ($gen == "Male"){
                   
                    $sql = "SELECT * FROM `karate_form_data` WHERE gender='male' ";
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