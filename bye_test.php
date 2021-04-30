<html>

<head>
    <title></title>
    <!-- CSS -->
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 20px;
        }

        * {
            box-sizing: border-box;
        }

        .outer {
            margin-left: 5px;
            margin-right: -5px;
        }

        .inner {
            float: left;
            width: 50%;
            padding: 5px;
        }

        .outer::after {
            content: "";
            clear: both;

        }

        .last {
            border: 0px solid #808080;

        }
    </style>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $(".sortable").sortable();
            $(".sortable").disableSelection();
        });
    </script>
</head>

</html>

<?php

include_once("connection.php");
$player = array();
$countofplayer = array();
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
        echo  "<br> Fight:" . $fight;
    } elseif ($kumite == 'yes') {
        $fight = "Kumite";
        echo "<br> Fight:" . $fight;
    } elseif ($kata == 'yes') {
        $fight = "Kata";
        echo "<br>FIght" . $fight;
    }
 //   array_push($data, $gen, $minage, $maxage, $belt, $fight);

   // print_r($data);
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

    $sql = "select * from karate_form_data where $query order by coach";
    echo $sql;
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_num_rows($result);
    if ($row > 0) {
        echo "<table >";

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
            //print_r($c3);
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


// Return the total no of rows fetch from database
$res = mysqli_num_rows($result);
define('NUMBER_OF_PARTICIPANTS', $res);

$participants = range(1,NUMBER_OF_PARTICIPANTS);
$bracket = getBracket($participants,$player);
//var_dump($bracket);

function getBracket($participants,$player)
{
    $participantsCount = count($participants);  
    $rounds = ceil(log($participantsCount)/log(2));
    $bracketSize = pow(2, $rounds);
    if ($rounds == 1 || $rounds == 0) {
        $rounds = 2;
        $bracketSize = pow(2, $rounds);
    } else {
        $bracketSize = pow(2, $rounds);
    }
   
    $requiredByes = $bracketSize - $participantsCount;
    if(count($player) != 0)
    {

        echo sprintf('<br>Number of participants: %d<br/>%s', $participantsCount, PHP_EOL);
        echo sprintf('Number of rounds: %d<br/>%s', $rounds, PHP_EOL);
        echo sprintf('Bracket size: %d<br/>%s', $bracketSize, PHP_EOL);
        echo sprintf('Required number of byes: %d<br/>%s', $requiredByes, PHP_EOL);
        
    }


    // echo sprintf('Number of participants: %d<br/>%s', $participantsCount, PHP_EOL);
    // echo sprintf('Number of rounds: %d<br/>%s', $rounds, PHP_EOL);
    // echo sprintf('Bracket size: %d<br/>%s', $bracketSize, PHP_EOL);
    // echo sprintf('Required number of byes: %d<br/>%s', $requiredByes, PHP_EOL);    
    
    
    $matches = array(array(1,2));
    for ($round = 1; $round < $rounds; $round++) {
        $roundMatches = array();
        $sum = pow(2, $round + 1) + 1;
    
    
        foreach($matches as $match)
        {
            $home = changeIntoBye($match[0], $participantsCount);
            $away = changeIntoBye($sum - $match[0], $participantsCount);
            //    echo "<pre>";
            $roundMatches[] = array($home, $away);
            $home = changeIntoBye($sum - $match[1], $participantsCount);
            $away = changeIntoBye($match[1], $participantsCount);
            $roundMatches[] = array($home, $away);
           
        }
        
        
        $matches = $roundMatches;
    }

    
    return $matches;
    
}
//f_count(count($bracket));
//getPlayerNames($bracket, $player);

function changeIntoBye($seed, $participantsCount)
{
    //return $seed <= $participantsCount ?  $seed : sprintf('%d (= bye)', $seed);  
    return $seed <= $participantsCount ?  $seed : '0';
}
function getPlayerNames($bracket, $player)
{
  //  echo "<br> player ::";
 
    //echo "<pre>";
    //echo "Player array";
    //print_r($player);
    //echo "</pre>";
    $g_count = f_count(count($bracket));
    $pl_name = array();

   // echo "pl_name".$pl_name;
  // print_r($pl_name);
  //  echo "<br>count".count($pl_name);

    $z = 1;
    array_unshift($player, array('Bye', '-'));
    //  $group_list = array_chunk($player, ceil(count($player) / 2));

    //print_r($group_list);
    $divide = count($bracket) / $g_count;
    if ($divide > 0) {
        $brackets = array_chunk($bracket, ceil(count($bracket) / $g_count));
    } else {
        $brackets = array_chunk($bracket, ceil(count($bracket) / 1));
    }

//    $brackets = array_chunk($bracket, ceil(count($bracket) / $g_count));


    echo "<div class='outer'>";
    $i = 1;
    $info=[];
    echo "<table>";
       echo "<tr><td Colspan='2'>4th Wado National Karate Championship -2021 </td></tr> ";
       if (isset($data[1]) && !empty($data[1]) && isset($data[2]) && !empty($data[2])) {
           $info[] = $data[1] . "to " . $data[2] . " years -";
       }
       if (isset($data[0]) && !empty($data[0])) {
           $info[] .= $data[0] . "- ";
       }
       if (isset($data[3]) && !empty($data[3])) {
           $info[] .= $data[3] . "BELT";
       }
       if (isset($data[4]) && !empty($data[4])) {
           $info[] .=  $data[4];
       }
       echo "<tr><td colspan='2'>" . $info[0] . $info[1] . $info[1] . $info[2] . $info[3];
       echo "</td></tr>";
       echo "<tr><td style='padding:0px; border: 0 none;'><table><tr>";
       echo "<th>No</th>";
       echo "<th> Corner </th></tr>";
       for ($j = 0; $j < count($bracket); $j++) {


        echo "<tr>";

        echo "<td >" . $i++ . "</td>";


        $corner = array('AKA', 'AAO');


        echo "<td>$corner[0]</td>";
        echo "</tr>";
        echo "<tr>";

        echo "<td >" . $i++ . "</td>";


        echo "<td>$corner[1]</td>";
        echo "</tr>";
    }
    echo "</table></td>";
    echo "<td style='padding:0px;border: 0 none;'><table  class='$z' ><tr><th>Coach Name </th>";
    echo "<th>Player name</th>";
    echo "</tr>";
    echo "<tbody id='sortable'>";
    foreach ($brackets as $bracket) {
        
        // $mytest1++;
       // echo "<table style='border:1px solid black;' class='$z' >";
        // echo "<tr>";
        // echo "<th>No</th>";
        // echo "<th>Coach_name </th>";
        // echo "<th>Player_name </th>";

        // echo "</tr>";
       // echo "<br>  ";
        $z++;
        $sameValuePl = [];
        $sameValueCo = [];
        $Check_index = array();
        $check = array();
        $found = array();
    //    echo "<br> bracket::" . count($bracket);
      //  echo "<br>bracket:";
        //echo "<pre>";
  //      print_r($bracket);
       // echo "</pre>";
       
    foreach ($bracket as $brc) {

        $pl1  = ($player[$brc[0]][0]);
        $c1 = (($player[$brc[0]][1]));

        $pl2 = (($player[$brc[1]][0]));
        $c2 = (($player[$brc[1]][1]));



        //        echo "<br> player[brc[0]][0]". $player[$brc[0]][0];
        //      echo "<br> coach[brc[0]][1]". $player[$brc[0]][1];
        //    echo "<br> player[brc[1]][0]". $player[$brc[1]][0];

        //  echo "<br> coach[brc[1]][1]". $player[$brc[1]][1];

        echo "<td>" . $c1;
        echo "</td>";
        echo "<td>" . $pl1  . "</td>";
        echo "</tr>";
        echo "<td>" . $c2;
        echo "<td>" .   $pl2 . "</td>";
        echo "</td></tr>";

        array_push($pl_name, $pl1, $pl2);
    }

    //        echo "<pre>";
    // print_r($pl_name);
    //      echo "</pre>";
    echo "</table>";
    echo "</tbody>";

    echo "</table>";

    echo "</div>";
   // echo "</tbody>";
    //echo "</table></td></tr></table> <br>";

   // echo "<pre>";
  // print_r($bracket);
}
//echo "</div>";


    //     foreach ($bracket as $brc) {
    //         $pl1  = ($player[$brc[0]][0]);
    //         $c1 = (($player[$brc[0]][1]));
            
    //         $pl2 = (($player[$brc[1]][0]));
    //         $c2 = (($player[$brc[1]][1]));
        

    // //        echo "<br> player[brc[0]][0]". $player[$brc[0]][0];
    //   //      echo "<br> coach[brc[0]][1]". $player[$brc[0]][1];
    //     //    echo "<br> player[brc[1]][0]". $player[$brc[1]][0];
    //       //  echo "<br> coach[brc[1]][1]". $player[$brc[1]][1];
    //         echo "<td>" . $c1;
    //         echo "</td>";
    //         echo "<td>" . $pl1  . "</td>";
    //         echo "</tr>";
    //         echo "<tr><td>" . $c2;
    //         echo "<td>" .   $pl2 . "</td>";
    //         echo "</td></tr>";
    //         array_push($pl_name, $pl1, $pl2);
    //     }
    //     echo "<pre>";
    //    // print_r($pl_name);
    //     echo "</pre>";
    //     echo "</table></div>";
    }

function f_count($bracket)
{

    $count = 0;

    while ($bracket > 16) {
        $bracket = $bracket / 2;
        $count++;
    }

    $count = pow(2, $count);

    //  echo  "<br>groups = ".$count;
    return $count;
}
if ($res > 32) {
    echo "greater than 32";
    $ccount = "SELECT coach, COUNT(*) FROM `karate_form_data`where $query GROUP BY coach";
    //  echo "<br>Coach count==".$ccount;
    $cres = mysqli_query($mysqli, $ccount);
    //  echo "<br>coach result";
    //  print_r($cres);
    foreach ($cres as $cr) {
        echo "<pre>";
        print_r($cr);
        echo "</pre>";
        $cpl = " SELECT player_name,coach FROM karate_form_data where coach= '$cr[coach]'";
        $cplayer = mysqli_query($mysqli, $cpl);
        while ($pc = mysqli_fetch_array($cplayer))
         {
            echo "<pre>";
            print_r($pc);
            echo "</pre>";
        }
    }
  
}
else if(isset($coach) && !empty($coach))
{
    echo "Hello from coach";
    f_count(count($bracket));
getPlayerNames($bracket, $player);




}
else{
    echo "Hello from else";
//     f_count(count($bracket));
// getPlayerNames($bracket, $player);



}



?>
<html>

<body>
    <table>
        <tr>
            <th>Winner </th>
            <th>Sign </th>
        </tr>
        <tr>
            <td>1.________________________________________ </td>
            <td>__________________________________________ </td>
        </tr>
        <tr>
            <td>2.________________________________________ </td>
            <td>__________________________________________ </td>
        </tr>

        <tr>
            <td>3.________________________________________ </td>
            <td>__________________________________________ </td>
        </tr>

        <tr>    
            <td>4.________________________________________ </td>
            <td>__________________________________________ </td>
        </tr>
    </table>
</body>

</html>