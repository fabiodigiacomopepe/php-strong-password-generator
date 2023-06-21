<?php
    $lenPass = $_GET['lenPass'] ?? -1;
   /*  var_dump($lenPass);
    echo "<br />"; */
    $randString = array();
    $range = array_merge(range('A', 'Z'),range('a', 'z'),range('0', '9'),range('!', '/'));

    for ($i=0; $i < $lenPass; $i++) { 
        $index = array_rand($range, 1);
        array_push($randString, $range[$index]);
    };

    $finalString = implode($randString);
    echo $finalString;

    session_start();
    $_SESSION['stringa'] = $finalString;

    if (count($randString) == $lenPass) {
        header('Location: ./passwordPage.php');
    }
?>
