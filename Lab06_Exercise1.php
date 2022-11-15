<!DOCTYPE html>
<html> 
    <head> 
        
        <title>Multiplication Table</title> 
    </head>  
    <body> 
        <table style="width:100%">
        <tr>
	<th></th>
        <?php
            
            for($x = 1; $x <= 100; $x++){
                 echo "<th>" . $x . "</th>";
            }
        ?>
        </tr>
        <?php
            for($x = 1; $x <= 100; $x++){
                echo "<tr>" . "<th> " . $x . "</th>";
                for($y = 1; $y <= 100; $y++){
                    echo "<td>" . $x*$y . " </td>";
                }
                echo "</tr>";
            }   
        ?>
        </table>

    </body> 
</html>



