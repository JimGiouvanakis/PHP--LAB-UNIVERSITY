<?php
 function get_result($x){
 $y = 2 * $x**2 - 5 * $x - 3;
 return $y;
 }
 $x_start = -10;
 $x_end = 15;
 $x_step = 0.5;
?>
<html>
<head>
 <meta charset="utf-8" />
</head>
<body>
 <h1>Βασικές δομές στην PHP : Βρόχοι 'for'</h1>
 <p>
 Σε αυτή την άσκηση θα γίνει επίδειξη των βρόχων
 (<i>for loops</i>) στην <b>PHP</b>.
 </p>
 <p>
 Θα υπολογίσουμε το αποτέλεσμα της παράστασης
 <b><i>y = 2x<sup>2</sup> - 5x - 3</i></b>
 για διάφορες τιμές του <b><i>x</i></b>
 από <b><i><?= $x_start ?></i></b> έως <b><i><?= $x_end ?></i></b>
 με βήμα <b><i><?= $x_step ?></i></b>.
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