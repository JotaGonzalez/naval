<!DOCTYPE html>
<html>
<head>
	<style>
	td{
	 	width: 20px;
	 	height: 20px;
	 	background-color: #888;
	 	text-align: center;
	}
	.blancas{
		background-color: #ea9f62;
	}
	.negras{
		background-color: #331904;
	}
	</style>
	<title>X</title>
</head>
<body>
<table>
	<?php
	$filas = $_POST["filas"];
	$columnas = $_POST["columnas"];
	$onoff = 0;
	$onoff2 = 0;
	echo "Filas: $filas </br>";
	echo "Columnas: $columnas";
	
	for ($i=0;$i<$filas+1;$i++){
		echo "<tr>";
		if($i==0){
			for ($u=0;$u<$columnas+1;$u++){
				if($u==0){
					echo"<td></td>";
				}
				else{
					echo "<td>".$u;
					echo"</td>";
				}
			}
		}
		else{
		for ($u=0;$u<$columnas;$u++){
			if($u==0){
				$numeroasci = chr(64+$i);
				echo "<td>$numeroasci</td>";
			}
			if($columnas%2){
				if($onoff==0){
					echo "<td class='negras'></td>";
					$onoff=$onoff+1;
				}
				else{
					echo "<td class='blancas'></td>";
					$onoff=$onoff-1;
				}
			}
			else{
				if($i%2){
					if($onoff2==0){
						echo "<td class='blancas'></td>";
						$onoff2=$onoff2+1;
					}
					else{
						echo "<td class='negras'></td>";
						$onoff2=$onoff2-1;
					}
				}else{
					if($onoff2==0){
						echo "<td class='negras'></td>";
						$onoff2=$onoff2+1;
					}
					else{
						echo "<td class='blancas'></td>";
						$onoff2=$onoff2-1;
					}
				}
			}

		}
		}
		echo"</tr>";
	}

	?>
</table>
</body>
</html>