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
$numero_linee = count(file($file));
echo "Numero di record " . $numero_linee -60 . "<br/>";
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

<table id="id01">
<tr class='item'><td>Informatica	Sviluppo	<a href=https://laravel.com/>Laravel framework </a></td></tr>
<tr class='item'><td>Informatica	Sviluppo	<a href=https://www.google.com/url?sa=t&amp;source=web&amp;rct=j&amp;opi=89978449&amp;url=https://www.youtube.com/watch%3Fv%3D-VdBZH0PWto&amp;ved=2ahUKEwi8udDq8t-MAxVY8LsIHTRgPAUQwqsBegQICRAF&amp;sqi=2&amp;usg=AOvVaw1iJyD0bnQlKpQ4mIiJ56AV>Laravel framework video tutorial</a></td></tr>
<tr class='item'><td>Informatica	Formazione 	<a href=https://www.madbob.org/>Riferimenti Bob</a></td></tr>
<tr class='item'><td>Informatica	Formazione 	<a href=https://www.ils.org/sezionilocali/torino/>Da seguire</a></td></tr>
<tr class='item'><td>Informatica	Formazione 	<a href=https://www.glugto.org/>Linux Incontri </a></td></tr>
<tr class='item'><td>Grazie per le indicazioni, Bob.	Mi pare funzioni	<a href=https://appinventor.mit.edu/>Io, torno a giocare</a></td></tr>
</table>
	<div>
	   <p>
        	<input oninput="w3.filterHTML('#id01', '.item', this.value)" placeholder="Cerca all'interno della pagina....">
			<a  href="servizioIndex.php">Torna all'inserimento</a>
	   </p>
	 </div>
</body>
</html>
