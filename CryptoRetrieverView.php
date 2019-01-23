<?php
include('CryptoRetriever.php');
if(isset($_POST)){

    // API need unix-timestamp, så we convert human readable date to unixtime:
    $stringTime = htmlentities($_POST['y'].'-'.$_POST['m'].'-'.$_POST['d'].' '.$_POST['hours'].':'.$_POST['min'].':'.$_POST['sec']);
    $time = strtotime($stringTime);

    $symbol = $_POST['symbol'];

    $interval = $_POST['timeinterval'];

    // create object, than call apport.
    $data = new CryptoRetriever($time, $symbol, $interval);

    echo $data->apport();
}
    
?>