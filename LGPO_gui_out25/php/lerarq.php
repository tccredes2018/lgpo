<?php

function ler()
{

	$arq = $_POST['caminho'];
	#$arq = fopen('gpo\\xablau\\atualizar.txt', 'r');

	$log = fopen('log.txt', 'a+');
	fwrite($log, $arq);
	fclose($log);

	$arr = [];

	$cont = 0;

	$texto = '';

	#!feof($arq)
	while($cont < 6)
	{

			$linha = fgets($arq, 1024);
			$id1 = strpos($linha, "'");
			$id2 = strrpos($linha, "'");
			$nome = substr($linha, $id1, strlen($linha));
			
			$final = str_replace("'","",$nome);
			$cont++;
			if($cont > 1)
			{
				$arr[$cont-2] = $final;
			}
	}

	for($i = 1; $i < sizeof($arr); $i++)
	{
		$texto = $texto.$arr[$i].'-';
	}
	return $texto;
}

echo substr(ler(), 0,strlen(ler())-1);