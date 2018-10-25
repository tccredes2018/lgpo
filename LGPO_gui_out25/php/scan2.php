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
			echo '<h1>'.$arq.'</h1>';
		}
	}

	$cont++;

}