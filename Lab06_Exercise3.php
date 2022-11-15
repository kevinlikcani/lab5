<!Doctype HTML>
<html>
        <head>
        </head>
        <title>Receipt</title>
              <link rel='stylesheet' type='text/css' href='Lab06_Exercise3.css'>
        	<script type = "text/javascript" src="Lab06_Exercise3.js"></script>
        <body>
	
	<p> Thank you for your order! </p>
	<?php
 	 $password=$_POST["password"];
         echo "The password for your account is " . $password;
        ?>

	<p> <b> Customer Receipt </b> </p>   
     <?php
 		$qr1=$_POST["qr1"];
		$qr2=$_POST["qr2"];
		$qr3=$_POST["qr3"];
		$q1=$_POST["q1"];
		$q2=$_POST["q2"];
		$q3=$_POST["q3"];

	   if (isset($qr1)==false)
	   {
  		$q1=0;
	   }
   	   if (isset($qr2)==false)
	   {
  		$q2=0;
	   }
 	   if (isset($qr3)==false)
	   {
  		$q3=0;
	   }
	?>
 <?php

	 $selectedShipping= $_POST["shipping"];
	
	if($selectedShipping=="0")
	{
		$shipping=0;
		$shippingMode= "Free 7 day";   
	}
 
        if($selectedShipping=="5")
	{
		$shipping=5;
		$shippingMode= "$5.00 three day";    

	}   

	if($selectedShipping=="50")
	{
	 	$shipping=50;
	 	$shippingMode= "$50.00 over night";
 	
	}
	
?>

	<table border="1px" >
     
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Cost Per Item</th>
		<th>Sub Total</th>
   	</tr>
    
	<tr>
		<td><b>Soccer Ball</b></td>
		<?php
	 	  echo "<td> $q1 </td>";
		?> 
		<td>$20</td>
		<?php 
		$total1 = $q1 * 20;
		echo "<td> $total1 </td>";
		?>
	</tr>
 

	<tr>
		<td><b>Soccer Cleats</b></td>
		<?php
		echo "<td>$q2</td>";
		?>
		<td>$100</td>
		<?php $total2 = $q2 * 100; ?>
		<?php	
		echo "<td>$total2</td>";
		?>		
	</tr>
	<tr>
		<td><b>Shin Guards </b> </td>
		<?php
		echo "<td>$q3</td>";
		?>
		<td>$10</td>
		<?php $total3 = $q3 * 10; ?>
		<?php
		echo "<td>$total3</td>";
		?>
	</tr>

	<tr>
		<td><b>Shipping </b></td>
		
		<td colspan="2"><?php echo $shippingMode ?></td>		
		
		<?php 
	
	if($qr1 == true)
	{
		echo "<td> $shipping</td>";
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
		<td colspan="3" style="text-align:center"> <b>Total Cost </b></td>		
		<?php $subTotal = $total1 + $total2 + $total3 +$shipping;
		echo "<td><b> $subTotal </b ></td>";		
		?>
	</tr>
	</table>

        </body>
</html>