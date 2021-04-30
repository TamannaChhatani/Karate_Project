<!-- HTML Code start-->
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
<!-- PHP Code start -->

<?php
// Include Connection File

include_once("connection.php");

// Create Player array 

$player = array();
$countofplayer = array();
//$duplicateplayer=array();
$gen = "";
$kata = "";
$kumite = "";
$belt = "";
$minage = "";
$maxage = "";
$age = "";
$minweight = "";
$maxweight = "";
$weight = "";
$coach = "";
$fight = "";
$data = array();




// Gather all variables details

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
    if ($kata == 'yes') {
        $fight = "kata";
        echo  "<br> Fight:" . $fight;
    } else {
        $fight = "Kumite";
        echo "<br> Fight:" . $fight;
    }
    array_push($data, $gen, $minage, $maxage, $belt, $fight);
    //print_r($data);
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
    // echo $sql;
    // $sql="SELECT * FROM `karate_form_data` WHERE $query ";

    // Execute Query

    $result = mysqli_query($mysqli, $sql);

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

echo "<pre>";
//print_r($player);

// Return the total no of rows fethc from database
$res = mysqli_num_rows($result);


$bouts = array("4", "8", "16", "32");

define('NUMBER_OF_PARTICIPANTS', $res);

$participants = range(1, NUMBER_OF_PARTICIPANTS);
$bracket = getBracket($participants, $player);

//echo "count = ". count($bracket);

f_count(count($bracket));

// Call the Get player Function 
getPlayerNames($bracket, $player, $data);


// Function of define bracket
function getBracket($participants, $player)
{
    //echo sprintf('Number of rounds: %d<br/>%s', $rounds, PHP_EOL);

    $participantsCount = count($participants);
    $rounds = ceil(log($participantsCount) / log(2));
    $bracketSize = pow(2, $rounds);
    if ($rounds == 1 || $rounds == 0) {
        $rounds = 2;
        $bracketSize = pow(2, $rounds);
    } else {
        $bracketSize = pow(2, $rounds);
    }
    $requiredByes = $bracketSize - $participantsCount;

    //Calculate the Participants and Byes

    echo sprintf('Number of participants: %d<br/>%s', $participantsCount, PHP_EOL);
    echo sprintf('Number of rounds: %d<br/>%s', $rounds, PHP_EOL);
    echo sprintf('Bracket size: %d<br/>%s', $bracketSize, PHP_EOL);
    echo sprintf('Required number of byes: %d<br/>%s', $requiredByes, PHP_EOL);


    if ($participantsCount < 2) {
        return array();
    }

    // Arrange the players in bouts 
    $matches = array(array(1, 2));
    for ($round = 1; $round < $rounds; $round++) {
        $roundMatches = array();
        $sum = pow(2, $round + 1) + 1;


        foreach ($matches as $match) {

            $home = changeIntoBye($match[0], $participantsCount);
            $away = changeIntoBye($sum - $match[0], $participantsCount);

            $roundMatches[] = array($home, $away);
            $home = changeIntoBye($sum - $match[1], $participantsCount);
            $away = changeIntoBye($match[1], $participantsCount);
            $roundMatches[] = array($home, $away);
        }
        $matches = $roundMatches;
    }

    // Return match array
    return $matches;
}

// Put the Bye in bracket size

function changeIntoBye($seed, $participantsCount)
{
    //return $seed <= $participantsCount ?  $seed : sprintf('%d (= bye)', $seed);  
    return $seed <= $participantsCount ?  $seed : "0";
}


// Function Get player name and Coach name
function getPlayerNames($bracket, $player, $data)
{
    // Print Player name array
    
    //echo "<br> player ::";
    //print_r($player);

    $g_count = f_count(count($bracket));
    // Create blank array to Store player name and coach name
    $pl_name = array();
    $dupplayer = array();
    $repeated = array();
    $new = array();

    // echo "pl_name".$pl_name;
    //  print_r($pl_name);
    //echo "<br>count" . count($pl_name);

    $z = 1;

    // Shift one array element and store 'Bye' value in the 0 index

    array_unshift($player, array('Bye', '-'));

    // Define bracket size

    // if(count($player) > 16 ){

    $brackets = array_chunk($bracket, ceil(count($bracket) / $g_count));
    // }


    echo "<div class='outer'>";
    $info = [];
    $i = 1;
    //for ($i=0; $i < $f_count ; $i++) { 
    //$mytest1 = 0;
    //echo "<br> bracketsssss::".count($brackets);
    //print_r($brackets);

    // Set the players value in bracket position

    foreach ($brackets as $bracket) {

        echo "<table>";
        echo "<tr><td Colspan='2'>4th Wado National Karate Championship -2021 </td></tr> ";


        echo "<tr><td style='padding:0px; border: 0 none;'><table><tr>";
        echo "<th>No</th>";
        echo "<th> Corner </th></tr>";

        $i = 1;
        $z++;
        $sameValuePl = [];
        $sameValueCo = [];
        $Check_index = array();
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
        echo "<tbody class='sortable'>";

        // echo "<table style='border:1px solid black;' class='$z' >";
        // echo "<tbody class='sortable'>";
        // echo "<tr><td Colspan='4'>4th Wado National Karate Championship -2021 </td></tr> ";
        // echo "<tr><td colspan='4'> $data[1] to $data[2]  years - $data[0]- $data[3] BELT ($data[4])</td></tr>";
        // echo "<tr>";
        // echo "<th>No</th>";
        // echo "<th> Corner </th>";
        // echo "<th>Coach_name </th>";
        // echo "<th>Player_name </th>";
        // echo "</tr>";


        //$mytest2 =1;
        // echo "<br> bracket::" . count($bracket);
        //echo "<br>bracket:";
        //  print_r($bracket);

        // Fetch values from Bracket

        foreach ($bracket as $brc) {

            if (!array_search($player[$brc[0]][0], array_column($pl_name, 0)) ||  !array_search($player[$brc[1]][0], array_column($pl_name, 0))) {


                //        echo "bool_Value::" . boolval(!array_search($player[$brc[0]][0], array_column($pl_name, 0)));
                //      echo "<br>bool_Value::" . boolval(!array_search($player[$brc[1]][0], array_column($pl_name, 0)));
                //$mytest2++; 

                // Check the bracket values 

                //  echo "<br>start--------------------------------------------------------------<br>";
                //  echo "<br> brc[0]" . $brc[0];
                // echo "<br> brc[1]" . $brc[1];

                // echo "<br> player[brc[0]]::";
                // print_r($player[$brc[0]]);
                // echo "<br> player[brc[0]][0]" . $player[$brc[0]][0];
                // echo "<br> coach[brc[0]][1]" . $player[$brc[0]][1];
                //  echo "<br> player[brc[1]][0]" . $player[$brc[1]][0];
                //  echo "<br> coach[brc[1]][1]" . $player[$brc[1]][1];

                // echo "<br> player[brc[1]][0]".$player[$brc[1]][0];
                //echo "<br> coach[brc[1]][1]".$player[$brc[1]][1];

                //  echo "<br>sameValuePl:";
                //print_r($sameValuePl);
                //echo "<br>sameValueCo:";
                //print_r($sameValueCo);

                // Display the data into table cell

                $pl1 = ($player[$brc[0]][0]);
                $c1 = (($player[$brc[0]][1]));

                // Check the index value is bye or not
                if ($player[$brc[0]][0] == "Bye" || $player[$brc[1]][0] == "Bye") {
                    //  echo "in ifffff";
                    $pl2 = (($player[$brc[1]][0]));
                    $c2 = (($player[$brc[1]][1]));
                } else {

                    // Check the coach is same or not
                    if (count($sameValuePl) && count($sameValueCo)) {
                        //  echo "<br>in if";
                        $pl2 = $sameValuePl[count($sameValuePl) - 1];
                        $c2 = $sameValueCo[count($sameValueCo) - 1];

                        array_pop($sameValuePl);
                        array_pop($sameValueCo);
                        //  echo "<br> pl 2:" . $pl2;
                        // print_r($pl_name);
                        //  echo "<br>in_array(pl2,pl_name) :::: " . in_array($pl2, $pl_name);
                        $checkPlayerExist = array_search($pl2, array_column($pl_name, 0));

                        // Check the player exist or not
                        //echo "<br> checkPlayerExist :: ";
                        //  print_r($checkPlayerExist);
                        if ($checkPlayerExist) {
                            // echo "<br>in inner if";
                            $pl2 = (($player[$brc[1]][0]));
                            $c2 = (($player[$brc[1]][1]));
                        }
                        //  echo "<br> pl 2:".$pl2;
                        //         //  echo "<br> c 2  ::".$c2;
                    } else {
                        //echo "<br>in else";
                        $pl2 = (($player[$brc[1]][0]));
                        $c2 = (($player[$brc[1]][1]));
                        // $index = $brc[1];
                        //
                        //echo "<br>check index ::" . $index;
                    }

                    $test = 1;
                    // Check same coach
                    while ($c1 == $c2) {
                        // echo "<br> same coach";
                        //echo "<br> test :: " . $test;

                        if ($pl1 != $pl2) {
                            // echo "<br>player not same.";
                            array_push($sameValuePl, $pl2);
                            array_push($sameValueCo, $c2);
                        }


                        $pl2 = (($player[$brc[1] + $test][0]));
                        $c2 = (($player[$brc[1] + $test][1]));
                        $test2 = 1;
                        while (array_search($pl2, array_column($pl_name, 0))) {

                            //    echo "<br>index" . ($brc[1] + $test + $test2);
                            //  echo "<br>count" . count($player);
                            if (($brc[1] + $test + $test2) >= count($player)) {
                                $pl2 = (($player[$test2][0]));
                                $c2 = (($player[$test2][1]));
                            } else {
                                $pl2 = (($player[$brc[1] + $test + $test2][0]));
                                $c2 = (($player[$brc[1] + $test + $test2][1]));
                            }
                            //  echo "<br> while pl2" ;
                            $pl2;
                            //echo "<br>  whilec2" ;
                            $c2;
                            $test2++;
                        }
                        $test++;
                    }
                }
                array_push($pl_name, array($pl1, $c1), array($pl2, $c2));

                // Print all the player name and coach
                //  echo "<br> pl 1:" . $pl1;
                // echo "<br> cl 1:" . $c1;

                //echo "<br> pl 2:" . $pl2;
                //echo "<br> cl 2:" . $c2;
                // echo "<br>Player name array";

                //    print_r($pl_name);

                // foreach($pl_name as $key)
                // {
                //     echo "<br> Pn::"; print_r($key);
                //     echo "<br> Pn0::"; print_r($key[0]);
                //     echo "<br>Valuesss::";
                //     echo "<br>array_column(player,0) ::" ; 
                //     $index = array_search( $key[0], array_column($player,0));
                //     echo "<br> INdex==".$index;
                //     echo "<br>in_array( index,Check_index)"; print_r(in_array($index,$Check_index));
                //     if($key[0] != 'Bye' && !in_array($index,$Check_index))
                //     {
                //         array_push($Check_index, $index);
                //         echo "<br>Search array ::";
                //         print_r($Check_index);
                //     }
                //     // echo "<br>-----------------------------------------------------------------------        <br>";
                // }           

                //  print_r($Check_index);

                echo "<td>" . $c1;
                echo "</td>";
                echo "<td>" . $pl1  . "</td>";
                echo "</tr>";
                echo "<td>" . $c2;
                echo "<td>" .   $pl2 . "</td>";
                echo "</td></tr>";

                //   array_push($pl_name, $pl1, $pl2);


                //   echo "<br>end--------------------------------------------------------------<br>";
                //     }

                // echo "<br>mytest2 : ".$mytest2;
            }
        }
        echo "</tbody>";
        echo "</table></td></tr></table> <br>";
    }





    echo "</div>";

    foreach ($player as $p) {

        // Check repeated player or not

        if (array_search($p[0], array_column($pl_name, 0)) !== false) {
            // echo "in last if";

            // Check missing player
        } else {
            $playerfound =  array_search($p[0], array_column($player, 0));
            //$coachfound =  $p[1];

            //echo "<br>not found player" . $playerfound;
            array_push($new, $playerfound);
            foreach ($pl_name as $pn) {
                if (!in_array($pn[0], $pl_name)) {
                    //  echo "<br>not duplicate::";
                    if ($i == 2) {
                    }
                } else {
                    // $in =  array_search($pn[0], array_column($pl_name,0));
                    // echo '<br>duplicate = ' . $pn[0] . '<br />';
                    // echo"<br>in".$in;

                }
            }
        }
    }

    // Fetch the Current key value

    foreach ($pl_name as $current_key => $current_array) {

        // echo "current key: $current_key\n";

        // $i == 0;

        foreach ($pl_name as $search_key => $search_array) {

            if ($search_array[0] == $current_array[0] && $pl_name[$search_key][0] != 'Bye') {

                if ($search_key != $current_key) {

                    //  echo "<br>index of duplicate value :" . $search_key;
                    // echo "<br>duplicate player  found:" . $pl_name[$search_key][0];
                    // echo "<br>duplicate player coach  found:" . $pl_name[$search_key][1];
                    //     $pl_name[$search_key][0] = $playerfound;
                    //     $pl_name[$search_key][1] = $coachfound;


                    // echo "<br>in array";
                    array_push($repeated, $search_key);
                    //print_r($repeated);


                    //   echo "<br> C found" . $pl_name[$search_key][0];
                    // echo "<br> p found";

                    // echo "<br>pl_name[search_key][0]" . $pl_name[$search_key][0];
                    //    echo "<br>Coach found :".$coachfound;
                    //    array_push( $pl_name,($pl_name[$search_key][0],));
                    // $i++;
                }
            }
        }

        //echo "\n";
    }
    // echo "<br>repeated player ::";
    //  array_push($dupplayer,array($pfound,$cfound));
    //print_r($new);

    //echo "<br>Replace player name" ; 
    $pl_name[$repeated[0]][0] = $player[$new[0]][0];

    //echo "<br>Replace player coach" ; 
    $pl_name[$repeated[0]][1] = $player[$new[0]][1];


    //  print_r($pl_name);

    //echo "saDASDAFSDFDSFDWS";
    //  print_r($pl_name);

    // echo "<pre>";
    // print_r($pl_name);;
    // echo "</pre>";

    //}

    // function getPlayerNames($bracket, $player,)
    // {   
    //     $g_count = f_count(count($bracket));
    //     $pl_name = array();

    //      $z = 1;    
    //     array_unshift($player, array('Bye', '-'));
    // //  $group_list = array_chunk($player, ceil(count($player) / 2));
    //   //print_r($group_list);
    //     $brackets = array_chunk($bracket, ceil(count($bracket) / $g_count));


    //     //for ($i=0; $i < $f_count ; $i++) { 
    //     foreach ($brackets as $bracket) {

    //         $i = 1;

    //                 $z++;
    //                 $sameValuePl = [];
    //                 $sameValueCo = [];
    //         foreach ($bracket as $brc) {



    //             $pl1 = strtoupper($player[$brc[0]] [0]);
    //             $c1 = strtoupper(($player[$brc[0]][1]));

    //             if($sameValuePl && $sameValueCo){
    //                 echo "<br>in if";
    //                 $pl2 = $sameValuePl[count($sameValuePl)-1];   
    //                 $c2 = $sameValueCo[count($sameValueCo)-1];
    //                 array_pop($sameValuePl) ;
    //                 array_pop($sameValueCo) ;
    //             }else{
    //                 echo "<br>in else";
    //                 $pl2 = strtoupper(($player[$brc[1]] [0]));   
    //                 $c2 = strtoupper(($player[$brc[1]][1]));
    //             }
    //             // echo "<br> pl 1:".$pl1;
    //             // echo "<br> pl 2:".$pl2;
    //             // echo "<br> cl 1:".$c1;
    //             // echo "<br> cl 2:".$c2;
    //             // echo "<br>sameValuePl:";
    //             // print_r($sameValuePl);
    //             // echo "<br>sameValueCo:";
    //             // print_r($sameValueCo);
    //             // echo "<br>1--------------------------------------------------------------<br>";

    //             $test = 1;
    //             while($c1 == $c2){
    //                 label:
    //                 echo "<br> same coach";
    //                 echo "<br> test :: ".$test;
    //               array_push($sameValuePl,$pl2);
    //               array_push($sameValueCo,$c2);


    //               $pl2 = strtoupper(($player[$brc[1]+$test] [0])); 
    //               $c2 = strtoupper(($player[$brc[1]+$test][1]));

    //             //   echo "<br> pl 1:".$pl1;
    //             //   echo "<br> pl 2:".$pl2;
    //             //   echo "<br> cl 1:".$c1;
    //             //   echo "<br> cl 2:".$c2;
    //             //   echo "<br>sameValuePl:";
    //             //   print_r($sameValuePl);
    //             //   echo "<br>sameValueCo:";
    //             //   print_r($sameValueCo);
    //             //   echo "<br>2--------------------------------------------------------------<br>";
    //               $test++;
    //             //   if($c1 == $c2){
    //             //       echo "<br> goto";
    //             //   }
    //             }

    //             echo "<br> pl 1:".$pl1;
    //             echo "<br> pl 2:".$pl2;
    //             echo "<br> cl 1:".$c1;
    //             echo "<br> cl 2:".$c2;
    //             echo "<br>sameValuePl:";
    //             print_r($sameValuePl);
    //             echo "<br>sameValueCo:";
    //             print_r($sameValueCo);
    //             echo "<br>3--------------------------------------------------------------<br>";
    //             array_push($pl_name, $pl1, $pl2);
    //           //  print_r($pl_name);
    //         }

    //     }


    // echo "<pre>";
    // print_r($pl_name);;
    // echo "</pre>";

    foreach ($player as $p) {

        // Check repeated player or not

        if (array_search($p[0], array_column($pl_name, 0)) !== false) {
            //echo "<br>in last if";

            // Check missing player
        } else {
            $playerfound =  array_search($p[0], array_column($player, 0));
            //$coachfound =  $p[1];

            //echo "<br>not found player" . $player[$playerfound][0];

            if ($p[0] != "Bye") {
                array_push($new, $playerfound);
            }
        }
    }



    foreach ($pl_name as $current_key => $current_array) {

        // echo "current key: $current_key\n";

        // $i == 0;

        foreach ($pl_name as $search_key => $search_array) {

            if ($search_array[0] == $current_array[0] && $pl_name[$search_key][0] != 'Bye') {

                if ($search_key != $current_key) {

                    //  echo "<br>index of duplicate value :" . $search_key;
                    // echo "<br>duplicate player  found:" . $pl_name[$search_key][0];
                    // echo "<br>duplicate player coach  found:" . $pl_name[$search_key][1];
                    //     $pl_name[$search_key][0] = $playerfound;
                    //     $pl_name[$search_key][1] = $coachfound;


                    // echo "<br> arra";
                    array_push($repeated, $search_key);
                    //  print_r($repeated);


                    //   echo "<br> C found" . $pl_name[$search_key][0];
                    // echo "<br> p found";

                    // echo "<br>pl_name[search_key][0]" . $pl_name[$search_key][0];
                    //    echo "<br>Coach found :".$coachfound;
                    //    array_push( $pl_name,($pl_name[$search_key][0],));
                    // $i++;
                }
            }
        }

        //echo "\n";
    }
    // echo "<br>repeated player ::";
    //  array_push($dupplayer,array($pfound,$cfound));
    print_r($new);

    //echo "<br>Replace player name" ; 
    //     $pl_name[$repeated[0]][0] = $player[$new[0]][0];

    //echo "<br>Replace player coach" ; 
    //      $pl_name[$repeated[0]][1] = $player[$new[0]][1];
    if (count($new) > 0) {
        foreach ($new as $key => $val) {

            foreach ($pl_name as $ke => $v) {
                if ($v[0] == "") {

                    echo "<br>blank space:" . $ke;
                    echo "<br>replace name" ;
                     $pl_name[$ke][0] = $player[$new[$key]][0];
                  //  echo "<br>replace player coach" ;
                      $pl_name[$ke][1] = $player[$new[$key]][1];
                }
                if (count($repeated) > 0) {
                  //  echo "<br>Replace player name" ;
                  //   $pl_name[$repeated[0]][0] = $player[$new[$key]][0];
                   // echo "<br>Replace player coach" ;
                   //   $pl_name[$repeated[0]][1] = $player[$new[$key]][1];
                }
            }
        }

        //echo "saDASDAFSDFDSFDWS";
        print_r($pl_name);

        $newbracket = array_chunk($pl_name, ceil(count($pl_name) / $g_count));
        echo "new" . print_r($newbracket);

        foreach ($newbracket as $k) {

            echo "<table>";
            echo "<tr><td Colspan='2'>4th Wado National Karate Championship -2021 </td></tr> ";


            echo "<tr><td style='padding:0px; border: 0 none;'><table><tr>";
            echo "<th>No</th>";
            echo "<th> Corner </th></tr>";

            $i = 1;
            $z++;
            $sameValuePl = [];
            $sameValueCo = [];
            $Check_index = array();
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
            echo "<tbody class='sortable'>";
            // echo "<table style='border:1px solid black;' class='$z' >";
            // echo "<tr>";
            // echo "<th>No</th>";
            // echo "<th> Corner </th>";
            // echo "<th>Coach_name </th>";
            // echo "<th>Player_name </th>";
            // echo "</tr>";
            // $pl_names = array_chunk($bracket, ceil(count($pl_name) / $g_count));

            $i = 1;

            foreach ($k as $key) {

              //  echo "<br>  ";

               // echo "<tr>";

               // echo "<td >" . $i++ . "</td>";


                // $corner = array('AKA', 'AAO');

                echo "<td>" . $key[1];
                echo "</td>";
                echo "<td>" . $key[0]."</td>";
                echo "</tr>";
                echo "<tr>";
                // echo "<td >" . $i++ . "</td>";
                // echo "<td>$corner[1]</td>";
                // echo "<td>" . $pl_name[$k][1];
                // echo "</td>";
                // echo "<td>" .  $pl_name[$k][0]. "</td>";
                echo "</td></tr>";
            }
            echo "</tbody>";
            echo "</table></td></tr></table> ";
        }
      
    }
}


function f_count($bracket)
{

    $count = 0;

    while ($bracket > 16) {
        $bracket = $bracket / 2;
        $count++;
    }

    $count = pow(2, $count);

    //   echo  "<br>groups = ".$count;
    return $count;
}
?>