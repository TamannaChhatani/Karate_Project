<?php

$team =32;
$n = ($team - 1) / 2;
//$numweek = 5;
//echo $n."<br>";
$test=32;
$bouts= array("4","8","16","32");
if(in_array("$test" ,$bouts))
{
    echo "Hiiiiii <br>";
    for ($x = 0; $x < $team; $x++) {
        $teams[$x] = $x + 1;
    }
        
    for ($i = 0; $i < $n; $i++) {

            $team1 = $teams[$n - $i];
            $team2 = $teams[$n + $i + 1];

            //   echo "$team1<br>";
            // echo "$team2<br>";
            $results[$team1][$x] = $team2;
            $results[$team2][$x] = $team1;

            echo $results[$team1][$x] . "vs" . $results[$team2][$x] . "<br>";
    }
       //     echo $teams[0]. "vs"  ."bye";
            

            // echo $results;
    
    
}


else
{
if ($team % 2 !== 0) {
    echo "hello <br>";

    
    for ($x = 0; $x < $team; $x++) {
        $teams[$x] = $x + 1;
    }
        
    for ($i = 0; $i < $n; $i++) {

            $team1 = $teams[$n - $i];
            $team2 = $teams[$n + $i + 1];

            //   echo "$team1<br>";
            // echo "$team2<br>";
            $results[$team1][$x] = $team2;
            $results[$team2][$x] = $team1;

            echo $results[$team1][$x] . "vs" . $results[$team2][$x] . "<br>";
    }
            echo $teams[0]. "vs"  ."bye";
            

            // echo $results;
    
    
}
}

//for($x=0; $x < $numweek; $x++)
//{
// for ($i = 0; $i < $n; $i++) {

//     $team1 = $teams[$n - $i];
//     $team2 = $teams[$n + $i + 1];

//     echo "$team1<br>";
//     echo "$team2<br>";
//     $results[$team1][$x] = $team2;
//     $results[$team2][$x] = $team1;

//     echo $results[$team1][$x] . "vs" . $results[$team2][$x] . "<br>";

//     // echo $results;
// }
// echo "<br>";
    //$temp = $team[1];
//}
