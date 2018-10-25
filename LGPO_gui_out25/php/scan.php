<?php

$path = 'gpo/batata/';
$dir = dir($path);

while($arq = $dir->read())
{
	if($arq != '.' && $arq != '..')
	{
		echo '<h1>'.$arq.'</h1>';
	}
}