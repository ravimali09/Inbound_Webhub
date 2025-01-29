<?php 
function insertionSort(&$arr, $n)
{
    for ($i = 1; $i < $n; $i++)
    {
        $key = $arr[$i];
        $j = $i - 1;

        while ($j >= 0 && $arr[$j] > $key)
        {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        
        $arr[$j + 1] = $key;
    }
}
function printArray(&$arr, $n)
{
    for ($i = 0; $i < $n; $i++)
        echo $arr[$i] . " ";
    echo "\n";
}
$arr = array(15, 10, 12, 8, 2,7);
$n = sizeof($arr);
insertionSort($arr, $n);
printArray($arr, $n);
?>