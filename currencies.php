<?php

//this should be pretty self explanatory dump the objects to the screen to see the structure.
//were getting the csc value from blockexp and we are getting the btc usd eur etc values from coindesk.
//we create some li's(math with the values) to be echoed to the screen to be catched by jquery and inserted into the drop down.

$jsonCSC = file_get_contents('http://csc.blockexp.info/ext/summary');
$dataCSC = json_decode($jsonCSC,true);
$priceCSC = $dataCSC["data"][0]["lastPrice"];
$priceCSC = number_format($priceCSC, 8);

$jsonBTC = file_get_contents('https://api.coindesk.com/v1/bpi/currentprice.json');
$dataBTC = json_decode($jsonBTC,true);
$priceBTC = $priceCSC * $dataBTC["bpi"]["USD"]["rate_float"];

$jsonGBP = file_get_contents('https://api.coindesk.com/v1/bpi/currentprice.json');
$dataGBP = json_decode($jsonGBP,true);
$priceGBP = ($priceCSC * $dataGBP["bpi"]["GBP"]["rate_float"]);

$jsonEUR = file_get_contents('https://api.coindesk.com/v1/bpi/currentprice.json');
$dataEUR = json_decode($jsonEUR,true);
$priceEUR = ($priceCSC * $dataEUR["bpi"]["EUR"]["rate_float"]);

$jsonCNY = file_get_contents('https://api.coindesk.com/v1/bpi/currentprice/CNY.json');
$dataCNY = json_decode($jsonCNY,true);
$priceCNY = ($priceCSC * $dataCNY["bpi"]["CNY"]["rate_float"]);


echo "<li><a href=''>" . $priceCSC . " BTC</a></li>" . 
            "<li><a href=''>" . round($priceBTC, 5) . " USD </a></li>". 
            "<li><a href=''>" . round($priceGBP, 5) . " GBP </a></li>". 
            "<li><a href=''>" . round($priceEUR, 5) . " EUR </a></li>". 
            "<li><a href=''>" . round($priceCNY, 5) . " CNY </a></li>";
?>