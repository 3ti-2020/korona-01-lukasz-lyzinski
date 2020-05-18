<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "lyzinski";

$conn = new mysqli($servername, $username, $password, $dbname);

$result=$conn->query("SELECT * from tabela1");

echo("<table border=2'>");
echo("<tr>
<th>Straszne</th>
<th>Straszniejsze</th>
<th>Najstraszniejsze</th>
</tr>");

while($row=$result->fetch_assoc() ){

    echo("<tr>");
    echo("<td>".$row['Straszne']."</td>"."<td>".$row['Straszniejsze']."</td>"."<td>".$row['Najstraszniejsze']."</td>");
    echo("</tr>");
}
echo("</table>");



?> 
</body>
</html>