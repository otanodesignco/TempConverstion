<?php 

$NaN = "NaN"; 

/* Celsius to and from Fahrenheit conversions */ 

function fahrenheitToCelsius($far,$round="true") 
{ 

    global $NaN; 
     
    if(!is_numeric($far)) 
    { 
         
        return $NaN; 
    } 
    else 
    { 
     
        $CelsiusVal = 5 * ($far - 32) / 9; 
         
        if($round == "true") 
         
        { 
         
            return round($CelsiusVal); 
             
        } 
        else 
        { 
         
            return $CelsiusVal; 

        } 
     
    } 

} 

function celsiusToFahrenheit($cel, $round="true") 
{ 

    global $NaN; 

    if(!is_numeric($cel)) 
    { 
     
    return $NaN; 
     
    } 
    else 
    { 
     
        $FahrenheitVal = $cel * 9 / 5 + 32; 
         
        if($round == "true") 
        { 
         
            return round($FahrenheitVal); 
         
        } 
        else 
        { 

            return $FahrenheitVal; 
             
        } 

    } 
} 

/* Kelvin to and from conversions */ 

function celsiusToKelvin($cel, $round="true") 
{ 

    global $NaN; 

    if(!is_numeric($cel)) 
    { 

        return $NaN; 

    } 
    else 
    { 

        $KelvinVal = $cel + 273; 

        if($round == "true") 
        { 

            return round($KelvinVal); 

        } 
        else 
        { 

            return $KelvinVal; 

        } 

    } 

} 

function kelvinToCelsius($kel, $round="true") 
{ 

    global $NaN; 
     
    if (!is_numeric($kel)) 
    { 
     
        return $NaN; 
     
    } 
    else 
    { 
     
        $CelsiusVal = $kel - 273; 
         
        if ($round == "true") 
        { 
         
            return round($CelsiusVal); 
         
        } 
        else 
        { 
         
            return $CelsiusVal; 
         
        } 
     
    } 

} 

function kelvinToFahrenheit($kel, $round="true") 
{ 

    global $NaN; 
     
    if(!is_numeric($kel)) 
    { 
     
        return $NaN; 
     
    } 
    else 
    { 
     
        $FahrenheitVal =  9 * ($kel - 459) / 5; 
         
        if($round == "true") 
        { 
         
            return round($FahrenheitVal); 
         
        } 
        else 
        { 
         
            return $FahrenheitVal; 
         
        } 
     
    } 

} 

function fahrenheitToKelvin($far, $round="true") 
{ 

    global $NaN; 
     
    if(!is_numeric($far)) 
    { 
     
        return $NaN; 
     
    } 
    else 
    { 
     
        $KelvinVal =  5 * ($far + 459) / 9; 
         
        if($round == "true") 
        { 
         
            return round($KelvinVal); 
         
        } 
        else 
        { 
         
            return $KelvinVal; 
         
        } 
     
    } 

} 

function kelvinToRankine($kel, $round="true") 
{ 

    global $NaN; 
     
    if (!is_numeric($kel)) 
    { 
     
        return $NaN; 
     
    } 
    else 
    { 
     
        $RankineVal = ($kel * 9) / 5; 
         
        if($round == "true") 
        { 
         
            return round($RankineVal); 
         
        } 
        else 
        { 
         
            return $RankineVal; 
         
        } 
     
    } 

} 

function rankineToKelvin($ran, $round="true") 
{ 

    global $NaN; 
     
    if(!is_numeric($ran)) 
    { 
     
        return $NaN; 
     
    } 
    else 
    { 
     
        $KelvinVal = ($ran * 5) / 9; 
         
        if($round == "true") 
        { 
         
            return round($KelvinVal); 
         
        } 
        else 
        { 
         
            return $KelvinVal; 
         
        } 
     
    } 

} 

/* To and From Rankine using Celsius and Fahrenheit because Rankine to Kelvin is defined in Kelvin functions  */ 

function rankineToCelsius($ran, $round="true") 
{ 

    global $NaN; 
     
    if(!is_numeric($ran)) 
    { 
     
        return $NaN; 
     
    } 
    else 
    { 
     
        $CelsiusVal = 5 * ($ran - 491) / 9; 
         
        if($round == "true") 
        { 
         
            return round($CelsiusVal); 
         
        } 
        else 
        { 
         
            return $CelsiusVal; 
         
        } 
     
    } 

} 

function celsiusToRankine($cel, $round="true") 
{ 

    global $NaN; 
     
    if(!is_numeric($cel)) 
    { 
     
        return $NaN; 
     
    } 
    else 
    { 
     
        $RankineVal = ($cel * 9) / 5 + 491; 
         
        if($round == "true") 
        { 
         
            return round($RankineVal); 
         
        } 
        else 
        { 
         
            return $RankineVal; 
         
        } 
     
    } 

} 

function fahrenheitToRankine($far, $round="true") 
{ 

    global $NaN; 
     
    if(!is_numeric($far)) 
    { 
     
        return $NaN; 
     
    } 
    else 
    { 
     
        $RankineVal = $far + 459; 
         
        if($round == "true") 
        { 
         
            return round($RankineVal); 
         
        } 
        else 
        { 
         
            return $RankineVal; 
         
        } 
     
    } 

} 

function rankineToFahrenheit($ran, $round="true") 
{ 

    global $NaN; 
     
    if(!is_numeric($ran)) 
    { 
     
        return $NaN; 
     
    } 
    else 
    { 
     
        $FahrenheitVal = $ran - 459; 
         
        if($round == "true") 
        { 
         
            return round($FahrenheitVal); 
         
        } 
        else 
        { 
         
            return $FahrenheitVal; 
         
        } 
     
    } 

} 

?>