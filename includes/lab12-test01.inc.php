<?php

/* each element in this associative array contains three values:
       [0] - current temperature
       [1] - current condition
       [2] - 5 day forecast associative array  
*/             
$weatherData = [
    "Chicago" => [ 45, "fog",   [ "Mon" => [44,"fog"], "Tue" => [42,"sleet"], "Wed" => [40,"rain"], "Thu" => [44,"cloudy"], "Fri" => [45,"cloudy"]] ],
    "Paris" =>   [ 73, "sunny", [ "Mon" => [75,"sunny"], "Tue" => [75,"sunny"], "Wed" => [68,"cloudy"], "Thu" => [66,"cloudy"], "Fri" => [60,"rain"]] ],
    "Calgary" => [ -8, "snow",  [ "Mon" => [-7,"snow"], "Tue" => [-10,"snow"], "Wed" => [-3,"sleet"], "Thu" => [0,"cloudy"], "Fri" => [3,"sunny"]] ] 
];

function dailyWeather($weatherData,$city) {
    foreach($weatherData[$city][2] as $key => $value){ ?>
            <div>
                <h3><?=$key?></h3>
                <p><i <?='class="wi wi-day-' . $value[1] . '"'?>></i></p>
                <p><?=$value[0]?></p>
            </div>
        <?php
    }
}

function makeThatWeatherBoi($weatherData){
    foreach($weatherData as $key => $value){?>
    <article class="box"> 
        <h1><?=$key?></h1>
        
        <div class="weather">
            <img <?='src="images/' . $key . '.jpg"'?>  />
            <div>
                <h2><?=$weatherData[$key][0]?></h2>
                <p><?=$weatherData[$key][1]?></p>                
            </div>
        </div>
        <section>
        <?php dailyWeather($weatherData,$key)?>
        </section></article>
        <?php
    }
}

?>