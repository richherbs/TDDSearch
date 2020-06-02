<?php

function linearSearch (int $searchTerm, array $searchArea)
{
    foreach ($searchArea as $key => $value) {
        if ($value == $searchTerm) return $key;
        return false;
    }
}

function binarySearch(int $searchTerm, array $searchArea)
{

    if (count($searchArea) === 0) return false;

    $start = 0;
    $end = count($searchArea) - 1; 
      
    while ($start <= $end) { 
          
        $median = floor(($start + $end) / 2); 
   
        if($searchArea[$median] == $searchTerm) { 

            return $median; 
        } 
  
        if ($searchTerm < $searchArea[$median]) { 

            $end = $median -1; 
        } 
        else { 

            $start = $median + 1; 
        } 
    } 
      
    return false; 

}

$arr1 = [1,5,34,54,78,562,655,864,6543,6632,7777,7778,46266,24562];
 
$before = microtime(true);

$result = binarySearch(34, $arr1);

$after = microtime(true);
echo 'Time taken (binary search):' . ($after-$before) . "result: " . $result . '<br>';

$before = microtime(true);

$result = linearSearch(34, $arr1);

$after = microtime(true);
echo 'Time taken (linear search):' . ($after-$before) . "result: " . $result . '<br>';