```html
<html>
<head>
<meta charset="utf-8" />

</head>
<body>


<ul>
<li><a href="kereses_admin.php">Keresés</a></li>
<li><a href="bevitel.html">Új adat felvitele</a></li>
<li><a href="index.html">Kilépés</a></li>
</ul>
</div>
<div id="tartalom">
<h1>Administráció</h1>
```php
<?php
include('config_minta.php');
$eredmeny=mysql_query("SELECT * FROM `robot`") or  die('Nem sikerult a lekerdezes: ' . mysql_errno());
echo "<table>
<tr>
<td>azon</td>
<td>ido</td>

<td></td>
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
 echo "<td><a href=\"update.php?id=$row[0]\">nem</a><br /></td>";}
  else{
   echo "<td><a href=\"update.php?id=$row[0]\">igen</a><br /></td>";}
  if ($row[7]!=1){
 echo "<td><a href=\"update2.php?id=$row[0]\">nem</a><br /></td>";}
  else{
   echo "<td><a href=\"update2.php?id=$row[0]\">igen</a><br /></td>";}
  echo "<td>" . $row[8] . "</td>";
  echo "<td><a href=\"torol.php?id=$row[0]\">Törlés</a><br /></td>";
  echo "</tr>";
    }
  echo "</table>";
  mysql_close($con); 

?>	
```
<ul>
<li><a href="kereses_admin.php">Keresés</a></li>
<li><a href="bevitel.html">Új adat felvitele</a></li>
<li><a href="index.html">Kilépés</a></li>
</ul>
</div>
</div>
</body>
</html>
```