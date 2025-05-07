<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sommario-Utilità</title>
</head><body>
<?php
/////
$file = "./servizioR.php";define("file",$file);
$numero_linee = count(file($file));
echo "Numero di record " . $numero_linee -59 . "<br/>";
/////
?>
<?php
//Verifiche iniziali di circostanza
$test = trim($_POST["voce1"] && $_POST["voce2"] && $_POST["voce3"] && $_POST["voce4"]); if ($test == "" )   {echo"Attenzione, i campi sono incompleti o non sono compilati correttamente!};
<div>
<a align='left' href='javascript:history.go(-1)'>Go Back</a>
</div>";exit();}
// nome del file in cui inserire i testi//
$file;
// Apri il file in modalità lettura	
$file = fopen($file, 'r'); 
// Leggi il contenuto del file
$righe = array();
while (($riga = fgets($file)) !== false) {   
$righe[] = $riga;
}
///
fclose($file);
// Inserisci la stringa alla 11^_ultima^ riga
$nuova_riga = "<tr class='item'><td>".htmlspecialchars($_POST["voce1"]) . "\t" . htmlspecialchars($_POST["voce2"]) ."\t" . "<a href=".htmlspecialchars($_POST["voce4"]). ">".htmlspecialchars($_POST["voce3"])."</a></td></tr>\r\n";array_splice($righe, $numero_linee - 9, 0, $nuova_riga);
// Apri il file in modalità scrittura
$file = fopen(file, 'w');
// Scrivi il contenuto del file
foreach ($righe as $riga) {  
fwrite($file, $riga);
}
fclose($file);  ?>
<!--Opportuna conferma di buon esito-->
<font size="5">Fatto! i dati sono stati inseriti.</font><br/>
<!--Opzoonale:  far rivedere i risultati-->
<a href="servizioR.php"><br/>qui puoi vedere i risultati</a></body></html>		    		   