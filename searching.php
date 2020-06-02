<?php

function linearSearch (int $searchTerm, array $searchArea)
{
    foreach ($searchArea as $key => $value) {
        if ($value == $searchTerm) return $key;
    }
    return false;
}

function binarySearch(int $searchTerm, array $searchArea)
{

    if (count($searchArea) === 0) return false;

    $start = 0;
    $end = count($searchArea) - 1; 
      
    while ($start <= $end) { 
          
        $medianKey = floor(($start + $end) / 2); 
   
        if($searchArea[$medianKey] == $searchTerm) { 

            return $medianKey; 
        } 
  
        if ($searchTerm < $searchArea[$medianKey]) { 

            $end = $medianKey -1; 
        } 
        else { 

            $start = $medianKey + 1; 
        } 
    } 
      
    return false; 

}

// function recursiveBinarySearch(int $searchTerm, array $searchArea, int $start, int $end)
// {

//     if (count($searchArea) === 0) return false;

//     $medianKey = floor(($start + $end) / 2); 

//     if($searchArea[$medianKey] == $searchTerm) return $medianKey; 


      
//     while ($start <= $end) { 
//         if ($searchTerm < $searchArea[$medianKey]) { 

//             $end = $medianKey -1; 
//         } 
//         else { 

//             $start = $medianKey + 1; 
//         } 
//     } 
// }

$arr1 = [1,5,34,54,78,562,655,864,6543,6632,7777,7778,46266,24562];

sort($arr1);
 
$before = microtime(true);

$result = binarySearch(24562, $arr1);

$after = microtime(true);
echo 'Time taken (binary search):' . ($after-$before) . "result: " . $result . '<br>';

$before = microtime(true);

$result = linearSearch(34, $arr1);

$after = microtime(true);
echo 'Time taken (linear search):' . ($after-$before) . "result: " . $result . '<br>';

// $before = microtime(true);

// $result = recursiveBinarySearch(34, $arr1, 0, count($arr1) - 1);

// $after = microtime(true);
// echo 'Time taken (linear search):' . ($after-$before) . "result: " . $result . '<br>';