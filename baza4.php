<?php 
error_reporting(E_ALL ^ E_NOTICE); 
include('baza.php');
// odbieramy dane z formularza 
$imie = $_POST['imie']; 
$nazwisko = $_POST['nazwisko'];
$email = $_POST['email']; 

if($imie and $nazwisko and $email) { 
     
    
    // dodajemy rekord do bazy 
    $query = mysql_query("INSERT INTO test SET imie='$imie', nazwisko='$nazwisko', email='$email'"); 
     
    if($query) echo "Rekord został dodany poprawnie"; 
    else echo "Błąd nie udało się dodać nowego rekordu"; 
     
} 

?>
<html>
<head>
<title>Dane  - formularz</title>
</head>
<body>
<form action="baza4.php" method="post"> 
imię:<br /> 
<input type="text" name="imie" /><br /> 
nazwisko:<br /> 
<input type="text" name="nazwisko" /><br /> 
e-mail:<br /> 
<input type="text" name="email" /><br /> 
<input type="submit" value="dodaj" /> 
</form>
</body>
</html> 