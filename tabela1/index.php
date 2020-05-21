<!DOCTYPE html>
<html>
  <head>
    <title>Łukasz Łyziński</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1 class="imie">Łukasz Łyziński</h1>
    <div class="container">
      <div class="item header">
        <img class="obrazek2" src="../obrazki/emoji.jpg"/>
        <a href="../index.html"><img class="obrazek1" src="../obrazki/mothman1.jpg" alt="tekst alternatywny"></a>
        <img class="obrazek2" src="../obrazki/emoji.jpg"/>
      </div>
      <div class="item sidebar">
        <ul class="menu">
          <li class="blok">
            <div class="ty">
              <a class="text2" href="../sasquatch/index.html"
                >Sasquatch</a
              >
              <br />
            </div>
            <a class="text1"
              >Straszne</a
            >
          </li>
          <li class="blok">
            <div class="ty">
              <a class="text2" href="../jaskinia/index.html">Jaskiniowy potwór</a> <br />
            </div>
            <a class="text1">Straszniejsze</a>
          </li>
          <li class="blok">
              <div class="ty">
                  <a class="text2" href="../godzilla/index.html">Godzilla</a> <br />
                </div>
            <a class="text1">Najstraszniejsze</a>
          </li>
          <li class="blok">
              <a class="text1" href="../tabela2/index.php">Tabela2</a>
            </li>
          <li class="blok">
              <a class="text1" href="../kolejnosc/index.html">Kolejność dodania</a>
            </li>
        </ul>
      </div>
      <div class="item main">
      <a class="text3">Tabela1</a>
      <p>
      <?php

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "lyzinski";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $result=$conn->query("SELECT * from tabela1");

    echo("<table class='tabelka'>");
    echo("<tr>
    <th>Id</th>
    <th>Straszne</th>
    <th>Straszniejsze</th>
    <th>Najstraszniejsze</th>
    </tr>");

    while($row=$result->fetch_assoc() ){

        echo("<tr class='row'>");
        echo("<td class='kol'>".$row['Id']."</td>"."<td class='kol'>".$row['Straszne']."</td>"."<td class='kol'>".$row['Straszniejsze']."</td>"."<td class='kol'>".$row['Najstraszniejsze']."</td>");
        echo("</tr>");
    }
    echo("</table>");



    ?> 
      </p>
      </div>
    </div>
    <script src="../index.js"></script>
  </body>
</html>
