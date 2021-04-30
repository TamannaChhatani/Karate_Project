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
$pool = "";




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
    array_push($data, $gen, $minage, $maxage, $belt, $fight);
    echo "dataa array==";
    print_r($data);
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
    print_r($cond);

    // Create dynamic Query 

    $sql = "select * from karate_form_data where $query order by coach";
    echo $sql;
    if(isset($cond['coach']))
    {
        echo "coach set";
    }    

    // $sql="SELECT * FROM `karate_form_data` WHERE $query ";

    // Execute Query

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


$participants = range(1, NUMBER_OF_PARTICIPANTS);


$bracket = getBracket($participants, $player);

//echo "count = ". count($bracket);
// print_r($bracket);
// f_count(count($bracket));

// Call the Get player Function
if ($res > 0) {
    getPlayerNames($bracket, $player, $data, $pool);
} 



else {

    echo "No data found for this match.";
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



// Function of define bracket
function getBracket($participants, $player)
{
    //echo sprintf('Number of rounds: %d<br/>%s', $rounds, PHP_EOL);

    $participantsCount = count($participants);
    $rounds = ceil(log($participantsCount) / log(2));

    //echo "rounds".$rounds;
    $bracketSize = pow(2, $rounds);
    if ($rounds == 1 || $rounds == 0) {
        $rounds = 2;
        $bracketSize = pow(2, $rounds);
    } else {
        $bracketSize = pow(2, $rounds);
    }
    $requiredByes = $bracketSize - $participantsCount;

    //Calculate the Participants and Byes

    echo sprintf('<br>Number of participants: %d<br/>%s', $participantsCount, PHP_EOL);
    echo sprintf('Number of rounds: %d<br/>%s', $rounds, PHP_EOL);
    echo sprintf('Bracket size: %d<br/>%s', $bracketSize, PHP_EOL);
    echo sprintf('Required number of byes: %d<br/>%s', $requiredByes, PHP_EOL);


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
function getPlayerNames($bracket, $player, $data, $pool)
{
    // Print Player name array

    //echo "<br> player ::<br>";
    //print_r($player);
    $g_count = f_count(count($bracket));
    // Create blank array to Store player name and coach name
    $pl_name = array();
    $dupplayer = array();
    $repeated = array();
    $new = array();



    //echo "<br>count" . count($pl_name);

    $z = 1;

    // Shift one array element and store 'Bye' value in the 0 index

    array_unshift($player, array('Bye', '-'));

    // Define bracket size

    // if(count($player) > 16 ){
    $divide = count($bracket) / $g_count;
    if ($divide > 0) {
        $brackets = array_chunk($bracket, ceil(count($bracket) / $g_count));
    } else {
        $brackets = array_chunk($bracket, ceil(count($bracket) / 1));
    }

    echo "<div class='outer'>";
    $info = [];
    $i = 1;
    //for ($i=0; $i < $f_count ; $i++) { 
    //$mytest1 = 0;
    //echo "<br> bracketsssss::".count($brackets);
    //print_r($brackets);

    // Set the players value in bracket position

    foreach ($brackets as $bracket) {

        echo "<br>";
        echo "<table>";
        echo "<tr><td Colspan='2'>4th Wado National Karate Championship -2021 </td></tr> ";


        if (isset($data[1]) && !empty($data[1]) && isset($data[2]) && !empty($data[2])) {
            $info[] = $data[1] . "to " . $data[2] . " years -";
        }
        if (isset($data[0]) && !empty($data[0])) {
            $info[] .= $data[0] . "- ";
        }
        if (isset($data[3]) && !empty($data[3])) {
            $info[] .= $data[3];
        }
        if (isset($data[4]) && !empty($data[4])) {
            $info[] .=  $data[4];
        }


        echo "<tr><td colspan='2'>" . $info[0] . $info[1] . $info[2] .  $info[3];
        echo "</td></tr>";

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


                // echo "bool_Value::" . boolval(!array_search($player[$brc[0]][0], array_column($pl_name, 0)));
                //      echo "<br>bool_Value::" . boolval(!array_search($player[$brc[1]][0], array_column($pl_name, 0)));
                //$mytest2++; 

                // Check the bracket values 

                //  echo "<br>start--------------------------------------------------------------<br>";
                //echo "<br> brc[0]" . $brc[0];
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

               $pl1  = ($player[$brc[0]][0]);
                $c1 = (($player[$brc[0]][1]));

                // Check the index value is bye or not
                if ($player[$brc[0]][0] == "Bye" || $player[$brc[1]][0] == "Bye") {
                    //     echo "<br> in ifffff";
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
                            //echo "<br>in inner if";
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

                        if ($pl1 != $pl2 || count($player) == 1) {
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

                //echo "countaa   ".count($player);
                if (count($player) == 2) {

                    //    array_push($pl_name, array($pl1, $c1), array($pl2, $c2));
                }
                if (count($player) != 2) {
                    array_push($pl_name, array($pl1, $c1), array($pl2, $c2));
                }

                // Print all the player name and coach
                // echo "<br> pl 1:" . $pl1;
                //echo "<br> cl 1:" . $c1;

                //echo "<br> pl 2:" . $pl2;
                //echo "<br> cl 2:" . $c2;
                // echo "<br>Player name array";
                //echo "<pre>";
                //   print_r($pl_name);
                // echo "</pre>";

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
                // print_r($Check_index);

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
        }
    }

    // Fetch the Current key value

    foreach ($pl_name as $current_key => $current_array) {

        // echo "current key: $current_key\n";

        // $i == 0;

        foreach ($pl_name as $search_key => $search_array) {

            if ($search_array[0] == $current_array[0] && $pl_name[$search_key][0] != 'Bye') {

                if ($search_key != $current_key) {

                    //echo "<br>index of duplicate value :" . $search_key;
                    //echo "<br>duplicate player  found:" . $pl_name[$search_key][0];
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
    //  print_r($new);

    //echo "<br>Replace player name" ; 
    //  $pl_name[$repeated[0]][0] = $player[$new[0]][0];

    //echo "<br>Replace player coach" ; 
    // $pl_name[$repeated[0]][1] = $player[$new[0]][1];


    //  print_r($pl_name);


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
    if (count($player) > 2) {

        foreach ($player as $p) {

            // Check repeated player or not

            if (array_search($p[0], array_column($pl_name, 0)) !== false) {
                //echo "<br>in last if";

            } else {
                $playerfound =  array_search($p[0], array_column($player, 0));
                //$coachfound =  $p[1];

                // echo "<br>not found in pl_name::<br>" . $player[$playerfound][0];

                if ($p[0] != "Bye") {
                    array_push($new, $playerfound);
                }
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
                    //  "<br>duplicate player  found:" . $pl_name[$search_key][0];
                    //  "<br>duplicate player coach  found:" . $pl_name[$search_key][1];
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


    //echo "<br>Replace player name" ; 
    //     $pl_name[$repeated[0]][0] = $player[$new[0]][0];

    //echo "<br>Replace player coach" ; 
    //      $pl_name[$repeated[0]][1] = $player[$new[0]][1];
    if (count($new) > 0) {
        foreach ($new as $key => $val) {

            foreach ($pl_name as $ke => $v) {
                if ($v[0] == "") {

                    echo "<br>blank space:" . $ke;
                    echo "<br>replace name";
                    $pl_name[$ke][0] = $player[$new[$key]][0];
                    //  echo "<br>replace player coach" ;
                    $pl_name[$ke][1] = $player[$new[$key]][1];
                }
                if (count($repeated) > 0) {
                    //  echo "<br>Replace player name" ;
                    $pl_name[$repeated[0]][0] = $player[$new[$key]][0];
                    $pl_name[$repeated[0]][1] = $player[$new[$key]][1];

                    // echo "<br>Replace player coach" ;
                    //   $pl_name[$repeated[0]][1] = $player[$new[$key]][1];
                }
            }
        }

        // //echo "saDASDAFSDFDSFDWS";
        //  echo "<pre>";
        //  print_r($pl_name);
        //  echo "</pre>";


        if (count($pl_name) > 4) {

            $newbracket = array_chunk($pl_name, ceil(count($pl_name) / $g_count));
        }
        // echo "new" ;
        // print_r($newbracket);

        foreach ($newbracket as $k) {

            echo "<table>";
            echo "<tr><td Colspan='2'>4th Wado National Karate Championship -2021 </td></tr> ";
            /*if(isset( $data[1]) &&!empty($data[1]) && isset($data[2]) && !empty($data[2]) )
        {
        $info[]=$data[1]."to ". $data[2] ." years -";
        }
        if(isset( $data[0]) &&!empty($data[0]))
        {
        $info[].=$data[0]."- ";
        }
        if(isset($data[3]) && !empty($data[3]))
        {
            $info[] .= $data[3]. "BELT";
        }
        if(isset($data[4]) && !empty($data[4]))
        {
            $info[] .=  $data[4]  ;
        } */
            // echo "<tr><td colspan='2'>" .$info[0].$info[1] .$info[2].$info[3];
            //echo "</td></tr>";


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
                echo "<td>" . $key[0] . "</td>";
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
            echo "<br>";
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

<html>

<body>
    <table style="border:0px solid #808080;">
        <tr>
            <th>Winner </th>
            <th>Sign </th>
        </tr>
        <tr>
            <td>1.___________________________________________ </td>
            <td>_____________________________________________ </td>
        </tr>
        <tr>
            <td>2.___________________________________________ </td>
            <td>_____________________________________________ </td>
        </tr>

        <tr>
            <td>3.___________________________________________ </td>
            <td>_____________________________________________ </td>
        </tr>

        <tr>
            <td>4.___________________________________________ </td>
            <td>_____________________________________________ </td>
        </tr>
    </table>
</body>

</html>