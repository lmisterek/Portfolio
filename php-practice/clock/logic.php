<?php

date_default_timezone_set('America/Los_Angeles'); 
    
$now = date('D M j g:i');

$hour = date('G');

// Morning 5 - 11 (Right inclusive)

// Afternoon 11  16

// Evening 16 and 20

// Night more than 20 and less than 5

if($hour >= 5 AND $hour < 11 )
{
    $timeOfDay = 'morning';
}
else if($hour >= 11 AND $hour < 16 )
{
    $timeOfDay = 'afternoon';
}
else if($hour >= 16 AND $hour < 20 )
{
    $timeOfDay = 'evening';
}
else 
{
    $timeOfDay = 'night';
}