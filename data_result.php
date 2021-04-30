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
            border: 1px solid #ddd;
        }
    </style>
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
$bracket = getBracket($participants, $player);
echo "<pre>";
//print_r($bracket);
echo "</pre>";

//echo "count = ". count($bracket);

f_count(count($bracket));
getPlayerNames($bracket, $player);

function getBracket($participants, $player)
{
    $participantsCount = count($participants);
    $rounds = ceil(log($participantsCount) / log(2));
    $bracketSize = pow(2, $rounds);
    $requiredByes = $bracketSize - $participantsCount;

    echo sprintf('Number of participants: %d<br/>%s', $participantsCount, PHP_EOL);
    echo sprintf('Number of rounds: %d<br/>%s', $rounds, PHP_EOL);
    echo sprintf('Bracket size: %d<br/>%s', $bracketSize, PHP_EOL);
    echo sprintf('Required number of byes: %d<br/>%s', $requiredByes, PHP_EOL);


    if ($participantsCount < 2) {
        return array();
    }

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

    return $matches;
}



function changeIntoBye($seed, $participantsCount)
{
    //return $seed <= $participantsCount ?  $seed : sprintf('%d (= bye)', $seed);  
    return $seed <= $participantsCount ?  $seed : "0";
}

function getPlayerNames($bracket, $player,)
{
    echo "<br> player ::";
    print_r($player);
    $g_count = f_count(count($bracket));
    $pl_name = array();

   // echo "pl_name".$pl_name;
   print_r($pl_name);
    echo "<br>count".count($pl_name);

    $z = 1;
    array_unshift($player, array('Bye', '-'));
    //  $group_list = array_chunk($player, ceil(count($player) / 2));
    //print_r($group_list);
    $brackets = array_chunk($bracket, ceil(count($bracket) / $g_count));


    echo "<div class='outer'>";
    //for ($i=0; $i < $f_count ; $i++) { 
    //$mytest1 = 0;
    //echo "<br> bracketsssss::".count($brackets);
    //print_r($brackets);
    foreach ($brackets as $bracket) {
        
        // $mytest1++;
        echo "<table style='border:1px solid black;' class='$z' >";
        echo "<tr>";
        echo "<th>No</th>";
        echo "<th>Coach_name </th>";
        echo "<th>Player_name </th>";

        echo "</tr>";
        $i = 1;
        echo "<br>  ";
        $z++;
        $sameValuePl = [];
        $sameValueCo = [];
        $Check_index = array();
        $check = array();
        $found = array();

        //$mytest2 =1;
        echo "<br> bracket::" . count($bracket);
        echo "<br>bracket:";
        print_r($bracket);


        foreach ($bracket as $brc) {


          if(!array_search($player[$brc[0]][0], array_column($pl_name,0)) ||  !array_search($player[$brc[1]][0], array_column($pl_name,0))){
        //    if(!in_array($brc[0],$Check_index) && !in_array($brc[1],$Check_index)){

            echo "bool_Value::".boolval(!array_search($player[$brc[0]][0], array_column($pl_name,0)));
                echo "<br>bool_Value::".boolval(!array_search($player[$brc[1]][0], array_column($pl_name,0)));
              
                //$mytest2++;    
                echo "<br>start--------------------------------------------------------------<br>";
                echo "<br> brc[0]" . $brc[0];
                echo "<br> brc[1]" . $brc[1];
                
                // echo "<br> player[brc[0]]::";
                // print_r($player[$brc[0]]);
                echo "<br> player[brc[0]][0]". $player[$brc[0]][0];
                echo "<br> coach[brc[0]][1]". $player[$brc[0]][1];
                echo "<br> player[brc[1]][0]". $player[$brc[1]][0];
                echo "<br> coach[brc[1]][1]". $player[$brc[1]][1];
                
                // echo "<br> player[brc[1]][0]".$player[$brc[1]][0];
                //echo "<br> coach[brc[1]][1]".$player[$brc[1]][1];
                
                echo "<br>sameValuePl:";
                print_r($sameValuePl);
                echo "<br>sameValueCo:";
                print_r($sameValueCo);

                echo "<tr>";
                echo "<td rowspan=2>" . $i++ . "</td>";

                 if(array_search($player[$brc[0]][0], array_column($pl_name,0)) && $player[$brc[0]][0] != "Bye")
                 {
                     echo"<br>check p1";
                    $g = array_search($player[13][0], array_column($pl_name,0));
                    echo"<br>ch".$g."<br>";

                    

                     //$pl1 = ($player[$brc[0]][0]);
                    //$c1 = (($player[$brc[0]][1]));

                    // foreach($player as $key_player){

                    //     if($key_player != "Bye"){
                    //         array_push($check,$key_player[0]);
                    //     }
                    // }
                    //     foreach($pl_name as $v){

                    //         if($v != "Bye"){
                    //             array_push($found,$v[0],);
                    //         }
                    //      }

                        // foreach($pl_name as $key){
                            
                        //     // echo"<br>".$key_player[0];
                        //     if( !in_array($key_player[0],$key))
                        //     {
                        //        // echo "<br>".$key_player[0];
                        //        array_push( $found,array_search($key_player[0], array_column($player,0)))  ;

                        //     }
                        // }
                        
                    }

                    
                     echo"abcde";
                     print_r($check);
                     print_r($found);

                 
                //   elseif($player[$brc[0]][0] == "Bye"){
                      $pl1 = ($player[$brc[0]][0]);
                      $c1 = (($player[$brc[0]][1]));
                //   }
                    
                if( $player[$brc[0]][0] == "Bye" || $player[$brc[1]][0] == "Bye"){
                    echo "<br>in ifffff";
                    $pl2 = (($player[$brc[1]][0]));
                    $c2 = (($player[$brc[1]][1]));
                }else{
                
            if (count($sameValuePl) && count($sameValueCo) ) {
                echo "<br>in if";
                $pl2 = $sameValuePl[count($sameValuePl) - 1];
                $c2 = $sameValueCo[count($sameValueCo) - 1];

                array_pop($sameValuePl);
                array_pop($sameValueCo);
                echo "<br> pl 2:".$pl2;
               // print_r($pl_name);
                echo "<br>in_array(pl2,pl_name) :::: ".in_array($pl2,$pl_name);
                $checkPlayerExist = array_search( $pl2, array_column($pl_name,0));
                echo "<br> checkPlayerExist :: ";
                print_r($checkPlayerExist);
                if( $checkPlayerExist){
                    echo "<br>in inner if";
                    $pl2 = (($player[$brc[1]][0]));
                    $c2 = (($player[$brc[1]][1]));
                }
                //  echo "<br> pl 2:".$pl2;
                //         //  echo "<br> c 2  ::".$c2;
            } else {
                echo "<br>in else2";
                $pl2 = (($player[$brc[1]][0]));
                $c2 = (($player[$brc[1]][1]));
               // $index = $brc[1];
               //
               //echo "<br>check index ::" . $index;
            }
            
            $test = 1;
            while ($c1 == $c2)  {
                echo "<br> same coach";
                echo "<br> test :: " . $test;
                if ($pl1 != $pl2  ) {
                    echo "<br>player not same.";
                    array_push($sameValuePl, $pl2);
                    array_push($sameValueCo, $c2);  
                }
                

                    echo " <br>delete ";
                    $pl2 = (($player[$brc[1] + $test][0]));
                    $c2 = (($player[$brc[1] + $test][1]));
                   // unset($player[$brc[1] + $test][0]);
                    //unset($player[$brc[1] + $test][1]);
                
               

                $test2 =1;
                while(array_search($pl2, array_column($pl_name,0))){

                    echo"<br>v1";
                    var_dump( boolval(array_search($pl2, array_column($pl_name,0))) );
                    echo "<br>index".($brc[1] + $test+$test2);
                    echo "<br>count".count($player);
                    if( ($brc[1] + $test+$test2) >= count($player) )
                    {
                        $pl2 = (($player[$test2][0]));
                        $c2 = (($player[$test2][1]));
                    }
                    else{
                        $pl2 = (($player[$brc[1] + $test+$test2][0]));
                        $c2 = (($player[$brc[1] + $test+$test2][1]));
                      
                    }
                    echo"<br> while pl2".$pl2;
                    echo"<br>  whilec2".$c2;
                    $test2++;

                }
                    $test++;
            }
        } 
            array_push($pl_name, array($pl1,$c1),array( $pl2,$c2));

            echo "<br> pl 1:".$pl1;
            echo "<br> cl 1:".$c1;
            echo "<br> pl 2:".$pl2;
            echo "<br> cl 2:".$c2;
                    
          

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
            echo "<tr><td>" . $c2;
            echo "<td>" .   $pl2 . "</td>";
            echo "</td></tr>";

        //    array_push($pl_name, $pl1, $pl2);
        //     $indexp1= array_search($pl1, array_column($player,0)) ;
        //     echo "<br>indexp1:".$indexp1;
        //     $indexp2= array_search($pl2, array_column($player,0)) ;
        //     echo "<br>indexp2:".$indexp2."<br>";
            
        //     if(($indexp1 ) != 0 )
        //     {
        //        if($indexp1>1)
        //        {
        //         unset($player[$indexp1+1]);
        //         print_r($player);
        //        }
        //         else
        //         {
        //             unset($player[$indexp1]);
        //             print_r($player);
        //         }

        //     }
        //     if(($indexp2 ) != 0)
        //     {
        //       if($indexp2>1)
        //        {
        //         unset($player[$indexp2+1]);
        //         print_r($player);
        //        }
        //         else
        //         {
        //             unset($player[$indexp2]);`
        //             print_r($player);
        //        }
          }
            echo "<br>end--------------------------------------------------------------<br>";
         //     }
    
        // echo "<br>mytest2 : ".$mytest2;
   
    }

  }
 // echo " <br>Player name array  sss::";print_r($pl_name);
  //}
  echo "</table>";
  
  echo "</div>";

  //echo " <br> Player array  saass::";print_r($player);

    

foreach($player as $p )
    {​​​​​​​​

     if(array_search($p[0], array_column($pl_name,0)) !== false)
        {​​​​​​​​
            echo"in last if";
        }​​​​​​​​
     else
        {​​​​​​​​
            echo"<br>not found player".$p[0];      
        }​​​​​​​​

    }​​​​​​​​


}

//echo "<br>mytest1 : ".$mytest1;


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
