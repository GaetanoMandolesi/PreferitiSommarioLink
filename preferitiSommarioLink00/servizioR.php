<html>
<head>
<meta charset="UTF-8">
<title>Sommario-Utilità</title>
<link rel="stylesheet" type="text/css" href="tuttiInUnoNews.css">
<script type="text/javascript" src="tuttiInUno.js"></script>
<script>
        	$(document).ready(function(){
            	$("tr.item").dblclick(function(){
                $(this).hide();
            		});
        	});
</script>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

td {
  text-align: left;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>

    
</head>
<body>
<?php
/////
$file = "servizioR.php";
$numero_linee = count(file($file))-64;
echo "Numero di righe " . $numero_linee . "<br/>";
/////
?>
<div style="width:70%; margin:0 auto; padding:0 ;bottom: 0;">
<table><tr><th>Servizi_Utility</th></tr>
<tr><div>
	   <p>
        	<input oninput="w3.filterHTML('#id01', '.item', this.value)" placeholder="Cerca all'interno della pagina....">
       <a  href="servizioIndex.php">Torna all'inserimento</a></p>
	 </div>
</tr>


</table>

<php?
$filename = 'servizioR.php';
$read = fopen($filename, 'a');
$size=1024;
while (!feof($handler)) {
$rec=fread($leggi, $size);
echo($rec);
}
fclose($leggi);
?>
<table id="id01">
<tr class='item'><td>Informatica	Cultura Se non sai non sei	<a href=https://www.senonsainonsei.org/>Volontariato</a></td></tr>
<tr class='item'><td>Informatica	Hosting	<a href=https://www.onworks.net/>Hosting di lavoro</a></td></tr>
<tr class='item'><td>Informatica	LinuxDay	<a href=https://www.storiainformatica.it/sistemi-operativi/linux?view=article&amp;id=510:l-evoluzione-di-linux&amp;catid=40>Storia descritta</a></td></tr>
<tr class='item'><td>Informatica	LinuxDay	<a href=https://it.wikipedia.org/wiki/Linux>Storia wiki</a></td></tr>
<tr class='item'><td>Informatica	LinuxDay	<a href=https://contactout.com/Linus-Torvalds-69976193>Il fondatore è qui</a></td></tr>

