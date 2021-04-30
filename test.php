<?php

//Retrive player value
$team =16;

$n = ($team-1)/2;
//$numweek = 5;

//echo $n."<br>";

//Check the value is represented in bouts or not if presened then directly put it into the that bouts
$test=16;
$bouts= array("4","8","16","32");
if(in_array("$test" ,$bouts))
{
    echo "hello";
}
for($x = 0; $x < $team; $x++)
{
        $teams[$x] = $x + 1 ;
}

//for($x=0; $x < $numweek; $x++)
//{
    for ($i=0;$i<$n;$i++)
    {

        $team1 = $teams[$n-$i];
        $team2 = $teams[$n+$i+1];

        echo"$team1<br>";
        echo"$team2<br>";
        $results[$team1][$x] = $team2;
        $results[$team2][$x] = $team1;

        echo $results[$team1][$x] ."vs". $results[$team2][$x] ."<br>";

        
    }
    echo "<br>";
    //$temp = $team[1];
//}

function checkRange($no)
{
    $no;
    
}
?>