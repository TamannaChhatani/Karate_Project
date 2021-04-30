<html>

<head>
    <title></title>
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
        td:nth-child(even) {
            background-color: #f2f2f2;
        }

        *{
            box-sizing: border-box;
        }
        .outer{
            margin-left: 5px;
            margin-right:-5px ;
        }
        .inner{
            float: left;
            width: 50%;
            padding: 5px;
        }
        .outer::after
        {
            content: "";
            clear: both;
            border: 1px solid #ddd;
        }

        
    </style>
</head>

</html>

<?php

include_once("connection.php");
$player = array();

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

    $cond = [];

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

    $sql = "select * from karate_form_data where $query order by coach";
    echo $sql;
    // $sql1="select * from karate_form data where $sql order by $coach";
    // $sql="SELECT * FROM `karate_form_data` WHERE $query ";

    $result = mysqli_query($mysqli, $sql);
    echo "<table >";
    echo " <tr>
    <th>No.</th><th>Player_Name</th> <th>Gender</th> <th>Date Of Birth</th>   <th>Belt</th> <th>Age</th> <th>Weight</th> 
    <th>Kata</th> <th> Kumite</th>  <th> Coach</th> 
    </tr>";


    while ($user_data = mysqli_fetch_assoc($result)) {

        $user_data['dob'] = date('d-m-y', strtotime($user_data['dob']));
        array_push($player, array($user_data['player_name'], $user_data['coach']));
        // array_push($player, $user_data['coach'] );


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

$res = mysqli_num_rows($result);
$bouts = array("4", "8", "16", "32");
define('NUMBER_OF_PARTICIPANTS', $res);

$participants = range(1, NUMBER_OF_PARTICIPANTS);
$bracket = getBracket($participants,$player);
echo "<pre>";
//print_r($bracket);
echo "</pre>";

//echo "count = ". count($bracket);

f_count(count($bracket));

getPlayerNames($bracket, $player);

function getBracket($participants,$player)
{
    print_r($player);
    $participantsCount = count($participants);
    $rounds = ceil(log($participantsCount) / log(2));
    $bracketSize = pow(2, $rounds);
    $requiredByes = $bracketSize - $participantsCount;

    echo sprintf('Number of participants: %d<br/>%s', $participantsCount, PHP_EOL);
   echo sprintf('Number of rounds: %d<br/>%s', $rounds, PHP_EOL);
    echo sprintf('Bracket size: %d<br/>%s', $bracketSize, PHP_EOL);
    echo sprintf('Required number of byes: %d<br/>%s', $requiredByes, PHP_EOL);

    if($bracketSize > 32)
    {
        echo"greater";
       // f_count($bracketSize);
     }

    if ($participantsCount < 2) {
        return array();
    }

    $matches = array(array(1, 2));
    $flag1 = 0;
    $flag2 = 0;
    for ($round = 1; $round < $rounds; $round++) {
      //
      //  echo "<br>round :: ".$round;
        $roundMatches = array();

        $sum = pow(2, $round + 1) + 1;
        //echo '<br>matches ::: '.count($matches);
        foreach ($matches as $match) {
           
            $home = changeIntoBye($match[0], $participantsCount);
            
            $away = changeIntoBye($sum - $match[0], $participantsCount);
           // foreach ($matches as $match) 
            //{
              /*  echo "<br>home :: ".$home;
            echo "<br>away :: ".$away ; 
            print_r($roundMatches);
            echo "<br> home player :: ".$player[$home][0];
            echo "<br> away player :: ".$player[$away][0];
            echo "<br> home coach :: ".$player[$home][1];
            echo "<br> away coach :: ".$player[$away][1];
            
                if( in_array($home,$roundMatches)){ 
                        echo "<br> if 1";
                        echo "<br>home ::: ".$home;
                        echo "<br>away :: ".$away;
                }
                elseif(in_array($away,$roundMatches))
                {
                    echo "<br> else if 1";
                        echo "<br>home ::: ".$home;
                        echo "<br>away :: ".$away;
               
                }
                elseif( (in_array($home,$roundMatches) && in_array($away,$roundMatches)))
                {
                    echo "<br> else if 1.1";
                    echo "<br>home ::: ".$home;
                    echo "<br>away :: ".$away;
           
            
                } */
            //}
          /*  if($player[$home][1] == $player[$away][1]){
                echo "<br> in if 1";
                $away = changeIntoBye(($sum + 1) - $match[0], $participantsCount);
                $flag1 ++;
            }else if($flag1 == 1){
                echo "<br>else if";
                $away = changeIntoBye(($sum -1) - $match[0], $participantsCount);
            } */
            
            
            //echo "<br>1.2-------------------------------------<br>";
            $roundMatches[] = array($home, $away);

            //-----------------------------------------------
            //print_r($roundMatches);
            //echo "<br>1.2-------------------------------------<br>";


            $home = changeIntoBye($sum - $match[1], [$participantsCount]);
            $away = changeIntoBye($match[1], $participantsCount);
           
            // echo "<br>home :: ".$home;
            // echo "<br>away :: ".$away ; 
            // echo "<br> home player :: ".$player[$home][0];
            // echo "<br> away player :: ".$player[$away][0];
            // echo "<br> home coach :: ".$player[$home][1];
            // echo "<br> away coach :: ".$player[$away][1];
            // echo "<br>2.1-------------------------------------<br>";

          /*  if( in_array($home,$roundMatches)){ 
                echo "<br> if 2";
                echo "<br>home ::: ".$home;
                echo "<br>away :: ".$away;
        }
        elseif(in_array($away,$roundMatches))
        {
            echo "<br> else if 2";
                echo "<br>home ::: ".$home;
                echo "<br>away :: ".$away;
       
        }
        elseif( (in_array($home,$roundMatches) && in_array($away,$roundMatches)))
        {
            echo "<br> else if 2";
            echo "<br>home ::: ".$home;
            echo "<br>away :: ".$away;
   
    
        }
    
          /*  if($player[$home][1] == $player[$away][1]){
                echo "<br> in if 2";
                $away = changeIntoBye(($sum +1) - $match[1], $participantsCount);
                $flag2 ++;
            }else if($flag2 == 1){
                $away = changeIntoBye(($sum -1) - $match[1], $participantsCount);
            }*/
            //echo "<br>home :: ".$home;
            //echo "<br>away :: ".$away ; 
           // echo "<br> home player :: ".$player[$home][0];
            //echo "<br> away player :: ".$player[$away][0];
            //echo "<br> home coach :: ".$player[$home][1];
            //echo "<br> away coach :: ".$player[$away][1];
            //echo "<br>2.2-----------------------------------------------<br>";
            
            $roundMatches[] = array($home, $away);
          
            print_r($roundMatches);
            //echo "<br>-------------------------------------------------------------------------------------------------------------------<br>";


        }
        //  exit;
        $matches = $roundMatches;
        print_r($matches);
    }

    // exit;
    return $matches;

   
}


function changeIntoBye($seed, $participantsCount)
{
    //return $seed <= $participantsCount ?  $seed : sprintf('%d (= bye)', $seed);  
    return $seed <= $participantsCount ?  $seed : "0";
}

function getPlayerNames($bracket, $player,)
{   echo "<br> player ::";
    print_r($player);
    $g_count = f_count(count($bracket));
    $pl_name = array();

     $z = 1;    
    array_unshift($player, array('Bye', '-'));
//  $group_list = array_chunk($player, ceil(count($player) / 2));
  //print_r($group_list);
    $brackets = array_chunk($bracket, ceil(count($bracket) / $g_count));
   
   
    echo "<div class='outer'>";
    //for ($i=0; $i < $f_count ; $i++) { 
        $mytest1 = 0;
        echo "<br> bracketsssss::".count($brackets);
        print_r($brackets);
    foreach ($brackets as $bracket) {
        $mytest1++;
        echo "<table style='border:1px solid black;' class='$z' >";
        echo "<tr>";
        echo "<th>No</th>";
        echo "<th>Coach_name </th>";
        
        echo "<th>Player_name </th>";
        //echo "<th>aas</th>";
        echo "</tr>";
        $i = 1;
        echo "<br>  ";
        $z++;
        $sameValuePl = [];
        $sameValueCo = [];
        $mytest2 =1;
        echo "<br> bracket::".count($bracket);
        // echo "<br>bracket:";
        print_r($bracket);
    

        foreach ($bracket as $brc) {
            $mytest2++;    
            echo "<br>start--------------------------------------------------------------<br>";
               echo "<br> brc[0]".$brc[0];
            echo "<br> player[brc[0]]".$player[$brc[0]];
            echo "<br> player[brc[0]][0]".$player[$brc[0]][0];
            echo "<br> coach[brc[0]][1]".$player[$brc[0]][1];
            // echo "<br> player[brc[1]][0]".$player[$brc[1]][0];
            // echo "<br> coach[brc[1]][1]".$player[$brc[1]][1];
        


        //     echo "<tr>";
        //     echo "<td rowspan=2>" . $i++ . "</td>";
        //     $pl1 = strtoupper($player[$brc[0]][0]);
        //     $c1 = strtoupper(($player[$brc[0]][1]));
            
        //     if($sameValuePl && $sameValueCo){
        //         echo "<br>in if";
        //         $pl2 = $sameValuePl[count($sameValuePl)-1];   
        //          $c2 = $sameValueCo[count($sameValueCo)-1];
        //          array_pop($sameValuePl);
        //          array_pop($sameValueCo);
        //         //  echo "<br> pl 2:".$pl2;
        //         //  echo "<br> c 2 ::".$c2;
        //     }else{
        //         echo "<br>in else";
        //         $pl2 = strtoupper(($player[$brc[1]][0]));   
        //         $c2 = strtoupper(($player[$brc[1]][1]));
        //     }

        //     // echo "<br> pl 1:".$pl1;
        //     // echo "<br> pl 2:".$pl2;
        //     // echo "<br> cl 1:".$c1;
        //     // echo "<br> cl 2:".$c2;
        //     // echo "<br>sameValuePl:";
        //     // print_r($sameValuePl);
        //     // echo "<br>sameValueCo:";
        //     // print_r($sameValueCo);
            
        //     // if( ($pl1=='Bye') || ($pl2=='Bye') ||  ($pl1=='') || ($pl2=='')){
        //    // if(!in_array($pl1,$pl_name) && !in_array($pl2,$pl_name)&& ($pl1=='Bye') && ($pl2=='Bye')){
        //             // echo" <br>player not in array.";    

                    
                    
                    
                    
        //             $test = 1;
        //             while($c1 == $c2){
        //                 echo "<br> same coach";
        //                 echo "<br> test :: ".$test;
        //                 if ($pl1 != $pl2){
        //                     echo "<br>player not same.";
        //                     array_push($sameValuePl,$pl2);
        //                     array_push($sameValueCo,$c2);
        //                 }
        //                 $pl2 = strtoupper(($player[$brc[1]+$test] [0])); 
        //                 $c2 = strtoupper(($player[$brc[1]+$test][1]));
        //                 //   echo "<br>2--------------------------------------------------------------<br>";
        //                 $test++;
        //             }
        //             echo "<br> pl 1:".$pl1;
        //              echo "<br> pl 2:".$pl2;
        //              echo "<br> cl 1:".$c1;
        //              echo "<br> cl  2:".$c2;
        //              echo "<br>sameValuePl:";
        //              print_r($sameValuePl);
        //              echo "<br>sameValueCo:";
        //                print_r($sameValueCo);
        // echo "<td>" . $c1 ;
        // echo "</td>";
        // echo "<td>" .$pl1  . "</td>";
        // echo "</tr>";
        // echo "<tr><td>" .$c2;
        // echo "<td>" .   $pl2. "</td>";
        // echo "</td></tr>";
        
        // array_push($pl_name, $pl1, $pl2);
        // echo "<br>Hiii<br>";
        // print_r($pl_name);
        echo "<br>end--------------------------------------------------------------<br>";
        }
        echo "<br>mytest2 : ".$mytest2;
        }
        echo "<br>mytest1 : ".$mytest1;

        echo "</table>";
    }
    echo "</div>";

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
   





function f_count($bracket){

    $count = 0;

    while($bracket > 16)
    {
        $bracket = $bracket/2;
        $count++;
    }

     $count =pow(2,$count);

 //   echo  "<br>groups = ".$count;
    return $count;  
}