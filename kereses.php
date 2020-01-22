```html
<html>
<head>
<meta charset="utf-8" />

</head>
<body>

<ul>
<li><a href="index.html">Kezdő oldal</a></li>
<li><a href="kereses.php">Keresés</a></li>
<li><a href="admin.html">Admin</a></li>

</ul>

<h1>Keresés</h1>
```php
<?php
include('config_minta.php');
$eredmeny=mysql_query("SELECT * FROM `robot`") or  die('Nem sikerult a lekerdezes: ' . mysql_errno());
echo "<table border = 1>
<tr>
<td>nev</td>
<td>ido</td>
<td>atlido</td>

</tr>";
while($row = mysql_fetch_array($eredmeny))
  {
  echo "<tr>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[2] . "</td>";
  echo "<td>" . $row[3] . "</td>";
  echo "<td>" . $row[4] . "</td>";
  echo "<td>" . $row[5] . "</td>";
  if ($row[6]!=1){
  echo "<td> nem<br /></td>";}
  else{
  echo "<td> igen<br /></td>";}
  echo "<td>" . $row[8] . "</td>";
  }
  echo "</table>";
  mysql_close($con); 

?>	

```


<ul>
<li><a href="index.html">Kezdő oldal</a></li>
<li><a href="kereses.php">Keresés</a></li>
<li><a href="admin.html">Admin</a></li>

</ul>


</body>
</html>
```