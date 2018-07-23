
<center>
	<img src="../logo.jpg" width="300" height="100" /><br/>
	<form action="../index.php" method="POST">
		<input type="submit" value="Sair">
	</form>
	
<?php 

$login = $_POST['user'];
$senha = $_POST['pass'];

  if($login == "admin" && $senha == "admin"){
  
// pega o endereço do diretório
		$diretorio = getcwd(); 
// abre o diretório
		$ponteiro  = opendir($diretorio);
// monta os vetores com os itens encontrados na pasta
		while ($nome_itens = readdir($ponteiro)) {
			$itens[] = $nome_itens;
		}
// ordena o vetor de itens
		sort($itens);
// percorre o vetor para fazer a separacao entre arquivos e pastas 
		foreach ($itens as $listar) {
// retira "./" e "../" para que retorne apenas pastas e arquivos
			if ($listar!="." && $listar!=".."){ 
// checa se o tipo de arquivo encontrado é uma pasta
					if (is_dir($listar)) { 
// caso VERDADEIRO adiciona o item à variável de pastas
					$pastas[]=$listar; 
					} else{ 
// caso FALSO adiciona o item à variável de arquivos
						$arquivos[]=$listar;
					}
			}
		}	
// lista as pastas se houverem
//if ($pastas != "" ) { 
//foreach($pastas as $listar){
//	   print "Pasta: <a href='$listar'>$listar</a><br>";}
//   }
// lista os arquivos se houverem
			//$cont = 0;

			if ($arquivos != "") {
				foreach($arquivos as $listar){
					if($listar != "validar.php")
					print " <a href='$listar'>$listar</a><br>";
					//$cont = $cont+1;
				}
			  
			}
    
	
	
    }else{
		//header('location:../index.php');
	}

	
?>

	</center>