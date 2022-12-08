<?php
 function get_result($x){
 $y = 2 * $x**2 - 5 * $x - 3;
 return $y;
 }
?>
<html>
<head>
 <meta charset="utf-8" />
</head>
<body>
 <h1>Βασικές δομές στην PHP : Συναρτήσεις</h1>
 <p>
 Σε αυτή την άσκηση θα γίνει επίδειξη των συναρτήσεων
 (<i>functions</i>) στην <b>PHP</b>.
 </p>
 <p>
 Θα υπολογίσουμε το αποτέλεσμα της παράστασης
 <b><i>y = 2x<sup>2</sup> - 5x - 3</i></b>
 για διάφορες τιμές του <b><i>x</i></b>.
 </p>
 <table border="1" width="200">
 <tr>
 <th>x</th>
 <th>y</th>
 </tr>
 <tr>
 <td align="right">-2</td>
 <td align="right"><?= get_result(-2) ?></td>
 </tr>
 <tr>
 <td align="right">0</td>
 <td align="right"><?= get_result(0) ?></td>
 </tr>
 <tr>
 <td align="right">2</td>
 <td align="right"><?= get_result(2) ?></td>
 </tr>
 <tr>
 <td align="right">4</td>
 <td align="right"><?= get_result(4) ?></td>
 </tr>
 </table>
</body>
</html>