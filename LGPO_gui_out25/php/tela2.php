<!DOCTYPE html>
<html>
<head>
	<title>TESTANDO</title>
</head>
<body>

<H1>gpo</H1>

<div class="caixa">
	
<h2 id="titulo"></h2>
<p id="descricao"></p>
<p id="autor"></p>
<p id="versao"></p>

</div>

</body>

<script type="text/javascript" src='jquery.js'></script>
<script type="text/javascript">
$.ajax({
	url:'lerarq.php',
	method: 'POST',
	data: "caminho=<?= $_GET['caminho'];?>",

	sucess:function(dados)
	{
		var lista = dados.split('-');
		$('#titulo').text(lista[0]);
		$('#descricao').text(lista[1]);
		$('#autor').text(lista[2]);
		$('#versao').text(lista[3]);

	},

	beforeSend:function()
	{

	},

	error:function()
	{

	}
});

</script>

</html>