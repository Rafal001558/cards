<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafał_Bakowski gr2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
<h2>Wykonawca:</h2>
<p class="podpis">Rafał Bakowski grupa:  2</p>
<a href="cards.html">cards</a>

    </nav>
<left-side>


<form class="form" action="insert.php" method="POST">
    
    <input class="placeholder" type="text" name="nazwisko" placeholder="nazwisko"></br>
    
    <input class="placeholder" type="text" name="tytul" placeholder="tytul"></br>

    

    <input class="button" type="submit" value="Dodaj">
    </form>

</left-side>
<right-side>
<?php

//  $servername="localhost";
//  $username="root";
//  $password="";
// $dbname="dom";

$servername="sql7.freemysqlhosting.net";
$username="sql7373159";
$password="WwcDU7gMfM";
$dbname="sql7373159";



$conn= new mysqli($servername,$username,$password,$dbname);
$result=$conn->query("SELECT id_autor_tytul, name, tytul FROM lib_tyt, lib_aut_tyt, lib_autor WHERE lib_autor.id_autor=lib_aut_tyt.id_autor AND lib_tyt.id_tytul=lib_aut_tyt.id_tytul");

    

    echo("<table class='table'>");
    echo("<tr>
    <th>Id_autor_tytul</th>
    <th>Nazwisko</th>
    <th>Tytul</th>
    <th>Usuń</th>
</tr>");

     while($wiersz=$result->fetch_assoc()){
       echo("<tr>");
       echo("<td>".$wiersz['id_autor_tytul']."</td>");
       echo("<td>".$wiersz['name']."</td>");
       echo("<td>".$wiersz['tytul']."</td>");
       echo("<td class='td'>  <form class='form' action='delete.php' method='POST'>
       <input class='text' type='hidden'  name='ID' value='$wiersz[id_autor_tytul]' placeholder='ID'></br>
    <input class='button_del' type='submit' value='Usun'> </td>");
       echo("</tr>");
     };
    echo("</table>");
?>
    </right-side>
</body>
<script src="main.js"></script>
</html>