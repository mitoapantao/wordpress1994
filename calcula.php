<?php 
$message1 = "10000";
$message2 = "150";
$message3 = "1800";
$message4 = "1800";
$messageanios= "12";
$monto=$_POST['monto'];
$mes =$_POST['meses'];
if($monto=="")
{
	$monto=10000;
}
  $montototal=($monto*0.015) * $mes;
  $montomensual=$montototal/$mes;
  $montoanual=$montomensual * 12;
  $message1=$monto;
  $messageanios=$mes;
  $message2 = $montomensual;
  $message3 =$montoanual;
  $message4 = $montototal;
  $messageInteres = "9%";
  $messageTotal=$monto+$montototal;

echo "<div class='card' style='width: 18rem;'>
		<div class='card-body'>
	  		 <font face='Cinzel'> <table class='table table-striped'>
				  <tr>
				  	<td>Tasa de Interés Anual</td>
				  	<td>". $messageInteres."</td>
				  </tr>
				  <tr>
				 	<td>Interés Ganado Mensual</td>
				  	<td>". $message2."</td>
				  </tr>
				  <tr>
				 	<td>Interés Ganado Total</td>
				  	<td style='color: green;'>". $message4."</td>
				  </tr>
				   <tr>
				 	<td>Total a Recibir</td>
				  	<td><strong>". $messageTotal."</strong></td>
				  </tr>
				  </table></font> </div>
	  	</div>";
?>
