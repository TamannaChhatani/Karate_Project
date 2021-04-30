<?php
    $players = range(1, 64);
    $count = count($players);
    $numberOfRounds = log($count / 2, 2);

    // Order players.
    for ($i = 0; $i < $numberOfRounds; $i++)
    {
        $out = array();
        $splice = pow(2, $i); 
        while (count($players) > 0)
        {
            $out = array_merge($out, array_splice($players, 0, $splice));
            $out = array_merge($out, array_splice($players, -$splice));
        }            
        $players = $out;
    }

    // Print match list.
    for ($i = 0; $i < $count; $i++) 
    {
        printf('%s vs %s<br />%s', $players[$i], $players[++$i], PHP_EOL);
    }
?>