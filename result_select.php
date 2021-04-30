<!-- HTML Code -->
<html>
<head>
    <title></title>
    <style>
        table,th,td
        {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,td
        {
            padding: 20px;
        }
    </style>
</head>
</html>
<!-- PHP Code Start -->
<?php
// Include Connection file
include_once("connection.php");

// Create player array to store player list
$player = array();

// Define Variable name
if (isset($_POST['display']))
{

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

    // Condition array to create dynamic condition
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
    //$query="select count(*) from karate_form_data";
    //echo $query;
    //echo $sql;
    // $sql1="select * from karate_form data where $sql order by $coach";
    // $sql="SELECT * FROM `karate_form_data` WHERE $query ";


    // Execute sql Query
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

    // Fetching Row 

    while ($user_data = mysqli_fetch_assoc($result)) 
    {

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
print_r($player);

$res = mysqli_num_rows($result);
$bouts = array("4", "8", "16", "32");
define('NUMBER_OF_PARTICIPANTS', $res);

$participants = range(1, NUMBER_OF_PARTICIPANTS);
$bracket = getBracket($participants);
echo "<pre>";
print_r($bracket);
echo "</pre>";

getPlayerNames($bracket, $player);

function getBracket($participants)
{
    $participantsCount = count($participants);
    $rounds = ceil(log($participantsCount) / log(2));
    $bracketSize = pow(2, $rounds);
    $requiredByes = $bracketSize - $participantsCount;

    echo sprintf('Number of participants: %d<br/>%s', $participantsCount, PHP_EOL);
    echo sprintf('Number of rounds: %d<br/>%s', $rounds, PHP_EOL);
    echo sprintf('Bracket size: %d<br/>%s', $bracketSize, PHP_EOL);
    echo sprintf('Required number of byes: %d<br/>%s', $requiredByes, PHP_EOL);

    if ($participantsCount < 2)
    {
        return array();
    }

    $matches = array(array(1, 2));
    for ($round = 1; $round < $rounds; $round++)
    {
        $roundMatches = array();
        $sum = pow(2, $round + 1) + 1;
        foreach ($matches as $match)
        {

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

function getPlayerNames($bracket, $player)
{
    $pl_name = array();


    echo "<pre>";
    print_r($bracket);
    echo "</pre>";
    array_unshift($player);
    echo "<table style='border:1px solid black;'>";
    echo "<tr>";
    echo "<th>No</th>";
    echo "<th>Player_name </th>";
    echo "<th>Coach_name </th>";
    echo "</tr>";
    $i = 1;
    foreach ($bracket as $brc) {


        echo "<tr>";
        echo "<td>" . $i++ . "</td>";



        $pl1 = strtoupper($player[$brc[0]][0]);
        $pl2 = strtoupper(($player[$brc[1]][0]));
        $c1 = strtoupper(($player[$brc[0]][1]));
        $c2 = strtoupper(($player[$brc[1]][1]));



        echo "<td>" .  $pl1;
        echo "</td>";
        echo "<td>" . $c1 . "</td>";
        echo "</tr>";
        echo "<tr><td>".$i++ ."</td>";
        echo "<td>" . $pl2;
        echo "<td>" . $c2 . "</td>";
        echo "</td></tr>";


        array_push($pl_name, $pl1, $pl2);
    }
    echo "</table>";
    echo "<pre>";
    print_r($pl_name);;
    echo "</pre>";
  
}
?>
