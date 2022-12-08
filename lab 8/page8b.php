<?php
 include_once 'lab8_library.php';
 $data_ok = false;
 $error_message = "";
 $method = $_SERVER['REQUEST_METHOD'];
 $firstname = PostValue("firstname");
 $lastname = PostValue("lastname");
 $username = PostValue("username");
 $passwordfirst = PostValue("passwordfirst");
 $passwordsecond = PostValue("passwordsecond");
 $gender = PostValue("gender");
 $agreeterms = PostValue("agreeterms");
 if ($method == "POST") { //Ο χρήστης υπέβαλε την φόρμα
 $data_ok = true;
 if ($firstname == "")
 AddError("Δεν γράψατε όνομα!");
 if ($lastname == "")
 AddError("Δεν γράψατε επίθετο!");
 if ($username == "")
 AddError("Δεν γράψατε όνομα χρήστη!");
 if ($passwordfirst == "")
 AddError("Δεν γράψατε password!");
 if (strlen($passwordfirst) < 8)
 AddError("Το password πρέπει να έχει τουλάχιστον 8 χαρακτήρες!");
 if ($passwordfirst != $passwordsecond)
 AddError("Δεν ξαναγράψατε σωστά το password!");
 if ($gender == "")
 AddError("Δεν επιλέξατε φύλο!");
 if ($agreeterms == "")
 AddError("Δεν συμφωνήσατε με τους όρους χρήσης!");
 }
?>
<html>
<head> <meta charset="utf-8" /> </head>
<body>
<h1>Εγγραφή νέου χρήστη</h1>
<?php
if ($data_ok) { //ΠΕΡΙΠΤΩΣΗ ΠΟΥ ΟΛΟΙ ΟΙ ΕΛΕΓΧΟΙ ΕΙΝΑΙ ΕΠΙΤΥΧΕΙΣ
?>
 <p> Η εγγραφή σας ολοκληρώθηκε επιτυχώς! </p>
<?php
} else { // ΑΛΛΙΩΣ ΕΜΦΑΝΙΣΕ ΤΗΝ ΦΟΡΜΑ ΜΕ ΤΙΣ ΥΠΑΡΧΟΥΣΕΣ ΤΙΜΕΣ ΤΟΥ ΧΡΗΣΤΗ
?>
 <p> Εισάγετε τα στοιχεία σας για να εγγραφείτε: </p>
 <?php
 if ($error_message != "") {
 ?>
 <p>
 <font color="red">
 Σφάλμα!<br/>
 <?=$error_message?>
 </font>
 </p>
 <?php
 }
 ?>
 <form action="page8b.php" method="POST">
<tr>
 <th>Όνομα</th>
 <td>
 <input type="text" name="firstname" value="<?=$firstname?>" />
 </td>
 </tr>
 <tr>
 <th>Επώνυμο</th>
 <td> <input type="text" name="lastname" value="<?=$lastname?>" /> </td>
 </tr>
 <tr>
 <th>Username</th>
 <td> <input type="text" name="username" value="<?=$username?>" /> </td>
 </tr>
 <tr>
 <th>Password</th>
 <td>
 <input type="password" name="passwordfirst" value="<?=$passwordfirst?>" />
 </td>
 </tr>
 <tr>
 <th>Retype Password</th>
 <td>
 <input type="password" name="passwordsecond" value="<?=$passwordsecond?>" />
 </td>
 </tr>
 <tr>
 <th>Φύλο</th>
 <td>
 <input type="radio" name="gender" value="male"
 <?php if ($gender == "male") echo "checked"; ?> /> Άνδρας <br/>
 <input type="radio" name="gender" value="female"
 <?php if ($gender == "female") echo "checked"; ?> /> Γυναίκα <br/>
 </td>
 </tr>
 <tr>
 <th>Όροι χρήσης</th>
 <td>
 <input type="checkbox" name="agreeterms" value="1"
 <?php if ($agreeterms == "1") echo "checked"; ?> />
 Συμφωνώ με τους όρους χρήσης
 </td>
 </tr>
 <tr>
 <td> <a href="page8b.php">Επαναφορά</a> </td>
 <td><input type="submit" value="Εγγραφή" /></td>
 </tr>
 </table>
 </form>
<?php
}
?>
</body>
</html>