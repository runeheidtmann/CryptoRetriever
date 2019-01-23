<?php
include('CryptoRetriever.php');
if(isset($_POST)){

    $stringTime = $_POST['y'].'-'.$_POST['m'].'-'.$_POST['d'].' '.$_POST['hours'].':'.$_POST['min'].':'.$_POST['sec'];
    $time = strtotime($stringTime);

    $symbol = $_POST['symbol'];

    $interval = $_POST['timeinterval'];




    $data = new CryptoRetriever($time, $symbol, $interval);
    echo $data->apport();
}
    
?>