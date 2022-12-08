<?php
 function get_result($x){
 $y = 5 * $x**3 - 4 * $x**2 + 3*$x - 8;
 return $y;
 }
 $x_start = -30;
 $x_end = 30;
 $x_step = 0.2;
?>
<html>
<head>
 <meta charset="utf-8" />
</head>
<body>
 <p>
 Θα υπολογίσουμε το αποτέλεσμα της παράστασης
<b><i>y = 5x<sup>3</sup> - 4x<sup>2</sup> + 3x - 8</i></b>
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