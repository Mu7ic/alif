<?php

function getAction($x, $y, $action)
{

    switch ($action) {
        case "addition" :
            return $x + $y;
            break;
        case "subtraction" :
            return $x - $y;
            break;
        case "division" :
            return $x / $y;
            break;
        case "multiplication" :
            return $x * $y;
            break;
    }
}

function letsWrite($int)
{
    if ($int < 0) {
        $file = "negative.txt";
    } else {
        $file = "positive.txt";
    }
    file_put_contents($file, $int . PHP_EOL, FILE_APPEND | LOCK_EX);

}

if (isset($_POST['file']) && isset($_POST['action'])) {
    $filename = trim($_POST['file']);
    $action = $_POST['action'];


    $fp = fopen("$filename", "r");
    if ($fp) {

        while (!feof($fp)) {
            $mytext = fgets($fp, 20);
            $exp = explode(" ", $mytext);
            $act = getAction($exp[0], trim($exp[1]), $action);
            letsWrite($act);
            //echo '<br>';
        }
    } else echo "Ошибка при открытии файла";
    fclose($fp);
} else {
    header("Location: http://localhost/index.php");
}
?>
