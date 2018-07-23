<?php 
header("Pragma: no-cache");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, cachehack=".time());
header("Cache-Control: no-store, must-revalidate");
header("Cache-Control: post-check=-1, pre-check=-1", false); 
?>

<br>
<br>
<br>

<center>
<img src="logo.jpg" />
	<form action="file/validar.php" method="POST">
		<table border="0">
			<tr>
				<td>
					Usuario:
				</td>
				<td>
					<input type="password" name="user" id="user">
				</td>
			</tr>
			
			
			
			
			
			<tr>
				<td>
					Senha: 
				</td>
				<td>
					<input type="password" name="pass" id="pass"><br>
				</td>
			</tr>
	
	
	
			
			
			<tr  >
				<td >
					<input type="submit" value="Entrar">
				</td>
				<td>
					<input type="reset" value="Limpar">
				</td>
			</tr>
		

		
		</table>
	</form>
</center>