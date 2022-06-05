<?php
error_reporting(E_ERROR| E_PARSE);
$weather="";
$tempArr=[];
if(isset($_GET["city"])){
   $urlContent= file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&units=metric&appid=67c7b650985884d025a03aa46189006f");
   $forecastArray=json_decode($urlContent,true);
   if($forecastArray['cod']==200){
   $tempArr[]=$forecastArray['main']['temp'];

   $urlContent= file_get_contents("http://api.weatherapi.com/v1/current.json?key=9b99114183494ba8b05155145222604&q=".$_GET['city']."&aqi=no");
   $forecastArray=json_decode($urlContent,true);
   $tempArr[]=$forecastArray['current']['temp_c'];

   $urlContent= file_get_contents("https://api.weatherbit.io/v2.0/current?city=London&key=d673ba719ab5419f874a0edb4d8e81f9&include=minutely");
   $forecastArray=json_decode($urlContent,true);
   $tempArr[]=$forecastArray["data"][0]["temp"];

   $urlContent= file_get_contents("http://api.weatherstack.com/current?access_key=eccafbd46f6de4c6f4e15db065b0985d&query=london");
   $forecastArray=json_decode($urlContent,true);
   $tempArr[]=$forecastArray["current"]["temperature"];

   $urlContent= file_get_contents("http://api.weatherapi.com/v1/current.json?key=9b99114183494ba8b05155145222604&q=".$_GET['city']."&aqi=no");
   $forecastArray=json_decode($urlContent,true);
   $tempArr[]=$forecastArray['current']['temp_c'];


   foreach($tempArr as $temperature){
     $sum+=$temperature;
   }
   $temperature=$sum/4;
   $weather="The weather in ".$_GET['city']." is {$temperature}	
   &#8451;";
}
else{
    $error="City name is incorret";
}
}

?>
<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/style.css">

    <title>Weather App</title>
  </head>
  <body>
    <div class="container" id="mainDiv">
      <form>
  <div class="mb-3">
    <label for="city" class="form-label">Input a city name</label>
    <input type="text" class="form-control" name="city" id="city" aria-describedby="Forecast city">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <div id="forecastDiv">
       
        <?php 
        if($weather){
            echo '<div class="alert alert-success" role="alert">'.$weather.'</div>';
        } 
        else if ($error)
        {
            echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';  
        }
   
        ?>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>
