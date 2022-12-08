<?php
 function get_result($x){
 $y = 5 * $x**3 - 4 * $x**2 + 3*$x - 8;
 return $y;
 }
?>
<html>
<head>
 <meta charset="utf-8" />
</head>
<body>
 <p>
 Θα υπολογίσουμε το αποτέλεσμα της παράστασης
 <b><i>y = 5x<sup>3</sup> - 4x<sup>2</sup> + 3x - 8</i></b>
 για διάφορες τιμές του <b><i>x</i></b>.
 </p>
 <table border="1" width="200">
 <tr>
 <th>x</th>
 <th>y</th>
 </tr>
 <tr>
 <td align="right">-3</td>
 <td align="right"><?= get_result(-3) ?></td>
 </tr>
 <tr>
 <td align="right">-1</td>
 <td align="right"><?= get_result(-1) ?></td>
 </tr>
 <tr>
 <td align="right">0</td>
 <td align="right"><?= get_result(0) ?></td>
 </tr>
 <tr>
 <td align="right">1</td>
 <td align="right"><?= get_result(1) ?></td>
 </tr>
 </table>
</body>
</html>