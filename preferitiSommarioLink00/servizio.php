<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sommario-Utilità</title>
</head>
<body>
<?php
//Verifiche iniziali di circostanza
$test = trim($_POST["voce1"] && $_POST["voce2"] && $_POST["voce3"] && $_POST["voce4"]);
 if ($test == "" )   
{echo"Attenzione, i campi sono incompleti o non sono compilati correttamente!<div style='margin:15; '><a align='left' href='javascript:history.go(-1)'>Go Back</a></div>";exit();} 

// nome del file in cui inserire i testi
   $file = "./servizioR.php";
// apre il file in modalità "append", se non esiste lo crea
   $fp = fopen($file, "a");
// inserisce i valori ricevuti dal form in coda al file
   //fputs($fp, htmlspecialchars($_POST["voce1"]) . "\t" . htmlspecialchars($_POST["voce2"]) ."\t" . htmlspecialchars($_POST["voce3"]) . "\t" . htmlspecialchars($_POST["voce4"]) . "\r\n");
   
   fputs($fp,"<tr class='item'><td>".htmlspecialchars($_POST["voce1"]) . "\t" . htmlspecialchars($_POST["voce2"]) ."\t" . "<a href=".htmlspecialchars($_POST["voce4"]). ">".htmlspecialchars($_POST["voce3"])."</a></td></tr>\r\n");
// chiude il file
   fclose($fp);

?>
<!--Opportuna conferma di buon esito-->
<font size="5">Fatto! i dati sono stati inseriti.</font><br />
<!--Opzoonale:  far rivedere i risultati-->
<?php
/////
$file = "servizioR.php";
$numero_linee = count(file($file))-64;
echo "Numero di righe " . $numero_linee . "<br/>";
/////
?>
<a href="servizioR.php">qui puoi vedere i risultati</a>
</body>
</html>



		    

		   