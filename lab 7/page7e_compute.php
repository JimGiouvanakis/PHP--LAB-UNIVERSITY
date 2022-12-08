<?php
 $a = $_POST["a"];
 $b = $_POST["b"];
 $c = $_POST["c"];
 $x_start = $_POST["x_start"];
 $x_end = $_POST["x_end"];
 $x_step = $_POST["x_step"];
 if (!is_numeric($a)){ echo "Σφάλμα: Το a δεν είναι αριθμός!"; exit; }
 if (!is_numeric($b)){ echo "Σφάλμα: Το b δεν είναι αριθμός!"; exit; }
 if (!is_numeric($c)){ echo "Σφάλμα: Το c δεν είναι αριθμός!"; exit; }
 if (!is_numeric($x_start)){echo "Σφάλμα: Το x_start δεν είναι αριθμός!"; exit;}
 if (!is_numeric($x_end)){echo "Σφάλμα: Το x_end δεν είναι αριθμός!"; exit; }
 if (!is_numeric($x_step)){ echo "Σφάλμα: Το x_step δεν είναι αριθμός!"; exit;}
 if ($x_step<=0){echo "Σφάλμα: Το x_step πρέπει να είναι θετικό!"; exit;}
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
 <p>
 <a href="page7e.html">Επιστροφή</a>
 </p>
 <p>
 Παράμετροι χρήστη: <br/>
 a = <?=$a?>, b = <?=$b?>, c = <?=$c?> <br/>
 x_start = <?=$x_start?>, x_end = <?=$x_end?>, x_step = <?=$x_step?>
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