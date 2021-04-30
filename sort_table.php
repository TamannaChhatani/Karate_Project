<table border="1" id="myTable">
 <!-- <tr>
   <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country: 
    <th onclick="sortTable(0)">Name</th>
    <th onclick="sortTable(1)">Country</th>
  </tr>
  <tr>
    <td>Berglunds snabbkop</td>
    <td>Sweden</td>
  </tr>
  <tr>
    <td>North/South</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Koniglich Essen</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>Paris specialites</td>
    <td>France</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Canada</td>
  </tr> -->
  <?php
  if (isset($_POST['display'])) {

    $gen =  $_POST['gender'];
    $kata = $_POST['kata'];
    $kumite = $_POST['kumite'];
    $belt = $_POST['belt'];
    $minage = $_POST['minage'];
    $maxage = $_POST['maxage'];
    $age = $minage . " " . $maxage . " ";
    $minweight = $_POST['minweight'];
    $maxweight = $_POST['maxweight'];
    $weight = $minweight . " " . $maxweight . " ";
    $coach = $_POST['coach'];
    $fight = $kata . " " . $kumite;
    if ($kata == 'yes' && $kumite == 'yes') {
        $fight = "kata/Kumite";
        //  echo  "<br> Fight:" . $fight;
    } elseif ($kumite == 'yes') {
        $fight = "Kumite";
        // echo "<br> Fight:" . $fight;
    } elseif ($kata == 'yes') {
        $fight = "Kata";
        //  echo "<br>FIght" . $fight;
    }
    //   array_push($data, $gen, $minage, $maxage, $belt, $fight);

    //  print_r($data);
    // Create  array to store dynamic query
    $cond = [];

    //Check the value of variable is empty or not
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
    if (isset($minage) && !empty($minage) && isset($maxage) && !empty($maxage)) {
        $cond[] .= "(age between " . $minage . "  and " . $maxage . ")";
    }

    if (isset($minweight) && !empty($minweight) && isset($maxweight) && !empty($maxweight)) {
        $cond[] .= "(weight between " . $minweight . " and " . $maxweight . ")";
    }

    if (isset($coach) && !empty($coach)) {
        $cond[] .= "coach='" . trim($coach) . "'";
    }
    $query = implode(" and ", $cond);

    // Create dynamic Query

    $sql = "select * from karate_form_data where $query order by coach , id ";
    //  echo $sql;
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_num_rows($result);
    if ($row > 0) {
        echo "<table  id='myTable'>";

        echo "<tr>";
        echo "<th>Count </th>";
        echo "<th>__________</th>";
        if ($gen) {

            $cntg = "SELECT count(case when gender='$gen' then 1 end) as Gender , count(case when kata='yes' then 1 end) as kata_y, count(case when kata='no' then 1 end) as kata_n , count(case when kumite='yes' then 1 end) as kum_y , count(case when kumite='no' then 1 end) as kum_n FROM karate_form_data where $query";
            $c = mysqli_query($mysqli, $cntg);
            $c1 = mysqli_fetch_assoc($c);
            // print_r($c1);
            echo "<th>" . $gen . "</th>";
            echo "<th>___________</th>";
            echo "<th>___________</th>";
            echo "<th>___________</th>";
            echo "<th>___________</th>";
            echo "<th>$c1[kata_y]</th>";
            echo "<th>$c1[kum_y]</th>";
            echo "<th>___________</th>";
        }
        if (empty($gen)) {
            $cntgm = "SELECT count(case when gender='male' then 1 end) as m , count(case when kata='yes' then 1 end) as kata_y, count(case when kata='no' then 1 end) as kata_n , count(case when kumite='yes' then 1 end) as kum_y , count(case when kumite='no' then 1 end) as kum_n FROM karate_form_data where $query";
            $cntgf = "SELECT count(case when gender='Female' then 1 end) as f , count(case when kata='yes' then 1 end) as kata_y, count(case when kata='no' then 1 end) as kata_n , count(case when kumite='yes' then 1 end) as kum_y ,  count(case when kumite='no' then 1 end) as kum_n FROM karate_form_data where $query";
            $c4 = mysqli_query($mysqli, $cntgf);
            $c = mysqli_query($mysqli, $cntgm);
            $c1 = mysqli_fetch_assoc($c4);
            $c3 = mysqli_fetch_assoc($c);

            // print_r($c1);
            // print_r($c3);
            echo "<th> Male/Female</th>";
            echo "<th>___________</th>";
            echo "<th>___________</th>";
            echo "<th>___________</th>";
            echo "<th>___________</th>";
            echo "<th>$c1[kata_y]</th>";
            echo "<th>$c1[kum_y]</th>";
            echo "<th>___________</th>";
        }

        echo "</tr>";
        echo " <tr>
            <th>No.</th>
            <th>Player_Name</th>
            <th>Gender</th>
            <th>Date Of Birth</th>
            <th>Belt</th>
            <th>Age</th>
            <th>Weight</th>
            <th>Kata</th>
            <th> Kumite</th>
            <th> Coach</th>
    </tr>";

        // Fetch Records from database

        while ($user_data = mysqli_fetch_assoc($result)) {

            $user_data['dob'] = date('d-m-y', strtotime($user_data['dob']));

            // Push Name and Coach Value in Player array

            array_push($player, array($user_data['player_name'], $user_data['coach']));

            // Display all the values in table

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



        echo "</table>";
    }
}
//echo "<br> Playerrr".count($player);

// Return the total no of rows fetch from database
$res = mysqli_num_rows($result);
//echo "<br> Ress=".$res;
//$final=array();
$coach_set = array();
$coach_player = array();

if ($res > 0) {
    //  echo "greater than 32";
    $ccount = "SELECT coach, COUNT(*) FROM `karate_form_data`where $query GROUP BY coach";
    // echo "<br>Coach count==" . $ccount;
    $cres = mysqli_query($mysqli, $ccount);
    //  echo "<br>coach result";
    // print_r($cres);
    foreach ($cres as $cr) {
        array_push($coach_set, $cr);
        $cpl = " SELECT player_name,coach FROM karate_form_data where  $query and coach= '$cr[coach]'";
        //  echo "<br> CPl=".$cpl;
        $cplayer = mysqli_query($mysqli, $cpl);
        while ($pc = mysqli_fetch_assoc($cplayer)) {

            array_push($coach_player, $pc);
        }
    }
    // echo "<br>Coachhh".count($coach_player);


    //  echo "----------------------------";
    // $coach_arrange=array($coach_set,$coach_player);
    // print_r($coach_arrange);
    // echo "arrange ";

    foreach ($coach_player as $k => $v) {
        $new[$v['coach']][] = $v;
    }
    // echo "Coach player count:".count($new);
    // echo "new array";
    // echo "<pre>";
    // print_r($new);
    // echo "------------------------";
} else {
    echo "<h3>No data found in this Match.Try again for different Match</h3>";
}
?>
</table>


<script>
    function sortTable(n) {
  var table,
    rows,
    switching,
    i,
    x,
    y,
    shouldSwitch,
    dir,
    switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc";
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < rows.length - 1; i++) { //Change i=0 if you have the header th a separate table.
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount++;
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

</script>