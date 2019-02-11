<?php
$con=mysqli_connect("localhost","root","","porto");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result1 = mysqli_query($con,"SELECT * FROM informatie WHERE id=1");
$result2 = mysqli_query($con,"SELECT * FROM informatie WHERE id=2");


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="description" content="Portfolio van Tristan Strookappe | Over Mij"/>
    <meta name="keywords" content="Tristan, Strookappe, Portfolio, Over, Mij, About, Me, Information, Wie, Ben, Ik"/>
    <meta charset="utf-8">
    <title>Tristan Strookappe - Over Mij</title>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <script src="js/main.js"></script>
</head>

<body>
    <div id="container" class="fade-in one">

        <nav class="content">
            <a href="index.html">
                <h2 class="streep">Tristan Strookappe</h2>
            </a>
            <ul>
                <li><a class="streep" href="contact.html" id="button">Contact</a></li>
                <li id="active">Over mij</li>
                <li><a class="streep" href="mijnprojecten.html">Mijn Projecten</a></li>
            </ul>
        </nav>

        <div id="maincontent">
            <div id="overmij" class="content fade-in two informatie">
                
                <h2><?php 
                     while($row = mysqli_fetch_array($result1)) {
                          echo$row["titel"] ?> </h2>
                <h3><?php echo $row["inhoud"]; }?> </h3>
                
            </div>

            <div id="mijnskills" class="content fade-in three informatie">
                
                <h2><?php 
                     while($row = mysqli_fetch_array($result2)) {
                          echo$row["titel"] ?> </h2>
                <h3><?php echo $row["inhoud"]; }?> </h3>
                <img src="img/html5.png" alt="html5 logo">
                <img src="img/css.png" alt="css logo">
                <img src="img/jquery.png" alt="jquery logo">
                <img src="img/ajax.png" alt="ajax logo">
                <img src="img/php.png" alt="php logo" class="speciaalphp">

            </div>
          </div>
        </div>


        <footer>
            <div class="right fade-in four">
                <p><i class="fas fa-map-marker-alt"></i>Utrecht, The Netherlands</p>
                <p><i class="fas fa-at"></i>tristan.strookappe@gmail.com</p>
                <p><i class="fas fa-phone"></i>+31 6 1234567</p>
            </div>
        </footer>

</body>
</html>