<!DOCTYPE HTML>
<html>
<head>
<title>Tabliczka Mnożenia</title>
<meta charset="utf-8">
<link rel="stylesheet" href="index.css">   
</head>
<body>
<h1>Tabliczka Mnożenia</h1>
<table>
<tr>
<th></th>    
<?php    
    
$wiersz = 10;
$kolumna = 10;
for ($i = 1; $i <= $kolumna; $i++)
{
echo "<th>" . $i ."</th>";
}
        
?>
</tr>
<?php 
     
for ($i = 1 ; $i <= $wiersz; $i++)
{
echo "<tr>";
echo "<th>" . $i . "</th>";
for ($j = 1; $j<= $kolumna; $j++)
{   
echo "<td>";
echo $i * $j;
        echo "</td>";         
     }
         echo"</tr>";
        
     }   
        
        ?>
    
</table>
</body>
</html>
