<?php
    
    $error ="";
    $weather ="";
    
    if(array_key_exists("city", $_GET)){

       $urlContents = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET['city'])."&APPID=89a3608d1a660926ec64cefd06a88264");
       

       $weatherArray = json_decode($urlContents, true);

       if($weatherArray['cod'] == 200){

            $weather = "The weather in the ".$_GET['city']." is currently '".$weatherArray['weather'][0]['description']."'. ";

            $tempInC = intval($weatherArray['main']['temp'] - 273);

            $weather .= "The temperature is ".$tempInC."&deg;C and the wind speed is ".intval($weatherArray['wind']['speed'])."m/s.";

            
        }   else {

            $error = "Could not find the city.";
        }
    
    }


?>