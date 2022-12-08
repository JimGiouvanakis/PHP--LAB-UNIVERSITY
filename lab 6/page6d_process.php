<?php
 $firstname = $_POST["firstname"];
 $lastname = $_POST["lastname"];
 $fathername = $_POST["fathername"];
?>
<html>
<head>
 <meta charset="utf-8" />
</head>
<body>
 <h1>Σελίδα υποδοχής στοιχείων</h1>
 <p>
 Υποβάλατε τα ακόλουθα στοιχεία:
 </p>
 <table align="center" border="0">
 <tr>
 <td>Όνομα:</td>
 <td><?php echo $firstname; ?></td>
 </tr>
 <tr>
 <td>Επίθετο:</td>
 <td><?php echo $lastname; ?></td>
 </tr>
 <tr>
 <td>Όνομα πατρός:</td>
 <td><?php echo $fathername; ?></td>
 </tr>
 </table>
 <p>
 Σας ευχαριστούμε!
 </p>
</body>
</html>