<!Doctype HTML>
<html>
        <head>
        </head>
        <title>Receipt</title>
        <link href="Lab06_Exercise3.css" 
        rel="stylesheet" 
        type="text/css"/>  
        <script type = "text/javascript" src="Lab06_Exercise3.js"></script>
        <body>

	<?php
	    extract ($_POST);
            echo "Welcome User, your password is " . $password;
        ?>

	
	 <table border="1px" cellpadding="4" cellspacing="50">
	<tr>
	
	<th></th>
	<th>Quantity</th>
	<th>Cost Per Item</th>
	<th>Sub Total</th>
	</tr>
	<tr>
	<td>Soccer Ball</td>
	<?php
	echo "<td>$q1</td>";
	?>
	<td>$20</td>
	<?php 
	$total1 = $q1 * 20;
	echo "<td>$total1</td>";
	?>
	</tr>
	<tr>
	<td>Soccer Cleats</td>
	<?php
	echo "<td>$q2</td>";
	?>
	<td>$100</td>
	<?php $total2 = $q2 * 100;
	echo "<td>$total2</td>";
	?>
	</tr>
	<tr>
	<td>Shin Guards</td>
	<?php
	echo "<td>$q3</td>";
	?>
	<td>$10</td>
	<?php $total3 = $q3 * 10;
	echo "<td>$total2</td>";
	?>
	</tr>
	<tr>
	<td>Shipping</td>
	<td>Express</td>
	<td></td>
	<?php 
	if($qr1 == true)
	{
		echo "<td>$shipping</td>";
	}
	else if($qr2 == true)
	{
		echo "<td>$shipping</td>";
	}
	else if($qr3 == true)
	{
		echo "<td>$shipping</td>";		
	}
	?>
	</tr>
	<tr>
	<td>Total Cost</td>
	<td></td>
	<td></td>
	<?php $subTotal = $total1 + $total2 + $total3;
	echo "<td>$subTotal</td>";		
	?>
	</tr>
	</table>
        </body>
</html>