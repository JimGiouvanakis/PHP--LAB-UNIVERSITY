<?php
 include_once 'lab8_library.php';
 
 $firstname = PostValue("firstname");
 $lastname = PostValue("lastname");
 $username = PostValue("username");
 $passwordfirst = PostValue("passwordfirst");
 $passwordsecond = PostValue("passwordsecond");
 $gender = PostValue("gender");
 $agreeterms = PostValue("agreeterms");
 if ($firstname == "")
 ErrorExit("δεν γράψατε όνομα!");
 if ($lastname == "")
 ErrorExit("δεν γράψατε επίθετο!");
 if ($username == "")
 ErrorExit("δεν γράψατε όνομα χρήστη!");
 if ($passwordfirst == "")
 ErrorExit("δεν γράψατε password!");
 if ($passwordfirst != $passwordsecond)
 ErrorExit("δεν ξαναγράψατε σωστά το password!");
 if ($gender == "")
 ErrorExit("δεν επιλέξατε φύλο!");
 if ($agreeterms == "")
 ErrorExit("δεν συμφωνήσατε με τους όρους χρήσης!");
?>
<html>
<head> <meta charset="utf-8" /> </head>
<body>
 <h1> Ολοκλήρωση εγγραφής χρήστη </h1>
 <p> <a href="page8a.html">Επιστροφή</a> </p>
 <p> Η εγγραφή σας ολοκληρώθηκε επιτυχώς! </p>
 <p>
 firstname = <?= $firstname ?> <br/>
 lastname = <?= $lastname ?> <br/>
 username = <?= $username ?> <br/>
 passwordfirst = <?= $passwordfirst ?> <br/>
 passwordsecond = <?= $passwordsecond ?> <br/>
 gender = <?= $gender ?> <br/>
 agreeterms = <?= $agreeterms ?> <br/>
 </p>
</body>
</html>