<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script src="main.js"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body>
    

<main role="main" class="container">
<div class="jumbotron">
  
    <form class="inline-block" name="form1" method="POST" action="CryptoRetrieverView.php">
            <div class="row">
                <div class="col-sm"><h1>Get daily, hourly and minute historical data at any given timeinterval. No limits, just good data!</h1></div>
            </div><div class="row">
                <div class="col-sm"><br><br><h6>The Cryptoretriever will get data in the specified time interval, at any intervalsize. Enter the date where you want data to begin. Result is from entered date to current date.
    </h6></div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <br><h5>Enter a date</h5>
                </div>
            </div>
            <div class="row">
            <div class="col-sm">
                    <input style="width:5em;" class="inline-block" name="y" type="text" id="y" size="4" pattern=".{4,4}" required title="Præcis 4 tal i årstal" placeholder="YYYY">
            -
                    <input style="width:3em;" class="inline-block" name="m" type="text" id="m" size="2" pattern=".{2,2}" required title="Præcis 2 tal i måneder" placeholder="MM">
            -
                    <input style="width:3em;" class="inline-block" name="d" type="text" id="d" size="2" pattern=".{2,2}" required title="Præcis 2 tal i dage" placeholder="DD">
                    @
                    <input style="width:3em;" class="inline-block" name="hours" type="text" id="hours" value="0" size="2" mpattern=".{2,2}" required title="Præcis 2 tal i timer" placeholder="HH">
                    :
                    <input style="width:3em;" class="inline-block" name="min" type="text" id="min" value="0" size="2" pattern=".{2,2}" required title="Præcis 2 tal i minutter" placeholder="MM">
                    :
                    <input style="width:3em;" class="inline-block" name="sec" type="text" id="sec" value="0" size="2" pattern=".{2,2}" required title="Præcis 2 tal i sekunder" placeholder="SS">
                    (24h:min:sec)
            </div></div>
            <div class="row">
                <div class="col-sm"><br><br><h5>Price intervalsize:</h5>
                </div>
            </div>
            
            <div class="row"><div class="col-sm">
            <select name="timeinterval">
                <option value="minute">Minute (only 1 week history)</option>
                <option value="hour">Hourly</option>
                <option value="daily">Daily</option>

                </select>
             </div></div>
            <div class="row">
                <div class="col-sm"><br><br><h5>Enter currency:</h5>
                </div>
            </div>
            
            <div class="row"><div class="col-sm">
            <select name="symbol">
                <option value="XRP">Ripple</option>
                <option value="BTC">Bitcoin</option>
                <option value="XLM">Stella Lumens</option>
                <option value="LTC">Litecoin</option>
                <option value="ETH">Ethereum</option>
                <option value="EOS">EOS</option>
                <option value="BCH">Bitcoin Cash</option>
                <option value="TRX">TRON</option>
                <option value="ADA">Cardano</option>
                <option value="IOT">IOTA</option>
                <option value="XMR">Monero</option>
                <option value="DASH">Dash</option>
                </select>
             </div></div>
                    
            <div class="row"><div class="col-sm">
                <br><br><button class="btn btn-primary" type="submit" name="Submit"  style="vertical-align: top;"><span class="glyphicon glyphicon-arrow-right"></span>Get historical cryptoprices</button>
            </div></div>
       </form>
  </div>
    </div>
    
<footer class="footer mt-auto py-3">
  <div class="container">
    <h3>Data source: </h3>
    <a href="http://cryptocompare.com"><img src="cryptocompare.png"></a>
  </div>
</footer>
</main><!-- /.container -->
    
</body>
</html>