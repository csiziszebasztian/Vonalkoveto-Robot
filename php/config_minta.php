```php
<?php
header('Content-Type:text/html; charset=UTF-8');
$con = mysql_connect("localhost","root","root"); 
if (!$con) {
die('Nem sikerult kapcsolatot kiepiteni: ' . mysql_error());
           }
$ok=mysql_select_db("root_...robotadatbazis", $con);
if (!$ok) {
  die('Nem sikerult megnyitni az adatbazist: ' . mysql_error());
           }
$valami=mysql_query("SET NAMES UTF8");
?>
```