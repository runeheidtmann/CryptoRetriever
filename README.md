# CryptoRetriever
Script that lets you retrieve limitless pricehistory from CryptoCompare-API, although their API has a limit at 2000 pricepoints per query.
Just enter the date from where you want your date, and your good to go.

# Installation
Put files in your webroot / which ever folder you want.

# Useage:
The script is in action here: www.enbot.dk/cryptoretriever

If you want to implement it yourself, create instance of CryptoRetriever class, then call the function apport().

    $data = new CryptoRetriever($time, $symbol, $interval);

    echo $data->apport();

return type is a JSON-formated string.
