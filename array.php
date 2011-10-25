<?php

$message = 'How are you today?';
echo "$message";


$array['weather'] = 'http://www.weather.com';
$array['health']='http://www.webmd.com';
$array['food']='http://www.foodnetwork.com';
$array['exercise']='http://www.exercise.about.com.com';

//$array[3]= array (1,2,3,4);

echo $array['weather'] . " gives you the weather of day";
echo $array['health'] . " gives you information";
echo $array['food'] . " gives you great recipes.";
echo $array['exercise'] . " gives you tips on how to stay fit.";
?>