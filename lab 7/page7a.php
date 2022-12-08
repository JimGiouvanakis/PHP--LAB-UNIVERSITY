<?php
 $a = 12;
 $b = 25;
 $c = $a**2 + $b;
?>
<html>
<head>
 <meta charset="utf-8" />
</head>
<body>
 <h1>Βασικές δομές στην PHP : Μεταβλητές</h1>
 <p>
 Σε αυτή την άσκηση θα γίνει επίδειξη των μεταβλητών
 (<i>variables</i>) στην <b>PHP</b>.
 </p>
 <p>
 Θα εμφανίσουμε τις μεταβλητές <b>$a</b>, <b>$b</b> και <b>$c</b> με 2
τρόπους.
 </p>
 <ul>
 <li>
 με την εντολή <b>echo</b>: <br/>
 a = <?php echo $a; ?> <br/>
 b = <?php echo $b; ?> <br/>
 c = <?php echo $c; ?> <br/>
 </li>
 <li>
 με την <i>γρήγορη echo</i>: <br/>
 a = <?= $a ?> <br/>
 b = <?= $b ?> <br/>
 c = <?= $c ?> <br/>
 </li>
 </ul>
</body>
</html>