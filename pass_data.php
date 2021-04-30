<html>
<head>
<title></title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
    padding: 20px;
}
</style>
</head>

</html>
<?php

//echo "Hello";



include_once("connection.php");
$player=array();
//$c_name=array();
if (isset($_POST['display'])) {

    $gen =  $_POST['gender'];
    $kata = $_POST['kata'];
    $kumite = $_POST['kumite'];
    $belt = $_POST['belt'];
    $minage = $_POST['minage'];
    $maxage = $_POST['maxage'];
    $age = $minage." ".$maxage." ";
    $minweight = $_POST['minweight'];
    $maxweight = $_POST['maxweight'];
    $weight = $minweight." ".$maxweight." ";
    
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
    if (isset($minage) && !empty($minage) && isset($maxage) && !empty($maxage) ) {
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
        array_push($player,$user_data['player_name']);
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
       // array_push($player[1],$user_data['coach']);
  //      array_push($c_name,$user_data['coach']);
       //array_push($player,$user_data['coach']);
    }

    
    echo "</table>";
    $res=mysqli_num_rows($result);
    // echo "$res";
 
}

print_r($player);echo "<br>";
//print_r($c_name);echo "<br>";
//$data=array($player,$c_name);
//print_r($data);echo "<br>";
//print_r($c_name );echo "<br>";
//$newArray = array();
//foreach ($oldArray as $entry) {
  //  $newArray[$player['id']] = $['type'];
//}
//print_r(array_merge_recursive($player,$c_name));echo "<br>";
$res=mysqli_num_rows($result);
$bouts=array("4","8","16","32");
define('NUMBER_OF_PARTICIPANTS', $res);

$participants = range(1,NUMBER_OF_PARTICIPANTS);
$bracket = getBracket($participants);
echo "<pre>";
print_r($bracket);
echo "</pre>";

getPlayerNames($bracket,$player);

function getBracket($participants)
{
    $participantsCount = count($participants);  
    $rounds = ceil(log($participantsCount)/log(2));
    $bracketSize = pow(2, $rounds);
    $requiredByes = $bracketSize - $participantsCount;

    echo sprintf('Number of participants: %d<br/>%s', $participantsCount, PHP_EOL);
    echo sprintf('Number of rounds: %d<br/>%s', $rounds, PHP_EOL);
    echo sprintf('Bracket size: %d<br/>%s', $bracketSize, PHP_EOL);
    echo sprintf('Required number of byes: %d<br/>%s', $requiredByes, PHP_EOL);    

    if($participantsCount < 2)
   {
     return array();
  }

   $matches = array(array(1,2));
    for($round=1; $round < $rounds; $round++)
    {
        $roundMatches = array();
        $sum = pow(2, $round + 1) + 1;
        foreach($matches as $match)
        {   
            
            $home = changeIntoBye($match[0], $participantsCount);
            $away = changeIntoBye($sum - $match[0], $participantsCount);
            
            $roundMatches[] = array($home,$away);
            $home = changeIntoBye($sum - $match[1], $participantsCount);
            $away = changeIntoBye($match[1], $participantsCount);
            $roundMatches[] = array($home,$away);
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

function getPlayerNames($bracket,$player){
$pl_name=array();
$cl_name=array();
echo "<pre>"; print_r($bracket); echo "</pre>";
array_unshift($player, 'bye');
echo "<table style='border:1px solid black;'>";
echo "<tr>";
echo "<th> Sr no </th>";
echo "<th>Player_name </th>";
echo "<th>Coach name </th>";
echo "</tr>";
$i=1; 

foreach($bracket as $brc){
                echo "<tr>";
                echo "<td>".$i++ ."</td>";
              //  echo "<td>";
                //for($i=0;$i<=100;$i++) {
                  // echo sprintf("%d", $i) . "<br>";
                   //}
                   //echo "</td>";
                
        
          echo"<td>".  $pl1 = strtoupper(($player[$brc[0]])) ;
          echo "</td>";
      
          //echo "</td>";
         echo  "</tr>";
          echo "<tr>";
          echo "<td>".$i++ ."</td><td>". $pl2 = strtoupper(($player[$brc[1]]));
         echo "</td></tr>";
           // echo " <br>player 1".$pl1;
            //echo "<br>player 2 <br>".$pl2;
            array_push($pl_name,$pl1,$pl2);
            //array_push($cl_name,$cname1);
//}   
    }
 echo "</table>";   



}
