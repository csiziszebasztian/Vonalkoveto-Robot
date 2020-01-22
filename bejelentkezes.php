```php
<?php
//a szokásos config include

$nev = $_POST['felhasz'];
$jelszo = md5($_POST['jelszo']);
include('config_minta.php');
$eredmeny = mysql_query("SELECT count(*) FROM `robot`");
$row = mysql_fetch_array($eredmeny);
$darab=$row[0];
if($darab > 0){
include_once('kereses_admin.php'); 
}
else{
 include_once('admin.html'); 
 }
?>

```