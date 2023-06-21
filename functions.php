<?php
    var_dump($_GET);
    echo "<br />";
    $randString = array();

    for ($i=0; $i < $_GET['lenPass']; $i++) { 
        $range = array_merge(range('A', 'Z'),range('a', 'z'),range('0', '9'),range('!', '/'));
        $index = array_rand($range, 1);
        array_push($randString, $range[$index]);
    };

    var_dump(implode($randString));
?>