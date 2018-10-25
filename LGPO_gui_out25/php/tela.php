<!DOCTYPE html>

<html>
<head>
	<title>TESTANDO</title>
</head>
<body>

<h1>SELECIONE UMA GPO</h1>

<table>
	<thead>
		<th>NOME</th>
		<th>CATEGORIA</th>
		<th>ABRIR</th>
	</thead>
	<tbody>
		
	<?php 

		$path = 'gpo/';
		$arr = scandir($path);

		$cont = 2;

		while($cont < sizeof($arr))
		{
			$dir = dir($path.$arr[$cont]);
			while($arq = $dir->read())
			{
				if($arq != '.' && $arq != '..')
				{
					echo '<tr><td>'.$arq.'</td><td>'.$arr[$cont].'</td><td><a href="'.$path.$arr[$cont].'/'.$arq.'"> VER </a></td></tr>';
				}
			}

			$cont++;

		}

	?>

	</tbody>
</table>

</body>
</html>