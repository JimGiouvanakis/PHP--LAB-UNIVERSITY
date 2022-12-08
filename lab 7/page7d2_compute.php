php
 $a = $_POST["a"];
 $b = $_POST["b"];
 $c = $_POST["c"];
 $x_start = -10;
 $x_end = 15;
 $x_step = 0.5;
 if (!is_numeric($a)){
 echo "Σφάλμα: Το a δεν είναι αριθμός!";
 exit;
 }
 function get_result($x){
 global $a, $b, $c;
 $y = $a * $x**2 + $b * $x + $c;
 return $y;
 }
?>
<html>
<head>
 <meta charset="utf-8" />
</head>
<body>
 <h1>Αποτέλεσμα υπολογισμού της δευτεροβάθμιας εξίσωσης</h1>
 <p> <a href="page7d.html">Επιστροφή</a> </p>
 <p>
 Παράμετροι χρήστη: <br />
 a = <?=$a?>, b = <?=$b?>, c = <?=$c?>
 </p>
 <table border="1" width="200">
 <tr>
 <th>x</th>
 <th>y</th>
 </tr>
 <?php
 for ($x = $x_start; $x <= $x_end; $x += $x_step){
 ?>
 <tr>
 <td align="right"> <?= $x ?> </td>
 <td align="right"> <?= get_result($x) ?> </td>
 </tr>
 <?php
 }
 ?>
 </table>
</body>
</html>