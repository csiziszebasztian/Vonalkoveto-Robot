```php
<?php
//ne feledkezzünk meg soha az adatbázishoz való kapcsolódásról, ezért include:
include ('config_minta.php');

//átvesszük a FORM által küldött adatokat azaz a nev, email értékeket
//a mysql_real_escape_string a crackerek ellen egy kis védelem érdemes használni

 $nev=mysql_real_escape_string($_POST["nev"]);
 $ido=mysql_real_escape_string($_POST["ido"]);
$atlido=mysql_real_escape_string($_POST["atlido"]);

// es itt a lenyeg, szúrjuk be az adatokat a diak táblába

  $sql=mysql_query("INSERT INTO robot (nev,ido,atlido) VALUES('$nev','$ido','$atlido')");

//ha valamiért nem sikerült a beszúrás, akkor hibaüzenet, egyébként üzenet, hogy sikerült
 if ($sql) { include_once('kereses_admin.php');}
 ?>
 ```