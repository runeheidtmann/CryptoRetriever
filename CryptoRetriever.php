<?php
    /**
     * Automated script for retrieving historical cryptoprices.
     * 
     * This application uses the "https://www.cryptocompare.com/" API for retrieving historical price-data.
     * 
     * Input any legal timeinterval and crypto-symbol, and CryptoRetriever will get it for you.
     * 
     * CryptoRetriever outputs in JSON
     *  
     */

     class CryptoRetriever{

        private $timeFrom;
        private $timeTo;
        private $startTime;
        private $stopTime;
        private $symbol;
        private $intervalSize;
        private $limit;
        

        public function __construct($startTime,$symbol,$intervalSize)
        {
            $this->startTime = $startTime;
            $this->timeFrom = $startTime+1;
            $this->symbol = $symbol;
            


            switch($intervalSize){
                case 'minute':
                    $this->intervalSize = "histominute";
                    $this->limit = 1000; // max set by the CryptoCompare
                    break;
                case 'hour':
                    $this->intervalSize = "histohour";
                    $this->limit = 100;
                    break;
                case 'daily':
                    $this->intervalSize = "histoday";
                    $this->limit = 10;
            }
            

        }

        public function apport(){

            //Set the end of interval to current unix-time
            $this->timeTo = time();

            $resultString = '';
            $innerString = '';
            $firstRun = TRUE;
            
            //might take longer than 30 seconds to get respons. This will give you 300 seconds / 5 minutes:
            set_time_limit(300); 

            while($this->timeFrom > $this->startTime){
                // create api-endpoint:
                $url = 'https://min-api.cryptocompare.com/data/'.$this->intervalSize.'?fsym='.$this->symbol.'&tsym=USD&limit='.$this->limit.'&toTs='.$this->timeTo;
                
                //get the data and read json
                $obj = json_decode(file_get_contents($url), true);
            
    
                for ($i=0; $i < count($obj['Data']) ; $i++) { 
                    
                    if( $obj['Data'][$i]['time'] > $this->startTime ){
                    $innerString .= '{';
                    $innerString .= '"time":';
                    $innerString .=$obj['Data'][$i]['time'];
                    $innerString .= ',';
                    $innerString .= '"close":';
                    $innerString .= $obj['Data'][$i]['close'];
                    
                    //JSON Array can't end with a comma. Så first run, no comma-output
                    if($firstRun == TRUE && $i == count($obj['Data'])-1)
                        $innerString .= '}';
                    else 
                        $innerString .= '},';
                    }
        
                }
                $firstRun = FALSE;
                
                // Push/Append new string onto old string
                $resultString = $innerString.$resultString; 
                
                //Set the new timeinterval for next api-call
                if(isset($obj['TimeFrom'])) //dealing with outlier-situations. If date exceeds API-max this is not set. So we check it before passing it on.
                    $this->timeFrom = $obj['TimeFrom']-1; 
                else
                    $this->timeFrom = 0;

                $this->timeTo = $this->timeFrom;
                
                //reset innerstring;
                $innerString = '';
               sleep(1);
                
            }
            
            // Wrap json in brackets so it will be recognized as an array
            $resultString = '['.$resultString.']'.$counter;
            
            return $resultString;
        }




     }

