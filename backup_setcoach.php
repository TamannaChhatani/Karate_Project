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
$set_coach = array();
$bracketSize = "";
$rounds = "";
$coach_store = array();
//$final= array();

$new = array();
$player_c = array();
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

    // Create dynamic Query

    $sql = "select * from karate_form_data where $query order by coach , id ";
    //  echo $sql;
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
//echo "<br> Playerrr".count($player);

// Return the total no of rows fetch from database
$res = mysqli_num_rows($result);
//echo "<br> Ress=".$res;
//$final=array();
$coach_set = array();
$coach_player = array();

if ($res > 32) {
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
}


//define('NUMBER_OF_PARTICIPANTS', $res);

$participants = range(1, $res);
$bracket = getBracket($participants, $player, $new);


function getBracket($participants, $player, $new)
{
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
    if (count($player) != 0) {

        echo sprintf('<br>Number of participants: %d<br/>%s', $participantsCount, PHP_EOL);
        echo sprintf('Number of rounds: %d<br/>%s', $rounds, PHP_EOL);
        echo sprintf('Bracket size: %d<br/>%s', $bracketSize, PHP_EOL);
        echo sprintf('Required number of byes: %d<br/>%s', $requiredByes, PHP_EOL);
    }

    $bouts = $bracketSize / 32;
    echo "<br> Bouts=" . $bouts;

    // echo sprintf('Number of participants: %d<br/>%s', $participantsCount, PHP_EOL);
    // echo sprintf('Number of rounds: %d<br/>%s', $rounds, PHP_EOL);
    // echo sprintf('Bracket size: %d<br/>%s', $bracketSize, PHP_EOL);
    // echo sprintf('Required number of byes: %d<br/>%s', $requiredByes, PHP_EOL);


    $matches = array(array(1, 2));
    //   $final_second = array();
    for ($round = 1; $round < $rounds; $round++) {
        $final = array();
        $roundMatches = array();
        $sum = pow(2, $round + 1) + 1;
        // echo "<br> Sum " . $sum;
        $flag = 0;
        foreach ($matches as $match) {
            // echo "<br>start-----------------------------------------------";
            // echo "<pre>";
            // //echo "<br> Round matches in for loop="; print_r($roundMatches);
            //echo "<br> FInal=";

            //print_r($final);

            $home1 = changeIntoBye($match[0], $participantsCount);
            $away1 = changeIntoBye($sum - $match[0], $participantsCount);
            // echo "<br> Match [0]".$match[0];
            // echo "<br>Home 1 :" . $home1;
            // echo "<br>Away 1 :" . $away1;
            // echo "<br>-----------------------------------------------";

            $roundMatches[] = array($home1, $away1);
            // $roundMatches = array($home1, $away1);


            //   array_push($final,$home1,$away1);
            $home2 = changeIntoBye($sum - $match[1], $participantsCount);
            $away2 = changeIntoBye($match[1], $participantsCount);
            //$away2 = 2222;
            // echo "<br>-----------------------------------------------";
            // echo "<br> Match [1]".$match[1];
            // echo "<br>Home 2 :" . $home2;
            // echo "<br>Away 2 :" . $away2;
            // echo "<br>end-----------------------------------------------";

            $roundMatches[] = array($home2, $away2);

            // echo "<br> final 123 :: "; print_r($final);



            // if ($sum >= $bracketSize) {

            //     echo "<br>  flag 1.1 :: ".$flag;
            //     $flag = (($flag * 32) >= $bracketSize) ? 0 : $flag;
            //     // echo "<br>  flag 1.1.1:: ".$flag;
            //     // echo " <br> Hellooo bouts";
            //     if ($home1 != 0) {
            //         //  echo "<br> Hello home 1";

            //         $temp1 = setcoach($bouts, $bracketSize,$participantsCount, $flag, $final);
            //         //  echo "<br> ROund matchesss";print_r($roundMatches[$temp1]);
            //         //  while($roundMatches[$home1] != 0 )
            //         //  {
            //         //     echo "in while";
            //         $final[$temp1] = $home1;
            //         //            echo "<br>temp 1==".$temp1;
            //         // echo "<br> final 1 :: "; print_r($final);
            //         $flag++;
            //         $flag = (($flag * 32) >= $bracketSize) ? 0 : $flag;
            //           echo "<br> home 1 flag =".$flag;
            //         //  }
            //     }
            //     // else
            //     // {

            //     // array_push($final,$home1);
            //     // }
            //     if ($away1 != 0) {
            //         //  echo "<br> Hello away 1";
            //         $temp3 =  setcoach($bouts, $bracketSize, $participantsCount,$flag, $final);

            //         $final[$temp3] = $away1;
            //         //  echo "<br>temp 3==".$temp3;
            //         //echo "<br> final 3 :: "; print_r($final);
            //         $flag++;
            //         $flag = (($flag * 32) >= $bracketSize) ? 0 : $flag;
            //         echo "<br> home 2 flag=".$flag;
            //     }


            //     if ($home2 != 0) {
            //         //   echo "<br> Hello home 2";
            //         $temp2 =  setcoach($bouts, $bracketSize,$participantsCount, $flag, $final);
            //         $final[$temp2] = $home2;
            //         //echo "<br>temp 2==".$temp2;
            //         //echo "<br> final 2 :: "; print_r($final);
            //         $flag++;
            //         $flag = (($flag * 32) >= $bracketSize) ? 0 : $flag;
            //         //echo "<br> away 1 flag=".$flag;
            //     }



            //     if ($away2 != 0) {
            //         //echo "<br> Hello away 2";
            //         $temp4 =  setcoach($bouts, $bracketSize,$participantsCount, $flag, $final);
            //         $final[$temp4] = $away2;
            //         //echo "<br>temp 4==".$temp4;
            //         //echo "<br> final  4:: "; print_r($final);
            //         $flag++;
            //         $flag = (($flag * 32) >= $bracketSize) ? 0 : $flag;
            //         //echo "<br> away 2 flag=".$flag;
            //     }
            //     // else
            //     // {

            //     // array_push($final,$away2);
            //     // }


            // }
            // echo "<br> Save function ";

            // //saveplayer_data($home1, $away1, $home2, $away2);
            // $set_coach = array($home1, $away1, $home2, $away2);
            // echo "Final in away";

            // print_r($set_coach);
            // //   echo "<br> Round matches in for loop end="; print_r($roundMatches);
            //
            //  echo "<br> FInal end=";
            // $final= array_merge($final_home,$final_away);





            // if($player[$home1][1] == $player[$away2][1])
            // {
            //     echo "<br>in if player array".$home1." ".$away2;
            //     echo "<br>".$player[$home1][0] . " " . $player[$away2][0];
            //     echo "<br>".$player[$home1][1] . " " . $player[$away2][1];

            // }
            //  echo "<br>end-----------------------------------------------";
        }
        // if($home != '0' && $away != '0')
        // {
        //     echo "<br>in if 'Bye'";
        // }



        // $final_second = $set_coach;
        //  echo "final second";
        // print_r($final_second);
        $matches = $roundMatches;
        // echo "round";
        echo "<pre>";
    }

    setplayers($participantsCount, $bouts, $bracketSize, $requiredByes, $flag, $new, $final);




    return $matches;
    // return $final_second;
}
f_count(count($bracket));
getPlayerNames($bracket, $player);
print_r($player);

function changeIntoBye($seed, $participantsCount)
{
    //return $seed <= $participantsCount ?  $seed : sprintf('%d (= bye)', $seed);
    // echo "<br> Seed".$seed;
    // echo "<br> Part".$participantsCount;
    return $seed <= $participantsCount ?  $seed : '0';
}
function getPlayerNames($bracket, $player,)
{
    // echo "<br> player ::";

    // //echo "<pre>";
    // echo "Player array";
    // //print_r($player);
    // echo "</pre>";
    $g_count = f_count(count($bracket));
    $pl_name = array();

    // echo "pl_name".$pl_name;
    //print_r($pl_name);
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
    $info = [];
    $i = 1;
    $alpha = "A";


    foreach ($brackets as $bracket) {
        //      $alpha++;
        //    echo "<br> Alpha ++==".$alpha;

        //  echo "<br>";
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
        echo "<tr><td colspan='2'>" . $info[0] . $info[1] . $info[2] . $info[3] . "     Pool-" . $alpha;
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
        $alpha++;
        echo "</table></td>";
        echo "<td style='padding:0px;border: 0 none;'><table  class='$z' ><tr><th>Coach Name </th>";
        echo "<th>Player name</th>";
        echo "</tr>";
        echo "<tbody class='sortable'>";


        // $mytest1++;
        //   echo "<br> bracket::" . count($bracket);
        // echo "<br>bracket:";
        //  echo "<pre>";
        // print_r($bracket);
        //echo "</pre>";


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
        echo "</tbody>";
        echo "</table></td></tr></table> <br>";

        echo "<pre>";
        print_r($bracket);
    }
    echo "</div>";
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
$final = array();

//function setcoach($player, $pl_no, $bouts, $bracketSize, $rounds, $flag, $final)
function setcoach($bouts, $bracketSize, $participantsCount, $requiredByes, $flag, $final, $sub_val)
{
    echo "<br>start-----------------------------------------------";

    //  echo "<br> pl no";
    //  $pl_no = $pl_no-1;

    //   if(($player[$pl_no][1]== $player[$pl_no-1][1]))
    // {
    echo "<br> flag=" . $flag . "<br> Bouts=" . $bouts;
    //   echo "<br> bracketSize-(bracketSize-0) ==".$bracketSize-($bracketSize-0);
    //   echo "<br>bracketSize-(bracketSize-(flag*32)))==".$bracketSize-($bracketSize-($flag*32));
    // $pl_set = ($flag < $bouts) ? ($bracketSize - ($bracketSize - ($flag * 32))) : $bracketSize - ($bracketSize - 0);

    $pl_set = ($bracketSize - ($bracketSize - ($flag * 32)));
    // echo "<br> set coach Bracket size=".$bracketSize;
    //echo "<br> set coach Flag =".$flag;
    //   echo "<br> set coach final[pl_set] ==".print_r($final[$pl_set]). "
    // echo "<br> start pl set== " . $pl_set;
    // echo "<br>pl_set-1=".$pl_set-1;
    $check_flag = "";
    $plus = 0;
    $a = 1;
    $b = 32;
    $c = 0;
    $imp = array();
    $pl_set++;
    $x = 1;
    echo "<br>pl set ==" . $pl_set;
    echo "<br> flag==" . $flag . "   x==" . $x;
    echo "<br>sub val :: ";
    print_r($sub_val);
    //echo "<br>final[pl_set]=";
    //print_r($final[$pl_set]);
    // echo "<br>final_array"; print_r($final);
    $bycnt = floor($requiredByes / $bouts);
    // echo "Bye count==" . $bycnt;
    $byecheck = $requiredByes - ($bycnt * $bouts);
    // echo " By check= " . $byecheck;

    $byset = array();
    for ($k = 0; $k < $bouts; $k++) {
        //  echo " <br> in for ==";
        if ($k < $byecheck) {
            $bset = $bycnt + 1;
        } else {
            $bset = $bycnt;
        }
        array_push($byset, array($bset, ""));
    }



    //create imp array
    for ($i = 0; $i < $bouts; $i++) {
        array_push($imp, array($a, $b));
        $c = $b;
        $a = $b + 1;
        $b = $c + 32;
    }
    //echo "<br>imp_array";print_r($imp) ;

    // $istest = 0;
    // foreach ($final as $key => $value) {


    //     // if ($check_flag !== $flag) {
    //     //     $plus = 0;
    //     //     $flag++;
    //     //     echo "in zero";
    //     // }
    //     for($flag = 0 ;$flag <$bouts;$flag++ )
    //     {

    //         if ($key >= $imp[$flag][0] && $key <= $imp[$flag][1]) {

    //             echo "<br>h".$imp[$flag][0];
    //             echo "<br>k".$imp[$flag][1];
    //             echo "<br>key=".$key;
    //             $plus++;
    //             $byset[$flag][1] = $plus;
    //         }

    //         $plus = 0;
    //     }
    //     //    $check_flag = $flag;
    //     //$istest++;
    // }

    for ($y = 0; $y < $bouts; $y++) {
        foreach ($final as $key => $value) {
            // if ($check_flag !== $flag) {
            //     $plus = 0;
            //     $flag++;
            //     echo "in zero";
            // }
            if ($key >= $imp[$y][0] && $key <= $imp[$y][1]) {

                // echo "<br>h".$imp[$y][0];
                // echo "<br>k".$imp[$y][1];
                //  echo "<br>key=".$key;
                $plus++;
                $byset[$y][1] = $plus;
            }
        }
        $plus = 0;
        //    $check_flag = $flag;
        //$istest++;
    }

    // echo "istest" . $istest;
    //  echo  "<br>bye of one = " . $byset[$flag][1];
    //echo "<br>bye of zero = " . $byset[$flag][0];
    // $y = 2;
    $half_flag = TRUE;

    $low = $imp[$flag][0];
    $high = $imp[$flag][1];
    $mid = floor(($low + $high) / 2);
    if ($pl_set >= $low &&  $pl_set <= $high) {



    while (($final[$pl_set] != "" )) {
        echo "<br>Start------------------------------------------------------------------";
        echo "<br> While loop";
        echo "<br> Lower==" . $low;
        echo "<br> Mid==" . $mid;
        echo "<br> High==" . $high;

        if ($final[$pl_set]['coach'] == $sub_val['coach']) {
            //     echo "<br> if loop";

            $m1 = set_mid($low, $mid);
            echo "<br> m1==" . $m1;
            $m2 = set_mid($mid, $high);
            echo "<br> m2==" . $m2;
            if ($final[$mid] == "") {
                $pl_set = $mid;
                $half_flag = false;
                echo "<br> inner if loop";
            } else if ($final[$m1] == "") {
                $pl_set = $m1;
                echo "<br>m1".$m1;            
                echo "<br> inner else if 1 loop";
                $half_flag = FALSE;
            } else if ( $final[$m2] == "") {
                $pl_set = $m2;
                echo "<br> inner else if 2 loop";
                $half_flag = FALSE;
            }
            else if ( $final[set_mid($low,$m1)] == "" ) {
                $pl_set = set_mid($low,$m1);
                echo "<br> inner else if 3 loop";
                $half_flag = FALSE;
            }
            else if ( $final[set_mid($mid,$m2)] == "" ) {
                $pl_set = set_mid($mid,$m2);
                echo "<br> inner else if 4 loop";
                $half_flag = FALSE;
            }
            else if ( $final[set_mid($m1,$mid)] == "" ) {
                $pl_set = set_mid($m1,$mid);
                echo "<br> inner else if 5 loop";
              //  $half_flag = FALSE;
            }
            else if ($final[set_mid($m2,$high)] == "" ) {
                $pl_set = set_mid($m2,$high);
                echo "<br> inner else if 6 loop";
              //  $half_flag = FALSE;
            }
            

            // While loop
            // Lower==1
            // Mid==16
            // High==32
            // m1==8
            // m2==24
            // Lower==1
            // Mid==16
            // High==32
            //   set coach  Pl set  array == 1

            // if ($final[$mid] == "") {
            //     $pl_set = $mid;
            //     $half_flag = false;
           
            //     echo "<br> inner if loop";
            // } else if ($final[$m1] == "") {
            //     $pl_set = $m1;
            //     $half_flag = FALSE;
            
            //     echo "<br> inner else if 1 loop";
            // } else if ( $final[$m2] == "" ) {
            //     $pl_set = $m2;
            //     echo "<br> inner else if 2 loop";
            //     $half_flag = FALSE;
            
            // } else {
            //     //$mid = set_mid($low, $m1);

            //     echo "<br> inner else loop == ";

            //     if ($final[set_mid($low, $m1)] != "") {

            //         echo "<br>final of mid";
            //         echo "<br> Lower==" . $low;
            //         echo "<br> Mid==" .  $mid;
            //         echo "<br> High==" . $high;
            //         echo "<br>M1 = " . $m1;
            //         echo "<br>m2 = " . $m2;
            //         $low = $mid;
            //         //    $mid = set_mid($m1, $m2);
            //         //    $high = $m2;
            //         $mid = set_mid($low, $high);
            //         // if ($final[$mid] != "") {
            //         //     echo "check if ";
            //         // } else {
            //         //     echo "check else";
            //         // }
            //     // } else if ($final[set_mid($m1, $mid)] == "" && $final[$m1] != "" && $final[$mid] != "") {
            //     //     echo "in check else if";
            //     // }
            //     }
            //      else {
            //         echo "in else";
            //         $high = $m1;
            //         $mid = set_mid($low, $high);
            //     }

            //     echo "<br> on ifLower==" . $low;
            //     echo "<br>on if Mid==" .  $mid;
            //     echo "<br>on if High==" . $high;
            //     echo "<br>on if m1==" . $m1;
            //     echo "<br>on if m2==" . $m2;


            //   //  echo "<br>1== final[set_mid]".$final[set_mid($m1, floor(($imp[$flag][0] + $imp[$flag][1]) / 2))];
            //     //echo "<br>2==final[m1]";print_r($final[$m1]);
            //     //echo "<br>3==final[set_mid(low, m1)]".$final[set_mid($low, $m1)];

            //     // if ($final[set_mid($m1, floor(($imp[$flag][0] + $imp[$flag][1]) / 2))] == ""  && $final[$m1] != "" &&  $final[set_mid($low, $m1)] != "" ) {
            //     //      echo "in check else if";
            //     // }
            //     if(set_mid($low,$m1)== "")
            //     {
            //         echo "check the set mid value";
            //     }

            // }
            echo "<br> Lower==" . $low;
            echo "<br> Mid==" .  $mid;
            echo "<br> High==" . $high;

            //echo "<br> Hello flag";

            // if ($pl_set >= $low &&  $pl_set <= $high) {

            //     if($pl_set != '')
            //     {

            //         $high=$mid;
            //         echo "<br>HIgh in if==".$high;
            //         $mid_half=floor(($low+$high)/2);
            //         echo "<br>Mid in half in if==".$mid_half;

            //     }
            //     // else
            // {
            //     $low=$mid;
            //     echo "<br> low in else==".$low;
            //     $mid_shalf=floor(($low+$high)/2);
            //     echo "<br> mid half in else==".$mid_shalf;
            // }


            //  }
        } else {
            echo "<br> else";
            // $pl_set++;
        }
        echo "<br>   set coach  Pl set  array == " . $pl_set;
        echo "<br>End--------------------------------------------------------";
    }
    
}
    echo "<pre>byearray";
    print_r($byset);
    
    
    //$pl_set--;
    return $pl_set;
    //  return  ($roundMatches[$pl_set]== '')  ? $roundMatches[$pl_set] : ($pl_set + 1);
    //}
    // }
}
function set_mid($low, $high)
{
    $mid = floor(($low + $high) / 2);
    //   $mid = (($low-1) + $high) / 2;

    return $mid;
}

// function saveplayer_data($home1, $away1, $home2, $away2)
// {
//     $coach_store=array($home1, $away1, $home2, $away2);
//     //echo "coach store data";
//    // print_r($coach_store);
//     return $coach_store;
// }
function setplayers($participantsCount, $bouts, $bracketSize, $requiredByes, $flag, $new, $final)
{
    //$flag=0;
    //  $flag = (($flag * 32) >= $bracketSize) ? 0 : $flag;
    //$flag++;
    // echo " <br> Flag 1 in set player=".$flag;
    // echo "<br> participants".$participantsCount;
    // echo "<br> Byee==".$requiredByes;
    //$byArr=$new['AAAA'];
    //  echoprint_r($byArr);
    $byArr = array();
    //print_r($byArr);
    //$byArr['AAAA']=array('player_name'=>'Bye','coach'=>'AAAA');
    // array_push($byArr,array('player_name'=>'Bye','coach'=>'AAAA'));
    //print_r($byArr);


    for ($b = 0; $b < $requiredByes; $b++) {
        //    $AAAA=array("Bye","AAAA");
        //  echo "Hello from byy";
        array_push($byArr, array('player_name' => 'Bye', 'coach' => 'AAAA'));
        // $new=array("AAABB","AAAA") + $new;
        // $byArr array(array("Bye","AAAA"));
        //   array_push($byArr,array(array("Bye","AAAA")));
        //    array_push($byArr,[]);
    }

    // print_r($byArr);
    $myArr = array("AAAA" => $byArr);
    //  echo "<br> Byy count".count($new);
    //echo "<br>my array1 ="; print_r($myArr);
    //array_push($new,$myArr);
    // echo "<br>my array 22 =";
    // array_unshift($new,$myArr);
    $midArr = array_merge($myArr, $new);  //  added 'Bye' array into mid array.
    // print_r($midArr);

    //$new=array_merge($new,$myArr);

    //    echo "<br>my array 2=";
    //     print_r($myArr["AAAA"]);
    //    // array_push($myArr,array("AAAA"=>$byArr));
    //  print_r($myArr);


    // echo "<br> BOuts==".$bouts;
    // echo "<br> Flag==".$flag;
    //   echo "<br> New array";
    //   print_r($new);
    //   echo "COunt of new array==".count($new);
    //foreach ($new as $key => $value) {
    foreach ($midArr as $key => $value) {
        // $flag=0;
        //echo "count value";
        //  print_r(count($value));
        foreach ($value as $sub_key => $sub_val) {
            // echo "<br> Start-------------------------------";
            //  echo "<br> Sub keyy=";
            // print_r($sub_key);
            // echo "<br>sub value player <br>";
            // print_r($sub_val);
            //  foreach($sub_val as $k => $v)
            //  {
            //      echo "\t".$k . "=".$v."\n";
            //  }

            //  echo "<br> Before set coach flag==" . $flag;
            //  echo "<br> Bss=" . $bracketSize;
            $flag = (($flag * 32) >= $bracketSize) ? 0 : $flag;
            //  echo "<br> home 1 flag =" . $flag;
            $temp1 = setcoach($bouts, $bracketSize, $participantsCount, $requiredByes, $flag, $final, $sub_val);

            $flag++;
            //  echo "<br> After set coach flag==" . $flag;
            // echo " <br> Flag 1.1 in set player=".$flag;

            //  echo "<br> ROund matchesss";print_r($roundMatches[$temp1]);
            //  while($roundMatches[$home1] != 0 )
            //  {
            //     echo "in while";
            echo "<br>temp 1==" . $temp1;
            $final[$temp1] = $sub_val;

            // echo "<br> final 1 :: ";
            // print_r($final);
            echo "<br>sorting array=";
            // echo "final array counts" . count($final);
            ksort($final);
            print_r($final);
        }
        //  exit;


        echo "<br> End-------------------------------";
    }



    //$flag=0;
    //   $flag = (($flag * 32) >= $bracketSize) ? 0 : $flag;
    //     $flag++;
    //     echo " <br> Flag 1.1=".$flag;
}

?>