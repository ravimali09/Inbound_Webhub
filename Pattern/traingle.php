<?php
function traingle()
{
    $rows=5;
    for($i=1;$i<=$rows;$i++)
    {
        for($j=$i;$j<$rows;$j++)
        {
            echo " &nbsp;&nbsp;";
        }
        for($k=1;$k<=(2*$i-1);$k++)
        {
            echo " * ";
        }
        echo "<br>";
    }
}
traingle();
echo "<br>";
?>      