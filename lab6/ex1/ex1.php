<?php
	$table = "<table>";
	for($y=0; $y<=100; $y++)
	{
    	$table .= "<tr>";
        for($x=0; $x<=100; $x++)
        {
        	$table .= 
            	"<td>" 
                . (($y==0) ? ($x==0 ? ' ' : $x ) : ($x==0 ? $y : $x * $y ))
                . "</td>";
        }
        $table .= "</tr>";
    }
    echo $table . "</table>";

?>

