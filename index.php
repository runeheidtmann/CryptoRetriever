<?php
include('CryptoRetriever.php');

$data = new CryptoRetriever(1542672000, 'XRP', 'hour');

echo $data->apport();
  
    
?>